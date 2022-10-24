<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagina 2</title>

    </head>
    <body>
        <form method="POST" action="{!! route('post_book') !!}">
            {{csrf_field()}}
        <label for="nume">Nume:</label>
        <input type="text" name="nume"><br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor"><br>
        <label for="editura">Editura:</label>
        <input type="text" name="editura"><br>
        <label for="numar_pagini">Numar Pagini:</label>
        <input type="text" name="numar_pagini"><br>
        <input type="submit" value="Submit">
        </form>
    </body>
</html>