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

        <section id="{{ $sections[0]["name"] }}" class="container d-flex align-items-center justify-content-between">

            <article class="d-flex flex-column gap-4">

                <section>

                    <p class=" m-0">{{ $Hero[0]["welcomeMessage"] }}</p>
                    <p class="fs-4 title textHightlight m-0">{{ $name }}</p>
                    <p class=" m-0">{{ $Hero[0]["expertise"] }}</p>

                </section>

                <a href="#" class="btn btn-primary">Linkedin</a>

            </article> {{--Textos / btn--}}

            <figure>

                <img src={{ $Hero[0]["imageUrl"] }} alt="Ilustração" draggable="false" loading="eager" />

            </figure> {{--Ilustração--}}

        </section> {{--Hero--}}

        <section id="{{ $sections[1]["name"] }}" class="Secao">

            <article class="container d-flex flex-column align-items-start">

                <section class="d-flex flex-column align-items-center">
                
                    <p class="title textHightlight fs-4 m-0">{{ $sections[1]["name"] }}</p>
                    <p class="m-0">{{$AbouteMe[0]["location"]}}</p>
                    
                </section> {{--Título--}}

                <p class="mt-2 m-0">{{ $AbouteMe[0]["description"] }}</p>

                <section></section> {{--Redes sociais--}}

                <form action="" method="post" class="mt-2">

                    <button name="" class="btn btn-primary" >Baixar currículo</button>

                </form> {{--Botão para baixar PDF--}}

            </article>

        </section> {{--Sobre mim--}}

        <section id="{{ $sections[2]["name"] }}" class="Secao">

            <article class="container d-flex flex-column align-items-start">

                <section class="d-flex flex-column align-items-center">
                
                    <p class="title textHightlight fs-4 m-0">{{ $sections[1]["name"] }}</p>
                    <p class="m-0">{{$AbouteMe[0]["location"]}}</p>
                    
                </section> {{--Título--}}

                <p class="mt-2 m-0">{{ $AbouteMe[0]["description"] }}</p>

                <section></section> {{--Redes sociais--}}

                <form action="" method="post" class="mt-2">

                    <button name="" class="btn btn-primary" >Baixar currículo</button>

                </form> {{--Botão para baixar PDF--}}

            </article>

        </section> {{--Experiências--}}

    </main>

    <footer>



    </footer>
    
</body>
</html>
