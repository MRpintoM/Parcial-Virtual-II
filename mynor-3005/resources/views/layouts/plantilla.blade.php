
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>
    <body>
    <nav style="background:-webkit-linear-gradient(left top,#E430FD  ,#45B39D);" class="navbar navbar-expand-lg navbar-dark   shadow-sm p-2 rounded-bottom mb-5">
        <a class="navbar-brand" href="{{route('home')}}"  >  Multinegocio S.A."     </a>
        <button class="navbar-toggler" type="button" data-tog   gle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span  class="navbar-toggler-icon"></span>
        </button>

        <div  id="navbarSupportedContent">
            <a class="navbar-brand "  href="index.html" style=" color:black; "><i class="fas fa-home"></i></a>
        </div>

        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown  "  >
                    <a style="color:white" class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Formulario
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="menuc" style="background:-webkit-linear-gradient(left top,#45B39D  ,#FD3030);" >
                        <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('4')}}"   ><i class="fas fa-atlas"></i> Registrar Categoria </a>
                        <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route(8)}}"   ><i class="fas fa-atlas"></i> Registrar Genero </a>
                        <a class="dropdown-item btn btn-primary  " id="Rg_cat"  href="{{route(6)}}"   ><i class="fas fa-atlas"></i> Registrar Departamento </a>
                        <a class="dropdown-item btn btn-primary  " id="Rg_cat"  href="{{ route('2' ) }}"   ><i class="fas fa-atlas"></i> Registrar Cliente </a>




                    </div>
                </li>
                <li class="nav-item dropdown " >
                    <a style="color:white" class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mostrar Datos
                    </a >
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="menuc" style="background:-webkit-linear-gradient(left top,#E430FD  ,#30FD37 );">
                        <a class="dropdown-item btn btn-primary" href="{{route('mostrarcliente')}}" ><i class="fas fa-address-book"></i>Mostrar Datos </a>
                        <a class="dropdown-item btn btn-primary" href="{{route('mostrarcategoria')}}" ><i class="fas fa-address-book"></i>Mostrar Categoria </a>
                        <a class="dropdown-item btn btn-primary" href="{{route('mostrardepar')}}" ><i class="fas fa-address-book"></i>Mostrar Departamento </a>
                        <a class="dropdown-item btn btn-primary" href="{{route('mostrargenero')}}" ><i class="fas fa-address-book"></i>Mostrar Genero </a>


                    </div>
                </li>


            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

        <div class="container">
            @yield('content')
    </div>
    </body>
</html>
