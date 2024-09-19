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

        @component("Components.layout.Aside")
        @endcomponent

        <section class="Hero">

            @if (session("success"))
                <div class="alert alert-success" role="alert">
                    {{ session("success") }}
                </div>
            @endif {{--Mensagem de sucesso--}}

            <form action="{{ route('general.update', $General[0]['id']) }}" method="post" class="Form">
                @method('put')
                @csrf

                <section class="d-flex align-items-end">

                    <button type="submit" class="btn btn-primary">Salvar alterações</button>

                </section> {{--Botão--}}

                <section class="d-flex flex-column gap-3">

                    <div class="d-flex flex-column">

                        <label for="name" class="form-label">Seu nome</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $General[0]['name'] }}" />
                        @error('name')
                            <p class="textError">{{ $message }}</p>
                        @enderror

                    </div> {{--Mensagem de boas-vindas--}}

                </section> {{--Inputs--}}

            </form>

        </section> {{--Conteúdo principal--}}

    </main>

</body>
</html>
