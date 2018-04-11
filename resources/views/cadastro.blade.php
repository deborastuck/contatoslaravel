@extends('index')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Agenda</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
 
    <div class="container">
 
        <h4>Cadastrar novo contato</h4>
        <hr />
 
        <form action="enviar" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone">
            </div>
 
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="E-Mail">
            </div>
 
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
@endsection