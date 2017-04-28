
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
<link href="{{asset('css/freelancer.min.css')}}" rel="stylesheet">
    <title></title>
</head>
<body>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><font color="#33ff33">D</font>Señas</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Inicio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Palabra</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Categoria</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Video</a>
                    </li>
                    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sesion <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#009999">
            <li style="background-color:#009999"><a href="#">Editar</a></li>
            <li style="background-color:#009999"><a href="#">Salir</a></li>
          </ul>
        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    @yield('formulario')
</body>
<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.2.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</html>
