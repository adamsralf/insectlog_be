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
    <h1 class="text-center text-4xl font-bold mb-4">{{ $insect->name }}</h1>

    <p class="mb-16">{{ $insect->description }}</p>
    <span class="right">
        <img class="mb-4" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/652/unsplash-daisy.jpg" alt="daisy photographed from below">
        <br>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/652/unsplash-daisy.jpg" alt="daisy photographed from below">
    </span>

    <table width="468" cellspacing="0" cellpadding="0" border="0" style="width: 468px; height: 201px;">
        <tbody>
            <tr>
                <td>Größe:</td>
                <td>{{ $insect->size }}</td>
            </tr>

            <tr>
                <td>Lebensdauer:</td>
                <td>{{ $insect->lifespan }}</td>
            </tr>

            <tr>
                <td>Ernährung:</td>
                <td>{{ $insect->food }}</td>
            </tr>

            <tr>
                <td>Gattung:</td>
                <td>{{ $insect->species }}</td>
            </tr>

            <tr>
                <td>Wissenschaftlicher Name:</td>
                <td>{{ $insect->species_name }}</td>
            </tr>

            <tr>
                <td>Lebensraum:</td>
                <td>{{ $insect->habitat }}</td>
            </tr>

            <tr>
                <td>Feinde:</td>
                <td>{{ $insect->enemies }}</td>
            </tr>

            <tr>
                <td>Merkmale:</td>
                <td>{{ $insect->indicator }}</td>
            </tr>
        </tbody>
    </table>

    <div id="qr"><img src="https://via.placeholder.com/150" height="100%" width="100%"></div>
</body>
</html>
