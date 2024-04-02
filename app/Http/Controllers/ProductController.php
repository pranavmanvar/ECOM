<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Isset_;
use Psy\CodeCleaner\IssetPass;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset(auth()->user()->id))
        {
            $products = product::paginate(5);
            return view('/show',['products'=>$products]);
        } 
        else 
        {
          return redirect('/login')->with('loginmsg','Error please login first!');
       
        }
        
        // echo ' index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset(auth()->user()->id))
        {
            return view('addproduct');
        } else 
        {
            return redirect('/home')->with('loginmsg','Error please login first!');
        }
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pname'=>'required|alpha',
            'pprice'=>'required|numeric',
            'pdesc'=>'required',
            'pimg'=>'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        
        $product = new product();

        $product->product_name=$request->input('pname');
        $product->product_price=$request->input('pprice');
        $product->product_description=$request->input('pdesc');
        $imageName = time().'.'.$request->pimg->extension();
        $request->pimg->move(public_path('images'), $imageName);
        $product->product_photo= $imageName;   
        
        if ($product->save())
        {
            return redirect('/home')->with('success','Product Inserted Successfully !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo 'edit call';
        $product = product::find($id);
        return view('edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    //    echo 'update'.$id;

    $request->validate([
        'pname'=>'required|alpha',
        'pprice'=>'required|numeric',
        'pdesc'=>'required',
        // 'pimg'=>'required|image|mimes:png,jpg,jpeg|max:2048',
    ]);

    $product = product::find($id);
    $product->product_name=$request->input('pname');
      $product->product_price=$request->input('pprice');
      $product->product_description=$request->input('pdesc');

        if ($request->hasFile('pimg')) 
        {
            $imageName = time().'.'.$request->file('pimg')->extension();
            $request->pimg->move(public_path('images'), $imageName);
        }
        else {
            $imageName = $product->product_photo;
        }
        $product->product_photo= $imageName;
        
        if ($product->save())
      {
          return redirect('/home')->with('success','Product Updated Successfully !');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo 'delete';

        $product = product::find($id);
        
        
        if ($product->delete())
         {
            return redirect('/home')->with('dsuccess','Product Deleted Sucessfully !');
        }
    }
}
