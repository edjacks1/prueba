<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Especifico token para obtenerlo en la peticion ajax -->

    <title>Document</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="{{asset('Plugins/Bootstrap/styles.css')}}">
    <!-- Scripts -->
    <script src="{{asset('Plugins/Jquery/jquery.js')}}"></script>
    <script src="{{asset('Plugins/Bootstrap/bootstrap.js')}}"></script>
    @yield('css')
</head>
<body>

    

    <nav class="navbar navbar-dark bg-dark">
        @if( !Route::is('login.*'))
            <form class="form-inline nav navbar-nav ml-auto" action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-success" type="submit">Cerrar sesion</button>
            </form>
        @endif
        
    </nav>

    @if( $errors->any() )
        @foreach ($errors->all() as $tipo => $mensaje)
            <div class='alert alert-danger' role='alert'> {{$mensaje}} </div>
        @endforeach
    @endif

    <section>
        @yield('content')
    </section>
    
    @stack('scripts')
</body>
</html>