<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css"/>
</head>
<body>
<div class="header">
    <nav class="links">
        <a href="clients">Clients </a>
        <a href="deliveries-types">Deliveries types</a>
        <a href="last-deliveries">Last deliveries </a>
        <a href="inactive-clients">Inactive clients</a>
    </nav>
</div>
<section class="main-box">
    <div class="client-info-container  ">
        <div> Name: {{ $client->name}}</div>
        <div> Phone: {{$client->phone}}</div>
    </div>

    <div class="deliveries-container">
        @foreach($deliveries as $key =>  $delivery)
            <div class="delivery-info-record">
                <div>Address: {{$addresses->where('clientID',$client->id)->first()['title']}}</div>
                <div> Date:{{$delivery->created_at}}</div>
                <div>Total sum: {{$deliveryLines[$key]->price * $deliveryLines[$key]->QTY}} </div>
                <div>Status: {{($delivery->checkStatus($delivery->status))}}</div>
            </div>
        @endforeach

    </div>
</section>
</body>
</html>
