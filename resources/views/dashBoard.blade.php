<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap/css/bootstrap.min.css') }}"> <!--Bootstrap-->
    <link rel="stylesheet" href="{{ URL::asset('src/index.css') }}"> <!--Index-->
    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap.css') }}"> <!--Bootstrap customizável-->
    <link rel="stylesheet" href="{{ URL::asset('src/styles/Pages/Dashboard/index.css') }}"> <!--Index da dashboard-->
</head>
<body>

    @component("Components.layout.Header")
    @endcomponent

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

            @if (session("success"))
                <div class="alert alert-success" role="alert">
                    {{ session("success") }}
                </div>
            @endif {{--Mensagem de sucesso--}}

            <form action="{{ route('dashboard.update', $Hero['id']) }}" method="post" class="Form">
                @method('put')
                @csrf

                <section class="d-flex align-items-end">

                    <button type="submit" class="btn btn-primary">Salvar alterações</button>

                </section> {{--Botão--}}

                <section class="d-flex flex-column gap-3">

                    <div class="d-flex flex-column">

                        <label for="welcomeMessage" class="form-label">Mensagem de boas-vindas</label>
                        <input type="text" name="welcomeMessage" class="form-control" id="welcomeMessage" value="{{ $Hero['welcomeMessage'] }}" />
                        @error('welcomeMessage')
                            <p class="textError">{{ $message }}</p>
                        @enderror

                    </div> {{--Mensagem de boas-vindas--}}

                    <div>
                        <label for="expertise" class="form-label">Especialidade</label>
                        <input type="text" name="expertise" class="form-control" id="expertise" value="{{ $Hero['expertise'] }}" />
                        @error('expertise')
                            <p class="textError">{{ $message }}</p>
                        @enderror
                    </div> {{--Especialidade--}}

                </section> {{--Inputs--}}

                <section>

                    <div class="h6">Imagem</div>
                    <article>

                        <figure>
                            <img src="{{ $Hero['imageUrl'] }}" alt="Ilustração do Hero" draggable="false" loading="lazy" />
                        </figure>

                    </article>

                </section> {{--Imagem--}}

            </form>

        </section> {{--Conteúdo principal--}}

    </main>

</body>
</html>
