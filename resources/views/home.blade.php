@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <div class="container mt-2 p-2">
                        <div class="d-inline-flex justify-content-lg-start">
                            <a href="product/create"  class="btn btn-dark btn-outline-danger m-1">Add Products
                            </a><a href="/product"  class="btn btn-danger btn-outline-dark m-1">Show Products</a>
                        </div>
                    </div>
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

                    {{-- for data inserting alert --}}
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Success!</strong> {{ session('success') }}
                      </div>
                    @endif
                    {{-- for data deleted alert --}}
                    @if (session('dsuccess'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Success!</strong> {{ session('dsuccess') }}
                      </div>
                    @endif
                   
                </div>
                    
            </div>
        </div>
    </div>
</div>
@endsection
