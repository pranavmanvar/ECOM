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
  @section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header"><h2>Add Products</h2>
                    <a href="/home" style="float: right"; class="btn btn-dark btn-outline-danger m-1"> Back </a>
                      <form action="/product" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-3 mx-auto">
                          <label for="email">Product Name:</label>
                          <input type="text" class="form-control" id="email" placeholder="Enter Product Name" value="{{old('pname')}}" name="pname">
                          @error('pname')
                          <span class="text-danger"> <strong>{{ $message }}</strong></span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="pwd">Product price:</label>
                          <input type="text" class="form-control" id="pwd" placeholder="Enter Product price" value="{{old('pprice')}}" name="pprice">
                          @error('pprice')
                          <span class="text-danger"> <strong>{{ $message }}</strong></span>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pwd">Product Description:</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter Product Description" value="{{old('pdesc')}}" name="pdesc">
                          @error('pdesc')
                          <span class="text-danger"> <strong>{{ $message }}</strong></span>
                          @enderror 
                          </div>
                          <div class="mb-3">
                            <label for="pwd">Upload Product Image:</label>
                            <input type="file" class="form-control" id="pwd" placeholder="Enter Product price"  name="pimg">
                            @error('pimg')
                            <span class="text-danger"> <strong>{{ $message }}</strong></span>
                            @enderror
                          </div>
                        
                      <button type="submit" class="btn btn-primary">Add Product</button>
                      </form>
     
            </div>
        </div>
    </div>
</div>
 
   
                  
</body>
</html>
