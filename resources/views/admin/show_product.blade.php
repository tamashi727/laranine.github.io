<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
    <!-- End layout styles -->
    <style type="text/css">
    .center{
        margin:auto;
        width:50%;
        border:2px solid white;
        text-align: center;
        margin-top: 40px;
    }
    .font_s{
        text-align: center;
        padding-top: 40px;
        font-size: 40px;
    }
    .th{
        padding: 10px;
    }

    </style>
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
                <h2 class="font_s">All Products</h2>
                <table class="center">
                    <tr style="background-color: aqua">
                        <th class="th">product title</th>
                        <th class="th">description</th>
                        <th class="th">quantity</th>
                        <th class="th">category</th>
                        <th class="th">price</th>
                        <th class="th">discount price</th>
                        <th class="th" >product image</th>
                        <th class="th" >Delete</th>
                        <th class="th" >Edit</th>
                    </tr>
                    @foreach($product as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->discount_price }}</td>
                        <td>
                            <img src="/product/{{ $product->image }}" style="width:100px;height:70px;">
                        </td>
                        <td><a class="btn btn-danger"href="{{ url('delete_product',$product->id) }}">Delete</a></td>
                        <td><a class="btn btn-success"href="{{ url('update_product',$product->id) }}">Edit</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>