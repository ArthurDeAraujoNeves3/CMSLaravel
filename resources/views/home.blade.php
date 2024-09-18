<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $name }} - {{ date("Y") }}</title>

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

                <section class="d-flex flex-column">
                
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

        <section id="{{ $sections[2]["name"] }}" class="py-3">

            <article class="container d-flex flex-column align-items-start">

                <section class="d-flex flex-column">
                
                    <p class="title textHightlight fs-4 m-0">{{ $sections[2]["name"] }}</p>
                    
                </section> {{--Título--}}

                <div class="row w-100">

                    <div class="col-4">

                      <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">

                        <nav class="nav nav-pills flex-column">

                            @foreach($Experiences as $Experience)

                                <a class="nav-link" href="#{{ $Experience["title"] }}">{{ $Experience["title"] }}</a>

                            @endforeach

                        </nav>

                      </nav>

                    </div> {{--Navbar--}}
                  
                    <div class="col-8">

                      <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">

                        @foreach($Experiences as $Experience)

                            <div id="{{ $Experience["title"] }}">
                                
                                <section class="d-flex align-items-center justify-content-between">

                                    <h4>{{ $Experience["title"] }}</h4>
                                    <p class="m-0">{{ $Experience["date"] }}</p>

                                </section>

                                <p class="textHightlight m-0 mt-2">{{ $Experience["enterpriseName"] }}</p>

                                <p class="m-0 mt-2">{{ $Experience["description"] }}</p>

                            </div>

                        @endforeach

                      </div>

                    </div> {{--Conteúdo--}}

                </div> {{--Experiências--}}
                
            </article>

        </section> {{--Experiências--}}

        <section id="{{ $sections[3]["name"] }}" class="Secao">

            <article class="container d-flex flex-column align-items-start">

                <section class="d-flex flex-column">
                
                    <p class="title textHightlight fs-4 m-0">{{ $sections[3]["name"] }}</p>
                    
                </section> {{--Título--}}

                <section>
                
                    @foreach ($Projects as $Project)

                        @component("Components.commons.Project")
                        
                            @slot("image")

                                {{ $Project["imageUrl"] }}

                            @endslot

                            @slot("name")

                                {{ $Project["name"] }}

                            @endslot

                            @slot("description")

                                {{ $Project["description"] }}

                            @endslot

                            @slot("github")

                                {{ $Project["github"] }}

                            @endslot

                            @slot("website")

                                {{ $Project["webSite"] }}

                            @endslot

                        @endcomponent

                    @endforeach
                    
                </section> {{--Projetos--}}
                
            </article>

        </section> {{--Projetos--}}

    </main>

    <footer class="d-flex align-items-center justify-content-center">

        <p class="m-0 py-3">@ {{ date("Y") }} - {{ $name }}</p>

    </footer>
    
</body>
</html>
