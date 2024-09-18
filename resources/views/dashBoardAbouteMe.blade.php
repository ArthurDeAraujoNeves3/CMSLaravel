<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Sobre Mim</title>

    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap/css/bootstrap.min.css') }}"> <!--Bootstrap-->
    <link rel="stylesheet" href="{{ URL::asset('src/index.css') }}"> <!--Index-->
    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap.css') }}"> <!--Bootstrap customizável-->
    <link rel="stylesheet" href="{{ URL::asset('src/styles/Pages/Dashboard/index.css') }}"> <!--Index da dashboard-->
</head>

<body>

    @component('Components.layout.Header')
    @endcomponent

    <main>

        @component('Components.layout.Aside')
        @endcomponent

        <section class="Hero">

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif {{-- Mensagem de sucesso --}}

            <form action="{{ route('aboutMe.update', $Hero['id']) }}" method="post" class="Form"
                enctype="multipart/form-data">
                @method('put')
                @csrf

                <section class="d-flex align-items-end">

                    <button type="submit" class="btn btn-primary">Salvar alterações</button>

                </section> {{-- Botão --}}

                <section class="d-flex flex-column gap-3">

                    <div class="d-flex flex-column">

                        <label for="location" class="form-label">Localização</label>
                        <input type="text" name="location" class="form-control" id="location"
                            value="{{ $Hero['location'] }}" />
                        @error('location')
                            <p class="textError">{{ $message }}</p>
                        @enderror

                    </div> {{-- Mensagem de boas-vindas --}}

                    <div>

                        <label for="description" class="form-label">Descrição</label>
                        <input type="text" name="description" class="form-control" id="expertise"
                            value="{{ $Hero['description'] }}" />
                        @error('description')
                            <p class="textError">{{ $message }}</p>
                        @enderror

                    </div> {{-- Especialidade --}}

                    <div>

                        <label for="pdf" class="form-label">Currículo</label>
                        <input type="file" name="pdf" class="" id="pdf" />
                        @error('pdf')
                            <p class="textError">{{ $message }}</p>
                        @enderror

                    </div> {{-- Currículo --}}

                </section> {{-- Inputs --}}

            </form>

            <form action="{{ route('aboutMe.store', $Hero['pdf']) }}" method="post">
                @csrf

                <button name="download" class="btn btn-primary" {{ $Hero['pdf'] == '' ? 'disabled' : '' }}>Baixar currículo</button>

            </form>

        </section> {{-- Conteúdo principal --}}

    </main>

</body>

</html>
