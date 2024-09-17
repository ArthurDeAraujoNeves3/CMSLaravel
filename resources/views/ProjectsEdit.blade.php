<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Projetos</title>

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

        <section class="Hero gap-1">

            <form action="{{ route("projects.update", $Projects["id"]) }}" method="post">
                @csrf
                @method("put")
                
                <section class="d-flex flex-column gap-3">
        
                    <div class="d-flex flex-column">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $Projects["name"] }}" />
                        @error('name')
                            <p class="textError">{{ $message }}</p>
                        @enderror
                    </div> {{--Título--}}
        
                    <div>
                        <label for="description" class="form-label">Descrição</label>
                        <input type="text" name="description" class="form-control" id="description" value="{{ $Projects["description"] }}" />
                        @error('description')
                            <p class="textError">{{ $message }}</p>
                        @enderror
                    </div> {{--Nome da empresa--}}
        
                    <div>
                        <label for="github" class="form-label">Github</label>
                        <input type="text" name="github" class="form-control" id="github" value="{{ $Projects["github"] }}" />
                        @error('github')
                            <p class="textError">{{ $message }}</p>
                        @enderror
                    </div> {{--Descrição--}}
        
                    <div>
                        <label for="modalDate" class="form-label">Site</label>
                        <input type="text" name="website" class="form-control" id="modalDate" value="{{ $Projects["webSite"] }}" />
                        @error('website')
                            <p class="textError">{{ $message }}</p>
                        @enderror
                    </div> {{--Data de atuação--}}
        
                    <section class="d-flex flex-column gap-1 align-items-end">

                        <button type="submit" class="btn btn-primary">Salvar</button>
                        
                    </section> {{--Botão--}}
                
                </section> {{--Inputs--}}
        
            </form>

        </section>

    </main>

</body>
</html>
