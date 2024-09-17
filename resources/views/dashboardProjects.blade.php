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

        <form action="{{ route("projects.store") }}" method="post">
            @csrf
            
            <section class="d-flex flex-column gap-3">
    
                <div class="d-flex flex-column">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" />
                    @error('name')
                        <p class="textError">{{ $message }}</p>
                    @enderror
                </div> {{--Título--}}
    
                <div>
                    <label for="description" class="form-label">Descrição</label>
                    <input type="text" name="description" class="form-control" id="description" />
                    @error('description')
                        <p class="textError">{{ $message }}</p>
                    @enderror
                </div> {{--Nome da empresa--}}
    
                <div>
                    <label for="github" class="form-label">Github</label>
                    <input type="text" name="github" class="form-control" id="github" />
                    @error('github')
                        <p class="textError">{{ $message }}</p>
                    @enderror
                </div> {{--Descrição--}}
    
                <div>
                    <label for="modalDate" class="form-label">Site</label>
                    <input type="text" name="website" class="form-control" id="modalDate" />
                    @error('website')
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

        <section class="Hero gap-1">

            @if (session("success"))
                <div class="alert alert-success" role="alert">
                    {{ session("success") }}
                </div>
            @endif

            <form action="{{ route("projects.create") }}" method="post" class="Form">
                @method('put')
                @csrf

                <section class="d-flex align-items-end">

                    <button onclick="showModal()" type="submit" class="btn btn-primary">Adicionar</button>

                </section>

            </form>

            <section class="d-flex flex-column gap-3">

                @for($i = 0; $i < count($Projects); $i++)
            
                    <div class="d-flex flex-column gap-1 experienceBox">

                        <figure>

                            <img src="{{ $Projects[$i]['imageUrl'] }}" />
                            
                        </figure>
                        
                        <div class="d-flex flex-column">
                            
                            <p class="m-0">{{ $Projects[$i]["name"] }}</p>
                            <p class="m-0">{{ $Projects[$i]["description"] }}</p>

                        </div> {{--Nome e descrição--}}

                        <div class="d-flex align-items-center gap-1">

                            <button class="btn btn-primary" {{ $Projects[$i]["github"] == "" ? "disabled" : "" }}>Github</button>
                            <button class="btn btn-primary" {{ $Projects[$i]["webSite"] == "" ? "disabled" : "" }}>Website</button>

                        </div> {{--Github e website--}}

                        <div class="d-flex align-items-center gap-2">

                            <!-- Formulário para editar -->
                            <form action="{{ route('projects.index', $Projects[$i]['id']) }}" method="get">

                                @csrf
                                <button type="submit" class="btn btn-primary">Editar</button>

                            </form>

                            <!-- Formulário para excluir -->
                            <form action="{{ route('projects.destroy', $Projects[$i]['id']) }}" method="post">

                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Excluir</button>

                            </form>
                            
                        </div>
            
                    </div>
            
                @endfor
            
            </section>

        </section> {{--Conteúdo principal--}}

    </main>

    <script src="{{ URL::asset("src/scripts/js/dashboard/modal.js") }}"></script>

</body>
</html>
