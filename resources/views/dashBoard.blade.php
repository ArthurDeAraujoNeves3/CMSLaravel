<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ URL::asset("src/bootstrap/css/bootstrap.min.css") }}"> <!--Bootstrap-->
    <link rel="stylesheet" href="{{ URL::asset("src/index.css") }}"> <!--Index-->
    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap.css') }}"> <!--Bootstrap customizável-->
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

        <section class="Hero">

            <form action="{{route("dashboard.update", $Hero["id"])}}" method="post">
                @method("put")
                @csrf
                
                <button type="submit" class="btn btn-primary">Salvar alterações</button>

                <section class="d-flex align-items-center gap-2">
                
                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Mensagem de boas vindas</label>
                        <input type="text" name="welcomeMessage" class="form-control" id="welcomeMessage" value="{{ $Hero["welcomeMessage"] }}" aria-describedby="emailHelp"/>
                        
                    </div> {{--Mensagem de boas vindas--}}

                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Especialidade</label>
                        <input type="text" name="expertise" class="form-control" id="expertise" value="{{ $Hero["expertise"] }}" aria-describedby="emailHelp"/>
                        
                    </div> {{--Mensagem de boas vindas--}}
                    
                </section> {{--Inputs--}}

                <section>

                    <div class="h6">Imagem</div>
                    <article>

                        <figure>

                            <img src="{{ $Hero['imageUrl'] }}" alt="Ilustração do Hero" draggable="false" loading="lazy" />

                        </figure>

                        <input type="file" />

                    </article>

                </section> {{--Imagem--}}

             </form>

        </section> {{--Conteúdo principal--}}

    </main>

</body>
</html>
