<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1>order details</h1>
    customer name<h1>{{ $order->name }}</h1>
    customer email<h1>{{ $order->email }}</h1>
    customer phone<h1>{{ $order->phone }}</h1>
    customer address<h1>{{ $order->address }}</h1>
    customer user id<h1>{{ $order->user_id }}</h1>
    Product name<h1>{{ $order->product_title }}</h1>
    Product price<h1>{{ $order->price }}</h1>
    Product quantity<h1>{{ $order->quantity}}</h1>
    payment status<h1>{{ $order->payment_status}}</h1>
    product id<h1>{{ $order->product_id}}</h1>

    <br><br>
    <img height="250px" width="300px" src="product/{{ $order->image }}"

</body>
</html>