<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
       <!---<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        ---><title>M2L</title>

    </head>
    <body>
        <header>
            <h1>
                <span class="material-symbols-outlined">
                    lan
                </span> 
                Intranet
            </h1>
            <ul>
                <li>
                    <a href="{{url('/liste')}}">
                        <span class="m_co material-symbols-outlined">
                            list
                            </span>
                        Liste
                     </a>
                </li>
                @auth
                    <li><a href="{{url('/profil')}}"><img src="{{Auth::user()->url_photo}}" alt="profilepic"></a></li>
                @endauth
                <li>
                    <a href="{{url('/logout')}}">
                        <span class="m_co material-symbols-outlined">
                            logout
                        </span>
                        Déconnexion
                    </a>
                </li>
            </ul>
            
        </header>

        <main>
            <h2>
                Bienvenue sur l'intranet
            </h2>
            <section>
                <h3>La plate-forme de l'entreprise qui vous permet de retrouver tous vos collaborateurs.</h3>       
                <h4>Avez vous dit bonjour à :</h4>
                 {{-- @php
                    getRandomUser();
                @endphp
                 --}}
                <figure class="card">
                    <img src={{$RandomUser->url_photo}} alt="profilpic">
                    <figcaption>
                        <ul>
                            <li>
                                <ul>
                                    <li class="nom">{{$RandomUser->nom}} {{$RandomUser->prenom}}</li>
                                    <li class="age">({{$RandomUser->age}})</li>
                                </ul> 
                            </li>
                            <li>
                                <ul>
                                    <li class="ville">{{$RandomUser->ville}},</li>
                                    <li class="pays">{{$RandomUser->pays}}</li>
                                </ul> 
                            </li>
                            <li class="contacts"><span class="material-symbols-outlined">
                                mail
                                </span>
                                <a href="">{{$RandomUser->email}}</a> 
                            </li>
                            <li class="contacts"><span class="material-symbols-outlined">
                                    phone_enabled
                                    </span>
                                    <a href="">{{$RandomUser->telephone}}</a> 
                                </li>
                                <li class="anniv">
                                    <span class="material-symbols-outlined">
                                        cake
                                        </span>
                                        {{\Carbon\Carbon::parse($RandomUser->birth)->format('d-F')}}
                                </li>
                            </li>
                        </ul>
                        <sup class="secteur" class="$user->categorie">{{$RandomUser->categorie}}</sup>
                    </figcaption>
                </figure>
                
                <form action="{{'/connexion'}}" method="post">
                    @csrf
                    <input type="submit" value="dire bonjour à quelqu'un d'autre">
                </form>
            </section>
        </main>

    </body>
</html>
