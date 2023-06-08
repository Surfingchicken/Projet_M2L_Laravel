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
                    <a href="{{url('/liste')}}" class="selected">
                        <span class="m_co material-symbols-outlined">
                            list
                            </span>
                        Liste
                     </a>
                </li>
                <li><a href="{{url('/profil')}}" ><img src="https://placehold.jp/40/0056d6/ffffff/50x50.png?text=A" alt="profilepic"></a></li>
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
                Liste des collaborateurs
            </h2>
            <form >
                <fieldset class="search-options">
                        <input type="search" placeholder="Recherche..." class="search-bar">
                        <div>
                            <label for="search">Rechercher par :</label>
                            <select id="infos" name="infos">
                                <option value="nom">Nom</option>
                                <option value="prenom">Prenom</option>
                                <option value="ville">Ville</option>
                                <option value="pays">Pays</option>
                            </select>
                        </div>                     
                       <div>
                            <label for="catégorie">Catégorie :</label>
                            <select id="categ" name="categ">
                                <option value="null">- Aucun -</option>
                                <option value="technique">Technique</option>
                                <option value="marketing">Marketing</option>
                                <option value="administratif">Administratif</option>
                                <option value="client">Client</option>
                            </select>
                        </div>
                </fieldset>
            </form>
            <section>     
                <ul class="liste-collab">
                    <li>
                        <figure class="card">
                            <img src="https://placehold.jp/40/f5ec00/ffffff/200x200.png?text=B" alt="profilpic">
                            <figcaption>
                                <ul>
                                    <li>
                                        <ul>
                                            <li class="nom">Baranabus Barnabus</li>
                                            <li class="age">(25 ans)</li>
                                        </ul> 
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="ville">Paris,</li>
                                            <li class="pays">France</li>
                                        </ul> 
                                    </li>
                                    <li class="contacts"><span class="material-symbols-outlined">
                                        mail
                                        </span>
                                        <a href="">laalala@la.la</a> 
                                    </li>
                                    <li class="contacts"><span class="material-symbols-outlined">
                                            phone_enabled
                                            </span>
                                            <a href="">06-09-07-21-22</a> 
                                        </li>
                                        <li class="anniv">
                                            <span class="material-symbols-outlined">
                                                cake
                                                </span>
                                            Anniversaire : 18 Août
                                        </li>
                                </ul>
                                <sup class="secteur">Technique</sup>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="card">
                            <img src="https://placehold.jp/40/f5ec00/ffffff/200x200.png?text=B" alt="profilpic">
                            <figcaption>
                                <ul>
                                    <li>
                                        <ul>
                                            <li class="nom">Baranabus Barnabus</li>
                                            <li class="age">(25 ans)</li>
                                        </ul> 
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="ville">Paris,</li>
                                            <li class="pays">France</li>
                                        </ul> 
                                    </li>
                                    <li class="contacts"><span class="material-symbols-outlined">
                                        mail
                                        </span>
                                        <a href="">laalala@la.la</a> 
                                    </li>
                                    <li class="contacts"><span class="material-symbols-outlined">
                                            phone_enabled
                                            </span>
                                            <a href="">06-09-07-21-22</a> 
                                        </li>
                                        <li class="anniv">
                                            <span class="material-symbols-outlined">
                                                cake
                                                </span>
                                            Anniversaire : 18 Août
                                        </li>
                                </ul>
                                <sup class="secteur">Technique</sup>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="card">
                            <img src="https://placehold.jp/40/f5ec00/ffffff/200x200.png?text=B" alt="profilpic">
                            <figcaption>
                                <ul>
                                    <li>
                                        <ul>
                                            <li class="nom">Baranabus Barnabus</li>
                                            <li class="age">(25 ans)</li>
                                        </ul> 
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="ville">Paris,</li>
                                            <li class="pays">France</li>
                                        </ul> 
                                    </li>
                                    <li class="contacts"><span class="material-symbols-outlined">
                                        mail
                                        </span>
                                        <a href="">laalala@la.la</a> 
                                    </li>
                                    <li class="contacts"><span class="material-symbols-outlined">
                                            phone_enabled
                                            </span>
                                            <a href="">06-09-07-21-22</a> 
                                        </li>
                                        <li class="anniv">
                                            <span class="material-symbols-outlined">
                                                cake
                                                </span>
                                            Anniversaire : 18 Août
                                        </li>
                                </ul>
                                <sup class="secteur">Technique</sup>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="card">
                            <img src="https://placehold.jp/40/f5ec00/ffffff/200x200.png?text=B" alt="profilpic">
                            <figcaption>
                                <ul>
                                    <li>
                                        <ul>
                                            <li class="nom">Baranabus Barnabus</li>
                                            <li class="age">(25 ans)</li>
                                        </ul> 
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="ville">Paris,</li>
                                            <li class="pays">France</li>
                                        </ul> 
                                    </li>
                                    <li class="contacts"><span class="material-symbols-outlined">
                                        mail
                                        </span>
                                        <a href="">laalala@la.la</a> 
                                    </li>
                                    <li class="contacts"><span class="material-symbols-outlined">
                                            phone_enabled
                                            </span>
                                            <a href="">06-09-07-21-22</a> 
                                        </li>
                                        <li class="anniv">
                                            <span class="material-symbols-outlined">
                                                cake
                                                </span>
                                            Anniversaire : 18 Août
                                        </li>
                                </ul>
                                <sup class="secteur">Technique</sup>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </section>
        </main>
    </body>
</html>
