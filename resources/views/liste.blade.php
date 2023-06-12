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
                    <a href="{{url('/liste')}}" class="selected">
                        <span class="m_co material-symbols-outlined">
                            list
                            </span>
                        Liste
                     </a>
                </li>
                <li><a href="{{url('/profil')}}" ><img src="{{Auth::user()->url_photo}}" alt="profilepic"></a></li>
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
            <h2 class="underlined">
                Liste des collaborateurs
            </h2>
            <form action="liste" method="POST" >
                @csrf
                <fieldset class="search-options">
                        <input type="text" id="search" name="search" placeholder="Recherche..." class="search-bar form-control">
                        <div>
                            <label for="search">Rechercher par :</label>
                            <select id="attribute" name="attribute">
                                @php
                                    $opt_attribute_search=["nom","prenom","ville","pays"];
                                @endphp 
                                @foreach ($opt_attribute_search as $attribute_search)
                                    <option  value={{$attribute_search}}>{{$attribute_search}}</option>;
                                
                                @endforeach
                            </select>
                        </div>                     
                       <div>
                            <label for="catégorie">Catégorie :</label>
                            <select id="categorie" name="categorie">
                                @php
                                    $opt_categorie_search=["Aucun","Technique","Marketing","Client","Administratif"];
                                @endphp 
                                @foreach ($opt_categorie_search as $categorie_search)
                                    <option value={{$categorie_search}}>{{$categorie_search}}</option>;
                                @endforeach   
                            </select>
                        </div>
                </fieldset>
            </form>
            <section>     
                <ul class="liste-collab">
                    @foreach ($Users as $user)
                    <figure class="card">
                        <img src={{$user->url_photo}} alt="profilpic">
                        <figcaption>
                            <ul>
                                <li>
                                    <ul>
                                        <li class="nom">{{$user->nom}} {{$user->prenom}}</li>
                                        <li class="age">({{$user->age}})</li>
                                    </ul> 
                                </li>
                                <li>
                                    <ul>
                                        <li class="ville">{{$user->ville}},</li>
                                        <li class="pays">{{$user->pays}}</li>
                                    </ul> 
                                </li>
                                <li class="contacts"><span class="material-symbols-outlined">
                                    mail
                                    </span>
                                    <a href="">{{$user->email}}</a> 
                                </li>
                                <li class="contacts"><span class="material-symbols-outlined">
                                        phone_enabled
                                        </span>
                                        <a href="">{{$user->telephone}}</a> 
                                    </li>
                                    <li class="anniv">
                                        <span class="material-symbols-outlined">
                                            cake
                                            </span>
                                            {{\Carbon\Carbon::parse($user->birth)->format('d - F')}}
                                    </li>
                                </li>
                            </ul>
                            <sup class="secteur {{$user->categorie}}">{{$user->categorie}}</sup>
                        </figcaption>
                    </figure>
                    @endforeach
                </ul>
            </section>
        </main>
    </body>
</html>
