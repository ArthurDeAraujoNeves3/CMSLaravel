<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $name }} - Ano atual</title>

    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap/css/bootstrap.min.css') }}"> <!--Bootstrap-->
    <link rel="stylesheet" href="{{ URL::asset('src/styles/indexPort.css') }}"> <!--Index-->
    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap.css') }}"> <!--Bootstrap customizável-->
    
</head>
<body>

    <nav class="navbar navbar-expand-lg">

        <div class="Header container d-flex align-items-center justify-content-between">

            <p class="title textHightlight m-0">{{ $name }}</p>
          
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

            </button>

            <div id="navbarNav">

                <ul class="navbar-nav d-flex align-ites-center gap-3">

                    @foreach($sections as $section) 

                        <li>
                            <a href="#{{ $section["name"] }}" class="text-decoration-none">{{ $section["name"] }}</a>
                        </li>

                    @endforeach
                
                </ul>

            </div>

        </div>

    </nav>

    <main>



    </main>

    <footer>



    </footer>
    
</body>
</html>
