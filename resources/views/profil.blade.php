<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
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
            <ul>
                <li>
                    <a href="{{url('/liste')}}">
                        <span class="m_co material-symbols-outlined">
                            list
                            </span>
                        Liste
                     </a>
                </li>
                <li><a href="{{url('/liste')}}" class="selected" ><img src="https://placehold.jp/40/0056d6/ffffff/50x50.png?text=A" alt="profilepic"></a></li>
                <li>
                    <a href="{{url('/')}}">
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
            <form >
                <fieldset class="infos-profil">

                            <label for="civilite">Civilité :</label>
                            <select id="civ" name="civ">
                                <option value="monsieur">Monsieur</option>
                                <option value="madame">Madame</option>
                                <option value="autre">Autre</option>
                            </select>   

                            <label for="catégorie">Catégorie :</label>
                            <select id="categ" name="categ">
                                <option value="technique">Technique</option>
                                <option value="marketing">Marketing</option>
                                <option value="administratif">Aministratif</option>
                                <option value="client">Client</option>
                            </select>

                            <label for="nom">Nom :</label>
                            <input type="text">

                            <label for="prenom">Prenom :</label>
                            <input type="text">

                            <label for="email">Email :</label>
                            <input type="email">

                            <label for="password">Mot de passe :</label>
                            <input type="text">

                            <label for="confirmation">Confirmation :</label>
                            <input type="text">

                            <label for="telephone">Téléphone :</label>
                            <input type="text">

                            <label for="anniv">Date de naissance :</label>
                            <input type="date" value="">

                            <label for="ville">Ville :</label>
                            <input type="text">

                            <label for="pays">Pays :</label>
                            <input type="text">

                            <label for="url">Url de la photo :</label>
                            <input type="url">
                </fieldset>
                <input type="submit" value="Modifier" method="post">
            </form>
            
        </main>
    </body>
</html>
