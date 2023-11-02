<!DOCTYPE html>
<html>
    <head>
        <title>Painel de Alunos</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <x-header-global />
        <div class="side-painel">
        @foreach ($mocks as $mock)
            <x-aluno-card :aluno="$mock" /> 
        @endforeach
        </div>
        <script>
            var data = @json($mocks);
            console.warn(data);
        </script>
    </body>
</html>