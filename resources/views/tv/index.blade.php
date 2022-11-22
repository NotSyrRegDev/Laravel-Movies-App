@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">

        <div class="popular-tv border-b border-gray-800 py-16">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                POPULAR TV SHOWS
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

                @foreach ($popularTv as $tvShow )

                <x-tv-card :tvShow="$tvShow" :genres="$genres"  />

                @endforeach



          

            </div>
        </div>

        <div class="now-playing-movies mt-14">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                TOP RATED TV SHOWS
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">


                
                @foreach ($topRatedTv as $tv)

                <x-tv-card :tvShow="$tv" :genres="$genres"  />

                @endforeach


            </div>
            
        </div>

    </div>

@endsection