<!DOCTYPE html>
<html>
<head>
    <title>Agenda</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h3>Agenda de Contatos</h3>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('lista/*') }}">Lista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('cadastro') }}">Cadastro</a>
                </li>
            </ul>
        </div>
    </nav>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(Session::has("cadastroSucesso"))
        <div class="alert alert-success">
            <strong>Sucesso!</strong>
            O contato {{ Session::get('cadastroSucesso') }} foi cadastrado!.
        </div>
    @endif
    @if(Session::has("cadastroErro"))
        <div class="alert alert-danger">
            <strong>Erro!</strong>
            Não foi possivel cadastrar o contato {{ Session::get('cadastroErro') }}.
        </div>
    @endif
    <div class="container">
        @yield('content')
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
