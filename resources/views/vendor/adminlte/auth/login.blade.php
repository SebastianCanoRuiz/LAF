@extends('adminlte::layouts.auth')

@section('htmlheader_title')
Log in
@endsection

@section('content')
<body class="hold-transition login-page" style="background-image: url('{{ asset('assets/images/img_bg_4.jpg') }}')">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>LAF</b></a>
                <div class="gtco-icon">
                    <img src="{{ asset('assets/images/logo_sindicato.png') }}" alt="Demo LAF">
                </div>
            </div><!-- /.login-logo -->

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Ooops!</strong> han ocurrido algunos problemas<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="login-box-body">
                <p class="login-box-msg">Iniciar Sesión</p>

                <login-form name="{{ config('auth.providers.users.field','email') }}"
                domain="{{ config('auth.defaults.domain','') }}"></login-form>

                <a href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a><br>
                <!-- <a href="{{ url('/register') }}" class="text-center">Registrarme</a> -->

            </div>

        </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
</body>

@endsection
