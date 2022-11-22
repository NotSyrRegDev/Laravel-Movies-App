
    <div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false"  >
    <input 
    x-ref="search"
    @keydown.window="
        if (event.keyCode == 191) {
            event.preventDefault();
            $refs.search.focus();
        }
    "
    wire:model.debounce.500ms="search" type="text" class="text-sm bg-gray-800 rounded-full pl-8 w-64 px-4 py-1 focus:outline-none focus:shadow-outline" placeholder="Search..." 
    @focus="isOpen = true"
    @keydown="isOpen = true"
    @keydown.escape.window="isOpen = false"
    @keydown.shift.tab="isOpen = false"
    >

    <div class="absolute top-0">

        <p class="fill-current  bg-white-500 text-gray-500 mt-2 ml-1" >🔍 </p>
    </div>

    <div wire:loading class="spinner top-0 left-0 mr-4 mt-3" ></div>

    @if ( strlen($search) >= 2 ) {

        <div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4" x-show.transition.opacity="isOpen"
        
        
        >
    
            @if ( $searchResults->count() > 0 )
                
                @foreach ($searchResults as $result)
                    
                <li class="border-b border-gray-700">
                    <a 
                    href="{{ route('movies.show' , $result['id'] ) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                    @if ($loop->last)
                    @keydown.tap.exact="isOpen = false"  @endif                   
                    
                    > 
                        @if ( $result['poster_path'] )
                        <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" class="w-8" alt="poster">
                        
                        @else
                        <img src="https://via.placeholder.com/50×75 }}" class="w-8" alt="poster">
                        @endif
                       
                        <span class="ml-4">{{ $result['title'] }}</span>
                     </a>
                </li>
                @endforeach
    
            @else 
                <div class="px-3 py-3">No Result For  "{{ $search }}" </div>
            @endif
            <ul>
    
    
    
            </ul>
        </div>
    }
        
    @endif

</div>
