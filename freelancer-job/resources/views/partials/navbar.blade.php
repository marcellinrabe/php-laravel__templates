<header class="flex justify-between items-center py-5">
    <div>Logo</div>


    <nav>

        <livewire:search/>

        <a href="{{ route('jobs.index') }}" class="mr-5 hover:text-green-500">Nos missions</a>

        @guest
        {{--Si l'utlisateur n'est pas connect --}}
            <a href="{{ route('login') }}" class="mr-5 hover:text-green-500">Se connecter</a>
            <a href="{{ route('register') }}" class="mr-5 hover:text-green-500">S'enregistrer</a>
        @else
        {{--Sinon quand l'utilisateur est connecté, plus précisement quand l'authentification
        est réussi --}}
            <a href="{{ route('home') }}"class="mr-5 hover:text-green-500">Dashboard</a>
            <a href="{{ route('logout') }}" class="hover:text-green-500"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
            >Se déconnecter</a>

            {{--Par ce que route('logout') marche sur une requete de type post seulement
            alors le lien de navigation en haut, seule va lever une exception 
            ce qu'il faut faire c'est de fournir une formulaire ayant comme action la 
            route nommé logout, comme ça le lien en dessous peut servir comme une sorte 
            de bouton submit --}}
            <form id="logout-form" action="{{ route('logout') }}" method="post" class="hidden">
                @csrf
            </form>
        @endguest
    </nav>
</header>