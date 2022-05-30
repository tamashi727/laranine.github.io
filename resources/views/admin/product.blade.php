<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
    <style type="text/css">
    .div_center{
      text-align: center;
      padding-top: 40px;

    }
    label{
      display:inline-block;
      width:200px;
    }
    
    </style>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
              @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}

                </div>
                @endif


                <div class="div_center">
                  <h1>Add Product</h1>
                  <div>
                    <form action="{{ url('/add_product') }}" method="post" enctype="multipart/form-data">
                      @csrf
                  <label>Product title</label>
                  <input type="text" style="color:black" name="title" placeholder="write a title" required="">
                  </div>

                  <div style="padding: 10px;margin:10px;">
                    <label>Product description</label>
                    <input type="text" style="color:black;" name="description" placeholder="write a description"required="" >
                    </div>

                    <div style="padding: 10px;margin:10px;">
                      <label>Product price</label>
                      <input type="number" style="color:black" name="price" placeholder="product price"required="">
                      </div>
                      <div style="padding: 10px;margin:10px;">
                        <label>Discount price</label>
                        <input type="number" style="color:black" name="dis_price" placeholder="discount price">
                        </div>

                      <div style="padding: 10px;margin:10px;">
                        <label>Product quantity</label>
                        <input type="number" style="color:black" name="quantity" min="0" placeholder="product  quantity"required="">
                        </div>

                        <div style="padding: 10px;margin:10px;">
                          <label>Product category</label>

                          <select name="category" style="color: black"required="">
                            <option value="" selected="">Add category</option>
                            @foreach($category as $categori)
                            <option value="{{ $categori->category_name }}">{{ $categori->category_name }}</option>
                            @endforeach
                          </select>
                          
                          </div>

                          <div style="padding: 10px;margin:10px;">
                            <label>Product Image here</label>
                            <input type="file" style="color:black" name="image" placeholder="write a title"required="">
                            </div>

                            <div style="padding: 10px;margin:10px;">
                              
                              <input type="submit" value="Add product" class="btn btn-primary" >
                              </div>
                            </form>

                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>