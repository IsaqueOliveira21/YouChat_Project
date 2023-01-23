<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouChat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-warning">
<div class="container">
    <h1 class="mt-5 text-center">YouChat - {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
    <hr>
    <form action="{{ route('mensagem.store') }}" class="form-control" method="POST"
          enctype="application/x-www-form-urlencoded">
        @csrf
        <div class="row">
            <input type="hidden" name="destinatario_id" id="destinatario_id" value="{{ $destinatario->id }}">
            <h3 style="text-align: left">Chating with {{ $destinatario->name }}</h3>
            <hr>
            <div class="col-12">
                <div class="container">
                    @foreach($mensagens as $mensagem)
                        <p style="{{ $mensagem->destinatario_id == $remetente ? 'text-align: left;' : 'text-align: right;' }}">{{$mensagem->mensagem}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-11">
                <input type="text" class="form-control" name="mensagem" placeholder="Type here...">
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-success">Send</button>
            </div>
        </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
