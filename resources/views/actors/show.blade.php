@extends('layouts.main')

@section('content')

    <div class="movie-info border-b border-gray-800 ">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">

            <div class="flex-none">
                <img src="{{ $actor['profile_path'] }}"  alt="parasite" class="md:w-96 w-64"   >
                
                <ul class="flex items-center mt-4">

                    @if ($social['facebook'])
                    <li>
                        <a href="{{ $social['faceook'] }}" title="Facebook" >
                            FACEBOOK
                        </a>
                    </li>
                        
                    @endif
                    @if ($social['instagram'])
                        
                    <li class="ml-6" >
                        <a href="{{ $social['instagram'] }}" title="Instagram" >
                            INSTAGRAM
                        </a>
                    </li>
                    @endif
                    @if ($social['twitter'])
                    <li class="ml-6" >
                        <a href="{{ $social['twitter'] }}" title="Twitter" >
                            TWITTER
                        </a>
                    </li>
                        
                    @endif

                    {{-- @if ( $social['homepage'] ) 
                    <li class="ml-6" >
                        <a href="{{ $social['homepage'] }}" title="Website" >
                            WEBSITE
                        </a>
                    </li> 
                    @endif --}}

                </ul>
            </div>
            

            
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold"> {{ $actor['name'] }}  </h2>

                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
                    <span>📅</span>
                    <span class="ml-2" > {{ $actor['birthday'] }} ({{ $actor['age'] }} years old) In  {{ $actor['place_of_birth'] }} </span>
                    <span class="mx-2" >|</span>
                    <span> stuff </span>

                    <span class="mx-2" >|</span>
                    <span> 


                   stuff
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $actor['biography'] }}
                </p>

                <h4 class="font-semibold mt-12">Known For</h4>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">

                   
                    @foreach ($knownForMovies as $movie)
                        
                 
                    <div class="mt-4">
                        <a href="{{ $movie['linkToPage'] }}">
                            <img src="https://image.tmdb.org/t/p/w185/{{ $movie['poster_path'] }}" class="hover:opacity-75 transition ease-in-out duration-150"  alt="">
                            <a href=" {{ $movie['linkToPage'] }} " class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">  </a>
                        </a>
                    </div>
                    @endforeach

 
                </div>


            </div>
        </div>


    </div>


  
    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold" >Credits</h2>

            <div class="list-disc leading-loose pl-5 mt-8">

                @foreach ($credits_cast as $credit)
                    
                <li> {{ $credit['release_year'] }} &middot; <strong> {{ $credit['title'] }} </strong> as {{ $credit['character'] }}   </li>
                @endforeach

               
            </div>

         
        
        </div>
        </div>    
 

@endsection