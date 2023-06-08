
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
       <!---<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        ---><title>Laravel</title>

    </head>
    <body>
        <header>
            <h1>
                <span class="material-symbols-outlined">
                    lan
                </span> 
                Intranet
            </h1>
            <a href="{{url('/connexion')}}">
                <span class="m_co material-symbols-outlined">
                    login
                </span>
                Connexion
            </a>
        </header>

        <main>
            <h2 class="underlined">
                Connexion
            </h2>
            <section class="form-primary">
                <h3>Pour vous connectez à l'intranet, entrez votre identifiant et mot de passe.</h3>       
                <form action="{{url('/')}}" method="post">

                    @csrf

                    <fieldset class="input-area">
                        <div>
                            <label for="email">Email :</label>
                            <input type="email" placeholder="ex:owen.lopez@example.com" for="email" id="email" name="email" aria-required="true" autofocus>                     
                        </div> 
                        <div>
                            <label for="password">Mot de passe :</label>
                            <input type="password" placeholder="" for="password" id="password" name="password">
                        </div>
                    </fieldset>
                    <input type="submit" value="Connexion">
                    @if($errors-> any())
                    <div class="error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
    
                </form>
            </section>
        </main>

    </body>
</html>
