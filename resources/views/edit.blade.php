<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    <div class="col-6 mx-auto">
        <h2 class="text-center">Edit Products</h2>
  <form action="/product/{{$product->id}} " method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="mb-3 mt-3 mx-auto">
      <label for="email">Product Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Product Name" value="{{$product->product_name}}" name="pname">
      @error('pname')
      <span class="text-danger"> <strong>{{ $message }}</strong></span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="pwd">Product price:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Product price" value="{{$product->product_price}}" name="pprice">
      @error('pprice')
      <span class="text-danger"> <strong>{{ $message }}</strong></span>
      @enderror
    </div>
    <div class="mb-3">
        <label for="pwd">Product Description:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter Product Description" value="{{$product->product_description}}" name="pdesc">
      @error('pdesc')
      <span class="text-danger"> <strong>{{ $message }}</strong></span>
      @enderror 
      </div>
      <img src="{{ asset('/images') }}/{{$product->product_photo}}" alt="img" width="100px" height="70px">
      <div class="mb-3">
        <label for="pwd">Upload Product Image:</label>
        <input type="file" class="form-control" id="pwd" placeholder="Enter Product price"  name="pimg">
        @error('pimg')
        <span class="text-danger"> <strong>{{ $message }}</strong></span>
        @enderror
      </div>
      
    
  <button type="submit" class="btn btn-primary">Update Product</button>
  </form>
    </div>
  </div>
</div>

</body>
</html>
