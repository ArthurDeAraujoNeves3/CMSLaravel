<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Experiências</title>

    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap/css/bootstrap.min.css') }}"> <!--Bootstrap-->
    <link rel="stylesheet" href="{{ URL::asset('src/index.css') }}"> <!--Index-->
    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap.css') }}"> <!--Bootstrap customizável-->
    <link rel="stylesheet" href="{{ URL::asset('src/styles/Pages/Dashboard/index.css') }}"> <!--Index da dashboard-->
</head>
<body>

    <div id="modal" class="Modal d-none">

        <form action="{{ route("experiences.store") }}" method="post">
            @csrf
            
            <section class="d-flex flex-column gap-3">

                <div class="d-flex flex-column">

                    <label for="title" class="form-label">Título</label>
                    <input type="text" name="title" class="form-control" id="title" />
                    @error('title')
                        <p class="textError">{{ $message }}</p>
                    @enderror

                </div> {{--Título--}}

                <div>
                    <label for="interprise" class="form-label">Empresa em que atuou</label>
                    <input type="text" name="interprise" class="form-control" id="interprise" />
                    @error('interprise')
                        <p class="textError">{{ $message }}</p>
                    @enderror
                </div> {{--Nome da empresa--}}

                <div>
                    <label for="description" class="form-label">Descrição</label>
                    <input type="text" name="description" class="form-control" id="description" />
                    @error('description')
                        <p class="textError">{{ $message }}</p>
                    @enderror
                </div> {{--Descrição--}}

                <div>
                    <label for="date" class="form-label">Data de atuação</label>
                    <input type="text" name="date" class="form-control" id="date" />
                    @error('date')
                        <p class="textError">{{ $message }}</p>
                    @enderror
                </div> {{--Data de atuação--}}

                <section class="d-flex flex-column gap-1 align-items-end">

                    <button type="submit" class="btn btn-primary">Adicionar</button>
                    <section onclick="showModal()" class="BtnCancel">

                        <p class="m-0">Cancelar</p>
    
                    </section>

                </section> {{--Botão--}}
            
            </section> {{--Inputs--}}

        </form>

    </div>

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

            <form action="{{ route("experiences.create") }}" method="post" class="Form">
                @method('put')
                @csrf

                <section class="d-flex align-items-end">

                    <button onclick="showModal()" type="submit" class="btn btn-primary">Adicionar</button>

                </section> {{--Botão--}}

                <section class="d-flex flex-column gap-3">

                    @for( $i = 0; $i < count($Experiences); $i++)

                        <div class="d-flex flex-column experienceBox">
                            
                            <div class="d-flex justify-content-between">

                                <p class="m-0">{{ $Experiences[$i]["title"] }}</p>
                                <p class="m-0">{{ $Experiences[$i]["date"] }}</p>

                            </div>
                            <p class="m-0 Desc">{{ $Experiences[$i]["enterpriseName"] }}</p>
                            <p class="m-0 ">{{ $Experiences[$i]["description"] }}</p>

                        </div>

                    @endfor

                </section> {{--Inputs--}}

            </form>

        </section> {{--Conteúdo principal--}}

    </main>

    <script src="{{ URL::asset("src/scripts/js/dashboard/modal.js") }}"></script>

</body>
</html>
