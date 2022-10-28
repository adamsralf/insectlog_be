<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .right {
            float: right;
            margin-left: 1em;
        }

        table td { border: 0; padding-bottom: 2em; }

        #qr { position: fixed; bottom: 0px; right: 0px; width: 200px; height: 200px; opacity: .1; }
    </style>
</head>
<body>
    <h1 class="text-center text-4xl font-bold mb-4">{{ $insect->species_name }}</h1>

    <p class="mb-16">{{ $insect->description }}</p>

    <div class="grid grid-cols-2 gap-1 justify-evenly">
        <div>
            <p><b>Größe:</b> {{ $info->size }}</p>
            <p><b>Lebensdauer:</b> {{ $info->lifespan }}</p>
            <p><b>Ernährung:</b> {{ $info->food }}</p>
            <p><b>Gattung:</b> {{ $info->species }}</p>
            <p><b>Wissenschaftlicher Name:</b> {{ $info->species_name }}</p>
            <p><b>Lebensraum:</b> {{ $info->habitat }}</p>
            <p><b>Feinde:</b> {{ $info->enemies }}</p>
            <p><b>Merkmale:</b> {{ $info->indicator }}</p>
        </div>

        <div>
            <img class="mb-4" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/652/unsplash-daisy.jpg" alt="daisy photographed from below">
            <br>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/652/unsplash-daisy.jpg" alt="daisy photographed from below">
        </div>
    </div>

    <div id="qr"><img src="https://via.placeholder.com/150" height="100%" width="100%"></div>
</body>
</html>
