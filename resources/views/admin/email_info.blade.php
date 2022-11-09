<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style type="text/css">
    label{
      display:inline-block;
      width:200px;
      font-size: 15px;
      font-weight: :bold;
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

              <h1 style="text-align: center;font-size:25px;">Send email to {{ $order->email }}</h1>
              <form action="{{ url('send_user_email',$order->id) }}" method="POST">
                @csrf
              <div style="padding-left:35%; padding-top:30px;">
                <label>Email Greeting</label>
                <input style="color:black" type="text" name="greeting">
              </div>

              <div style="padding-left:35%; padding-top:30px;">
                <label>Email Firstline</label>
                <input style="color:black" type="text" name="firstline">
              </div>
              <div style="padding-left:35%; padding-top:30px;">
                <label>Email body</label>
                <input style="color:black" type="text" name="body">
              </div>
              <div style="padding-left:35%; padding-top:30px;">
                <label>Email button name</label>
                <input style="color:black" type="text" name="button">
              </div>
              <div style="padding-left:35%; padding-top:30px;">
                <label>Email url</label>
                <input style="color:black" type="text" name="url">
              </div>

              <div style="padding-left:35%; padding-top:30px;">
                <label>Email Last line</label>
                <input style="color:black" type="text" name="lastline">
              </div>
              <div style="padding-left:35%; padding-top:30px;">
                <label>Email Greeting</label>
                <input type="submit" value="send email" class="btn btn-primary">
              </div>

            </form>
            </div>
        </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>