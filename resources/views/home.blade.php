<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel primi passi</title>

       
    </head>
    <body >
        <header>
            
            <div>
                <a href="/">Home page</a>
                <a href="/about">About us</a>
            </div>

        </header>
        <div>
            <h1>{{$hello}}</h1>
        </div>
    </body>
</html>
