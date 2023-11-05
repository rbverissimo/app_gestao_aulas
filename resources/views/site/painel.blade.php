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
            var data = @json($alunos);
            var aulas = @json($aulas)
            console.warn(data);
            console.log(aulas);
        </script>
    </body>
</html>