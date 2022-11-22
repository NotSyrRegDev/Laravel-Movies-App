@extends('layouts.main')

@section('content')

    <div class="tvShow-info border-b border-gray-800 ">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">

            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $tvShow['poster_path'] }}"  alt="parasite" class="md:w-96 w-64"   >

            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold"> {{ $tvShow['name'] }}  </h2>

                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
                    <span>✨</span>
                    <span class="ml-1" > {{ $tvShow['vote_average']  }} </span>
                    <span class="mx-2" >|</span>
                  

                    <span class="mx-2" >|</span>
                    <span> 
                        {{-- @foreach ($tvShow['genres'] as $genre)
                        {{ $genre['name'] }}
                        <!--adding extra , -->
                        @if (!$loop->last),
                            
                        @endif
                    @endforeach     --}}

                    {{ $tvShow['genres'] }}
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $tvShow['overview'] }} 
                </p>

                <div class="mt-12">
                    <h3 class="text-white font-semibold">Featured Cast</h3>

                    <div class="flex mt-4"> 

                        @foreach ($tvShow['crew'] as $crew)

                       
                        <div class="mr-8" >
                            <div> {{ $crew['name'] }} </div>
                            <div class="text-sm text-gray-400"> {{ $crew['job'] }} </div>
                    </div>

 
                        @endforeach


                       

                    </div>

                    <div x-data="{ isOpen: false }" > 
                        
                    @if (count($tvShow['videos']['results']) > 0)
                    <div class="mt-12">
                        <button
                        @click="isOpen = true"
                         
                    class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            Play Trailer
                        </button>
                    </div>

                    @endif

                    

                    <div x-show.transition.opacity="isOpen" style="background-color: rgba(0 , 0 , 0 , .5);" class="fixed top-0 left-0 w-full h-full flex-items-center shadow-lg overflow-y-auto">
                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                <div class="bg-gray-900 rounded">
                <div class="flex justify-end pr-4 pt-2">
                <button @click="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times;</button>
                </div>
                <div class="modal-body px-8 py-8">

                <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%;" >
                    @if (!empty($tvShow['videos']['results'][0]['key']))
                        
                    <iframe src="https://www.youtube.com/embed/{{ $tvShow['videos']['results'][0]['key'] }}" style="border: 0;" frameborder="0" class="responsive-iframe absolute top-0 left-0 w-full h-full" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
                    @endif
                </div>
                </div>
                </div>
                </div>
                
                    </div>

                    </div>
                  
                </div>


            </div>
        </div>


    </div>


  
    <div class="tvShow-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold" >Cast</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">


                @foreach ($tvShow['cast'] as $cast)

               
                
                <div class="mt-8">
                    <a href="{{ route('actors.show' , $cast['id'] ) }}"> 
                    <img src="{{ 'https://image.tmdb.org/t/p/w300' . $cast['profile_path'] }}" alt="{{ $cast['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150" >    
                    </a>

                    <div class="mt-2">
                        <a href="{{ route('actors.show' , $cast['id'] ) }}" class="text-lg mt-2 hover:text-gray:300"> {{ $cast['name'] }} </a>
                       

                        <div class="text-gray-400 text-sm">
                            {{ $cast['character'] }}
                        </div>

                    </div>
                </div>

                

            


                @endforeach


               

               

        </div>
        
        </div>
        </div>    
  
    <div class="tvShow-images border-b border-gray-800" x-data="{isOpen: false , image: ''}" >
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold" >Images</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-8">


                @foreach ($tvShow['images'] as $image)
                    
               
                <div class="mt-8">
                    <a @click.prevent="isOpen = true
                    image='{{ 'https://image.tmdb.org/t/p/original/' . $image['file_path'] }}' " href="#"> 
                        <img src="{{ 'https://image.tmdb.org/t/p/w300/' . $image['file_path'] }}" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150" >     
                    </a>

                  
                </div> 

 
                @endforeach

        </div>
    
        <div x-show="isOpen" style="background-color: rgba(0 , 0 , 0 , .5);" class="fixed top-0 left-0 w-full h-full flex-items-center shadow-lg overflow-y-auto">
            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
            <div class="bg-gray-900 rounded">
            <div class="flex justify-end pr-4 pt-2">
            <button 
            @click="isOpen = false"
            @keydown.escape.window="isOpen = false"
             class="text-3xl leading-none hover:text-gray-300">&times;</button>
            </div>
            <div class="modal-body px-8 py-8">

            <img :src="image" alt="poster1">

            </div>
            </div>
            </div>
            
                </div>
        

        </div>
        </div>    

@endsection