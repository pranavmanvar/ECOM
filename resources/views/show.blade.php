<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <meta name="viewport" content="width=@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Show Product') }}
                        <a href="/home" style="float: right"; class="btn btn-dark btn-outline-danger m-1"> Back </a>
                    </div>
                    
                     {{-- <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                         @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                       
                        {{ __('You are logged in!') }} --}}
                        <div class="container mt-2 p-2">
                           
                             <table class="table table-striped table-inverse table-responsive">
                                <thead class="thead-inverse">
                                    <tr class="bg-warning">
                                        <th>Id</th>
                                        <td>Product Photo</td>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product Desc</th>
                                        <th class="text-center" colspan="2"> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $p)
                                        <tr>
                                            
                                            <td>{{$p->id}}</td>
                                            <td><img src="{{ asset('/images') }}/{{$p->product_photo}}" alt="img" width="140px" height="110px"></td>
                                            <td>{{$p->product_name}}</td>
                                            <td>{{$p->product_price}}</td>
                                            <td>{{$p->product_description}}</td>
                                            <td style="font-size: 20px">
                                                <a href="/product/{{$p->id}}/edit"><i class="bi bi-pencil-square"></i></a>
                                                &nbsp;
                                                <a href="/product/create"><i class="bi bi-plus-square"></i></a>
                                                &nbsp;
                                                <form action="/product/{{$p->id}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                   <button type="submit" class="btn btn-lg text-danger" style="font-size: 20px"> <i class="bi bi-trash3-fill"></i></button>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach  
                                    </tbody>
                               </table> 
                               {!! $products->withQueryString()->links('pagination::bootstrap-4') !!}
                        </div>
                </div>
                    </div>
            </div>
        </div>
    </div>
    @endsection
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>