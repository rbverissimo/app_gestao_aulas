<!DOCTYPE html>
<html>
    <head>
        <title>Painel de Alunos</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <x-header-global />
        <div class="side-painel">
        @foreach ($alunos as $aluno)
            <x-aluno-card :aluno="$aluno" /> 
        @endforeach
        </div>
        <script>
            var data = @json($aluno);
            console.warn(data);
        </script>
    </body>
</html>