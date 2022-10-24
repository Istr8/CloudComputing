<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagina 1</title>

    </head>
    <body>
        @foreach($books as $book)
            <ul>
                <li>
                    {{ $book->nume}}
                </li>
                <li>
                    {{ $book->autor}}
                </li>
                <li>
                    {{ $book->editura }}
                </li>
                <li>
                    {{ $book->numar_pagini }}
                </li>
            </ul>
        @endforeach
    </body>
</html>
