<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LAF en desarrollo">
    <meta name="author" content="LAF">

    <meta property="og:title" content="LAF" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="LAF en desarrollo" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="xyz.demo-laf.www" />
    <meta property="og:url" content="http://laf-demo.xyz" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>LAF-Demo</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

    <div id="app" v-cloak>
        <!-- Fixed navbar -->
        <div id="navigation" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>Proyecto LAF</b></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#home" class="smoothScroll">Inicio</a></li>
                        <li><a href="#desc" class="smoothScroll">Descripción</a></li>
                        <li><a href="#showcase" class="smoothScroll">Adicional</a></li>
                        <li><a href="#contact" class="smoothScroll">Contacto</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Acceder</a></li>
                        <!-- <li><a href="{{ url('/register') }}">Registrarse</a></li> -->
                        @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <h3><a href="{{ url('/login') }}" class="btn btn-lg btn-success"> Iniciar DEMO</a></h3>

        <footer>
            <div id="c">
                <div class="container">
                    <p>
                        <H3>Proyecto LAF en desarrollo</H3>
                        <br/>
                    </p>
                </div>
            </div>
        </footer>

    </div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ url (mix('/js/app-landing.js')) }}"></script>
    <script>
        $('.carousel').carousel({
            interval: 3500
        })
    </script>
</body>
</html>
