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

        <h4>Meus Contatos</h4>
  
        <div class="col-sm-12">
            @foreach(range('A', 'Z') as $letra)
            <div class="btn-group">
                <a href="{{ url('lista/' . $letra) }}" class="btn btn-primary {{ $letra === $filtro ? 'disabled' : ''}}">{{ $letra }}</a>
            </div>    
            @endforeach
        </div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach($contatos as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->nome }}</td>
                    <td>{{ $row->telefone }}</td>
                    <td>{{ $row->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
