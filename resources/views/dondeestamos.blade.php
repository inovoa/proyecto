<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Garage Detail</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="{{ URL::asset('/css/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/estilos.css') }}" type="text/css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

</head>

<body>

    <div class="container">
        <section class="barranavegacion">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('welcome') }}"><img src="{{ URL::asset('/css/logo.png') }}" alt="Smiley face" height="50" width="50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('welcome') }}"> Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('dondeestamos') }}"> Donde estamos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contacto') }}"> Contacto</a>
                        </li>

                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            <a href="{{ url('/home') }}">Mi cuenta</a>
                            @else
                            <a href="{{ route('login') }}">Iniciar sesión</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                </div>
            </nav>
        </section>


        <section class="apiydireccion">


            <div class="apidondeestamos">
                <div id="mapid" style="width: 600px; height: 400px; position: relative;" class="leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag" tabindex="0">
                    <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="leaflet-pane leaflet-tile-pane">
                            <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                <div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/2723" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(56px, -91px, 0px); opacity: 1;"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/2723(1)" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(312px, -91px, 0px); opacity: 1;"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/2724" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(56px, 165px, 0px); opacity: 1;"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/2724(1)" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(312px, 165px, 0px); opacity: 1;"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/2723(2)" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-200px, -91px, 0px); opacity: 1;">
                                    <img alt="" role="presentation" src="./Quick Start - Leaflet_files/2723(3)" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(568px, -91px, 0px); opacity: 1;"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/2724(2)" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-200px, 165px, 0px); opacity: 1;"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/2724(3)" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(568px, 165px, 0px); opacity: 1;"></div>
                            </div>
                        </div>
                        <div class="leaflet-pane leaflet-shadow-pane"></div>
                        <div class="leaflet-pane leaflet-overlay-pane"></div>
                        <div class="leaflet-pane leaflet-marker-pane"></div>
                        <div class="leaflet-pane leaflet-tooltip-pane"></div>
                        <div class="leaflet-pane leaflet-popup-pane"></div>
                        <div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(1.04805e+06px, 697379px, 0px) scale(4096);"></div>
                    </div>
                    <div class="leaflet-control-container">
                        <div class="leaflet-top leaflet-left">
                            <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="https://leafletjs.com/examples/quick-start/example-basic.html#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="https://leafletjs.com/examples/quick-start/example-basic.html#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div>
                        </div>
                        <div class="leaflet-top leaflet-right"></div>
                        <div class="leaflet-bottom leaflet-left"></div>
                        <div class="leaflet-bottom leaflet-right">
                            <div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com/" title="A JS library for interactive maps"></a><a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,
                                <a href="https://www.mapbox.com/"></a></div>
                        </div>
                    </div>
                </div>
                <script>
                    var mymap = L.map('mapid').setView([40.4016311, -3.7008796, 17], 15);

                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        maxZoom: 18,
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        id: 'mapbox/streets-v11'
                    }).addTo(mymap);

                    L.marker([40.4016311, -3.7008796]).addTo(mymap).bindPopup("<b>Garage Detail<b><br><center><a href='{{ url('welcome') }}' target='_blank'>garagedetail.es</a>").openPopup();

                    var popup = L.popup();
                </script>
            </div>
            <div class="direccion">
                <p>Calle de Martín de Vargas, 42, 28005 Madrid.</p>
                <p><a href="{{ url('welcome') }}">www.garagedetail.es</a></p>
                <p>Telefono: 645321458</p>
                <p>Horario: Lunes-Viernes, 9:30-20:00</p>
            </div>
        </section>




        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="{{ URL::asset('/css/logo.png') }}" alt="" width="100" height="100">
                    <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Nosotros</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="{{ url('dondeestamos') }}">Donde estamos</a></li>
                        <li><a class="text-muted" href="#">Quienes somos</a></li>
                        <li><a class="text-muted" href="{{ url('contacto') }}">Contacto</a></li>

                </div>
                <div class="col-6 col-md">
                    <h5>Redes sociales</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://www.youtube.com">Youtube</a></li>
                        <li><a class="text-muted" href="https:/www.Instagram.com">Instagram</a></li>
                        <li><a class="text-muted" href="https:/www.Facebook.com">Facebook</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Terminos de uso</a></li>
                        <li><a class="text-muted" href="#">Politicas de privacidad</a></li>

                </div>
            </div>
        </footer>









    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>