@extends('layouts.app')
@section('content')
@if (session('loginmsg'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error!</strong> {{ session('loginmsg') }}
    </div>
    @endif

    <h2 class=" text-center my-3 text-danger text-capitalize" >welome to my Shop</h2>
    <div class="row">
       @foreach ($products as $p)
       <div class="col-4 mt-4">
        <div class="card" style="width:350px; height:450px">
            <img class="card-img-top img-thumbnail " src="{{ asset('/images') }}/{{$p->product_photo}}" alt="Card image" >
            <div class="card-body">
              <h4 class="card-title">{{$p->product_name}}</h4>
              <p class="card-text">{{$p->product_description}}</p>
              <h4 class="card-text">Price : {{$p->product_price}}</h4>
              <a href="/buy" class="btn btn-danger"> Buy Now</a>
            </div>
          </div>
    </div>
       @endforeach 
       <div class="row my-5 ">
        <div class="col-12 d-flex justify-content-center">
            {!! $products->withQueryString()->links('pagination::bootstrap-4') !!}
        </div>
   </div>      
</div>
@endsection