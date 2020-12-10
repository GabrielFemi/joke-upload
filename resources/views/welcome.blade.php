<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Joke upload center</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Nanum+Pen+Script&display=swap" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link href="{{ asset('css/app.css')  }}" rel="stylesheet">
        <style>
            body {
                font-family: 'DM Serif Display', serif;
            }
            .joke-text {
                font-family: 'Nanum Pen Script', cursive;
            }
        </style>
    </head>
    <body class="antialiased bg-white">
        <div class="container">
            <h1 class="text-danger text-center pt-3">Joke upload😄😄</h1>

            <div class="align-items-center">
                <textarea class="pb-5 joke-text form-control" placeholder="Crack a funny joke"></textarea>
                <input type="submit" class="form-control btn btn-success mt-2">
            </div>

            <hr class="bg-dark">

            <div>
                <h1 class="text-center">Jokes from other people</h1>
                <div class="card">
                    <div class="card-body">
                        <p>The funnies joke of my life</p>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body">
                        <p>I love laughing and smiling.</p>
                    </div>
                    <div class="card-footer joke-text font-weight-bold">by Gabriel Akinyosoye</div>
                </div>
            </div>
            <div class="text-center mt-1">
                <nav class="" aria-label="...">
                    <ul class="pagination pagination-lg">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </body>
</html>
