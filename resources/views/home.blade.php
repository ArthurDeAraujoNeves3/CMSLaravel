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

    <header>

        <section class="Header container d-flex align-items-center justify-content-between">

            <p class="title textHightlight m-0">{{ $name }}</p>

            <nav class="d-flex align-items-center gap-5">

                @foreach($sections as $section)

                    <a href="#{{ $section["name"] }}" class="text-decoration-none">{{ $section["name"] }}</a>

                @endforeach

            </nav> {{--Links para navegações--}}

        </section>

    </header>

    <main>



    </main>

    <footer>



    </footer>
    
</body>
</html>
