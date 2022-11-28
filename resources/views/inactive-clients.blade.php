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
    <h1 class="main-text">Saraksts ar klientiem, kuriem nekad netika piegādāta šķidrā prece </h1>
    <div class="client-names-and-addresses-box">
        @foreach($addressesTitles as $key => $addressesTitle)
            <div class="info-about-client">
                <div>Name: {{$clientNames[$key]}}</div>
                <div>Address: {{$addressesTitle->title}}</div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
