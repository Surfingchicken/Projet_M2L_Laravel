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
                <li><a href="{{url('/profil')}}" class="selected" ><img src="{{Auth::user()->url_photo}}" alt="profilepic"></a></li>
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
                Modifier mon profil
            </h2>
            <form action="{{'/profil'}}" method="POST">
                @csrf
                @method('PUT')
                <fieldset class="infos-profil">
                            <label for="civilite">Civilité :</label>
                            <select id="civilite" name="civilite" for="civilite">
                                <option value="{{Auth::user()->civilite}}" >{{Auth::user()->civilite}}</option>
                                @php
                                    $opt_civ=["Homme","Femme","Autre"];
                                
                                    foreach ($opt_civ as $civ){
                                        if($civ != Auth::user()->civilite)
                                            echo  "<option value=".$civ.">".$civ."</option>";
                                             
                                    }    
                                @endphp
                            </select>   
                            <label for="categorie">Catégorie :</label>
                            <select id="categorie" name="categorie" for="categorie">
                                <option value="{{Auth::user()->categorie}}">{{Auth::user()->categorie}}</option>
                                @php
                                    $opt_cat=["Technique","Marketing","Adminstratif","Client"];
                                
                                    foreach ($opt_cat as $cat){
                                        if($cat != Auth::user()->categorie)
                                            echo  "<option value=".$cat.">".$cat."</option>";
                                             
                                    }    
                                @endphp
                            </select>

                            <label for="nom">Nom :</label>
                            <input type="text" value="{{Auth::user()->nom}}" id="nom" name="nom" >

                            <label for="prenom">Prenom :</label>
                            <input type="text" value="{{Auth::user()->prenom}}" id="prenom" name="prenom">

                            <label for="email">Email :</label>
                            <input type="email" value="{{Auth::user()->email}}" id="email" name="email">

                            <label for="password">Mot de passe :</label>
                            <input type="password" placeholder="(min 8 caractères)" value="" id="password" name="password">

                            <label for="confirmation">Confirmation :</label>
                            <input type="password" placeholder="(min 8 caractères)" value="" name="password_confirmation">

                            <label for="telephone">Téléphone :</label>
                            <input type="text" value="{{Auth::user()->telephone}}" id="telephone" name="telephone">

                            <label for="anniv">Date de naissance :</label>
                            <input type="date" value="{{Auth::user()->birth}}" id="birth" name="birth">

                            <label for="ville">Ville :</label>
                            <input type="text" value="{{Auth::user()->ville}}" id="ville" name="ville">

                            <label for="pays">Pays :</label>
                            <input type="text" value="{{Auth::user()->pays}}" id="pays" name="pays">

                            <label for="url">Url de la photo :</label>
                            <input type="url" value="{{Auth::user()->url_photo}}" id="url_photo" name="url_photo">
                </fieldset>
                @if($errors-> any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <input type="submit" value="Modifier">
            </form>
            
        </main>
    </body>
</html>
