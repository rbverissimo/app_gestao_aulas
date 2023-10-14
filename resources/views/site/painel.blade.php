<!DOCTYPE html>
<html>
    <head>
        <title>Painel de Alunos</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <x-header-global />
        <div class="side-painel">
            <x-aluno-card :aluno="$mockAluno" /> 
        </div>
    </body>
</html>