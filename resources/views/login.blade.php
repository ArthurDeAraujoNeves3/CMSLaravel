<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ URL::asset('src/bootstrap/css/bootstrap.min.css') }}"> <!--Bootstrap-->
    <link rel="stylesheet" href="{{ URL::asset('src/index.css') }}"> <!--Index-->
    <link rel="stylesheet" href="{{ URL::asset('src/styles/Pages/Login/Loginstyle.css') }}"> <!--Login-->
    <link rel="stylesheet" href="{{ URL::asset('src/styles/Pages/Login/LoginHeaderstyles.css') }}">

</head>

<body>

    <main class="">

        <form class="Form" method="post">

            @csrf
            
            @component("Components.layout.LoginHeader")
            @endcomponent

            @if ( session("error") )
                <div class="alert alert-danger" role="alert">

                    {{session("error")}}

                </div>
            @endif {{--Caixa de erro--}}
            
            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div> {{--Email--}}

            <div class="mb-3">

                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">

            </div> {{--Senha--}}

            <button type="submit" class="btn btn-primary">Login</button>

        </form>

    </main>

</body>

</html>
