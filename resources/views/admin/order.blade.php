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
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style>
        .title_deg{
            font-size: 40px;
            padding-bottom: 40px;
            text-align: center
        }
    .table_deg{
        border:2px solid white;
        width:70%;
        margin:auto;
        
        text-align: center;


    }
    .th_deg{
        background-color: aqua;
    }
</style>
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
                <h1 class="title_deg">All orders</h1>
                <div style="margin:auto;padding:30px;padding-left:400px;">
                    <form action="{{ url('search') }}" method="get">
                        @csrf
                        <input style="color:black;" type="text" name="search" placeholder="search for something"/>
                        <input type="submit" value="Search" class="btn btn-outline-primary"/>
                    </form>
                </div>

                <table class="table_deg">
                    <tr class="th_deg">
                        <th style="padding:10px">Name</th>
                        <th style="padding:10px" >Email</th>
                        <th style="padding:10px">Address</th>
                        <th style="padding:10px" >Phone</th>
                        <th style="padding:10px" >Product Title</th>
                        <th style="padding:10px" >Quantity</th>
                        <th style="padding:10px" >Price</th>
                        <th style="padding:10px" >Payment Status</th>
                        <th style="padding:10px">Delivery Status</th>
                        <th style="padding:10px">Image</th>
                        <th style="padding:10px">Delivered</th>
                        <th style="padding:10px">Print pdf</th>
                        <th style="padding:10px">Send Email</th>
                    </tr>
                    @forelse($order as $order)
                    <tr>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>\
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->product_title }}</td>
                        <td>{{ $order->quantity}}</td>
                        <td>{{ $order->price}}</td>
                        <td>{{ $order->payment_status}}</td>
                        <td>{{ $order->delivery_status}}</td>
                        <td><img src="/product/{{ $order->image }}"></td>
                        @if($order->delivery_status=='processing')

                        <td><a href="{{ url('delivered',$order->id) }}"class="btn btn-primary" onclick="return confirm('Are you sure this product is delivered!!!')" style="padding:10px;margin:5px;color:aquamarine;" >Delivered    </td>
                            @else
                            <td>
                            <p style="padding:10px;margin:5px;color:aquamarine;">Delivered</p></td>
                                
                            
                                
                            @endif

                            <td><a href="{{ url('print_pdf',$order->id) }}" class="btn btn-secondary">Print PDF</a> </td>
                            <td><a href="{{ url('send_email',$order->id) }}" class="btn btn-info">Send Email</a> </td>
                    
                    </tr>
                    @empty
                    <div>
                        <p>No data found</p>
                    </div>
                    @endforelse
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>