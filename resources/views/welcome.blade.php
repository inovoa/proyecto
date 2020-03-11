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
        <section class="carrouselimagenes">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ URL::asset('/css/img1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ URL::asset('/css/img1.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ URL::asset('/css/img1.jpg') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="serviciosofrecidos">
            <h2>Servicios que realizamos</h2>

            <div class="servicios">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL::asset('/css/exterior.jpg.webp') }}" width="200px" height="200px" alt="exterior">
                    <div class="card-body">
                        <h5 class="card-title">Limpieza exterior</h5>
                        <p class="card-text">Limpieza del exterior del vehiculo con los cuidados adecuados.</p>
                        <a href="#" class="btn btn-primary">Pedir cita</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL::asset('/css/interior.jpg') }}" width="200px" height="200px" alt="interior">
                    <div class="card-body">
                        <h5 class="card-title">Limpieza interior</h5>
                        <p class="card-text">Limpieza del interior del vehiculo con los cuidados adecuados.</p>
                        <a href="#" class="btn btn-primary">Pedir cita</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL::asset('/css/pulido.jpg') }}" width="200px" height="200px" alt="pulido">
                    <div class="card-body">
                        <h5 class="card-title">Pulido y sellado</h5>
                        <p class="card-text">Pulido y sellado del exterior del vehiculo con los cuidados adecuados.</p>
                        <a href="#" class="btn btn-primary">Pedir cita</a>
                    </div>
                </div>

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