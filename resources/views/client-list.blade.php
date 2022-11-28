<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
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

    <div class="left-box">
        @foreach($clients as $client)
            <div class="client-records">
                <div>{{$client->name}} - {{$client->phone}}</div>
                <div>
                    <button type="button"
                            onclick="refreshDiv('{{$addresses->where('clientID',$client->id)->first()['title']}}')">
                        Parādīt adreses
                    </button>
                    <form action="client-deliveries" method="get">
                        @csrf
                        <input type="hidden" name="clientID" value="{{$client->id}}">
                        <button type="submit">
                            Atvērt piegādes
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <div id="address-info" class="right-box">
        Here info about Client
    </div>
</section>
<script type="text/javascript">
    function refreshDiv(address) {
        document.getElementById("address-info").innerHTML = address;
    }

</script>
</body>
</html>
