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
<div>
    <h1 class="main-text">Saraksts ar visiem klientu adresēm, ar informāciju par pēdējo piegādi, kas tika veikta uz doto
        adresi. </h1>
    <div class="client-names-and-addresses-box">
        @foreach($names as $key => $name)
            <div class="info-about-client">
                <div> Name: {{$name->name}}</div>
                <div> Address:{{$addresses[$key]}}</div>
                <div> Date: {{$dates[$key]}} </div>
                <div> Type: {{$types[$key]}} </div>
                <div>Total sum:{{$productPrices[$key] * $productQTY[$key]}}</div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
