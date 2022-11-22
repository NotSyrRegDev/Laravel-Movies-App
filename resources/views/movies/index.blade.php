@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">

        <div class="popular-movies border-b border-gray-800 py-16">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                POPULAR MOVIES
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

                @foreach ($popularMovies as $movie)

                <x-movie-card :movie="$movie" :genres="$genres"  />

                @endforeach



          

            </div>
        </div>

        <div class="now-playing-movies mt-14">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                NOW PLAYING
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">


                
                @foreach ($nowPlayingMovies as $movie)

                <x-movie-card :movie="$movie"   />

                @endforeach


            </div>
            
        </div>

    </div>

@endsection