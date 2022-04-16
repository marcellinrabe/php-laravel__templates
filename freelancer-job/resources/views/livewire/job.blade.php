<div>
    <div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md rounded border-2 border-gray-300">
        <h2 class="text-xl font-bold text-green-800">{{ $job->title }}</h2>
        <p class="text-md text-gray-800">{{ $job->description }}</p>
            
        <div class="flex items-center">
            <span class="h-2 w-2 bg-green-300 rounded-full mr-1"></span>{{-- un petit cercle --}}
            <a href="#">Consulter la mission</a>
        </div>

        <span class="text-sm text-gray-600">
            {{-- number_format retourne une chaine de caractère suivant la format personnalisé 
            à definir par la fonction
            1er parametre le nombre à editer
            2eme parametre le nombre de décimal
            3eme parametre le signe separateur de virgule
            4eme parametre le signe separateur de milliers
            --}}
            {{ number_format($job->price, 2, ',', ' ')}} $
        </span>
    </div>
</div>

