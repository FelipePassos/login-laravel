<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login com Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    
    <body>
            <h1>Insira dados</h1>
            <form action="dados" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome Completo</label>
                    <input class="form-control" name="nome" placeholder="nome" type="text">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" placeholder="email" type="email">  
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input class="form-control" name="senha" placeholder="senha" type="password">
                </div>

                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>

    </body>
</html>
