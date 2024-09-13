<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ URL::asset("src/bootstrap/css/bootstrap.min.css") }}"> <!--Bootstrap-->
    <link rel="stylesheet" href="{{ URL::asset("src/index.css") }}"> <!--Index-->
    <link rel="stylesheet" href="{{ URL::asset("src/styles/Pages/Dashboard/index.css") }}"> <!--Index da dashboard-->
</head>
<body>

    @component("Components.layout.Header")
    @endcomponent

    @if ( session("success") )

        <p>sucesso</p>

    @endif

    <main>

        <aside class="d-flex flex-column Aside">

            <div>Seções</div>

            @foreach ($sections as $section)

                @component("Components.layout.SectionBtn")

                    @slot("name")

                        {{$section["name"]}}

                    @endslot
                    
                @endcomponent

            @endforeach

        </aside> {{--NavBar--}}

        <section class="Hero" style="background-color: {{ $bgColor }};">

            <div class="Textos">

                <div class="d-flex flex-column">

                    <p class="TextPortfolio m-0">{{ $Hero["welcomeMessage"] }}</p>
                    <p class="Name m-0" style="color: {{ $colorTheme }};">{{ $name }}</p>
                    <p class="TextPortfolio m-0">{{ $Hero["expertise"] }}</p>

                </div>

                <a href="{{ $Hero['linkedinUrl'] }}" class="btn btn-primary" style="background-color: {{ $colorTheme }}; border-color: {{ $colorTheme }};">Linkedin</a>
                
            </div> {{--Textos--}}

            <figure>

                <img src="{{ $Hero['imageUrl'] }}" alt="Eu" draggable="false" loading="lazy" />

            </figure>

        </section> {{--Conteúdo principal--}}

    </main>

</body>
</html>
