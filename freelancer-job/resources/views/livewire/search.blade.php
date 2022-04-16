
<div class="inline-block relative mr-3" x-data="{ open: true }">
    <input 
    @click= "open = true"
    @click.away = "open = false; @this.resetIndex();"
    class="bg-gray-200 text-gray-700 border-2 focus:outline-none 
    placeholder-gray-500 px-2 py-1 pr-4 rounded-full w-56
    text-ellipsis overflow-hidden" 
    placeholder="Rechercher une mission ..." 
    wire:model="input"
    wire:keydown.arrow-down.prevent="incrementIndex"
    wire:keydown.arrow-up.prevent="decrementIndex"
    wire:keydown.backspace="resetIndex"
    wire:keydown.enter="show"

    />


    <svg class="w-5 h-5 text-gray-500 absolute top-0 right-0 
    mt-2 mr-1"
        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>

    
    @if(strlen($input) > 3)
        <div class="absolute border bg-gray-100 text-md w-56 mt-1" 
        x-show="open">
            @if(count($jobs) > 0)
                @foreach($jobs as $index => $job)
                    <p class="p-1 {{ $index === $currentIndex ? 'text-green-500' : '' }}">{{ $job->title }}</p>
                @endforeach
            @else
                <p class="p-1 text-orange-500">Mot clé non trouvé</p>
            @endif       
        </div>
    @endif
    

</div>
   