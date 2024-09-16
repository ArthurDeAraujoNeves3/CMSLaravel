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
    
    @component("Components.layout.Header")
    @endcomponent

    <main>

        @component("Components.layout.Aside")
        @endcomponent

        <section class="Hero gap-1">

            <form action="{{ route("experiences.update", $experience["id"]) }}" method="post">
                @csrf
                @method("put")
                
                <section class="d-flex flex-column gap-3">
        
                    <div class="d-flex flex-column">
                        <label for="modalTitle" class="form-label">Título</label>
                        <input type="text" name="title" class="form-control" id="modalTitle" value="{{ $experience["title"] }}" />
                        @error('title')
                            <p class="textError">{{ $message }}</p>
                        @enderror
                    </div> {{--Título--}}
        
                    <div>
                        <label for="modalInterprise" class="form-label">Empresa em que atuou</label>
                        <input type="text" name="interprise" class="form-control" id="modalInterprise" value="{{ $experience["enterpriseName"] }}" />
                        @error('interprise')
                            <p class="textError">{{ $message }}</p>
                        @enderror
                    </div> {{--Nome da empresa--}}
        
                    <div>
                        <label for="modalDescription" class="form-label">Descrição</label>
                        <input type="text" name="description" class="form-control" id="modalDescription" value="{{ $experience["description"] }}" />
                        @error('description')
                            <p class="textError">{{ $message }}</p>
                        @enderror
                    </div> {{--Descrição--}}
        
                    <div>
                        <label for="modalDate" class="form-label">Data de atuação</label>
                        <input type="text" name="date" class="form-control" id="modalDate" value="{{ $experience["date"] }}" />
                        @error('date')
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
