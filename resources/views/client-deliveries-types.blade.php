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
    <h1 class="main-text">Klienti, kuriem bija dažādi piegādes tipi uz vienu adresi, gan šķidrās preces, gan cietās</h1>
    <div class="client-names-and-addresses-box">
        @foreach($clientNames as $key => $name)
            <div class="info-about-client">
                {{$name}} - {{$clientAddresses[$key]}}
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
