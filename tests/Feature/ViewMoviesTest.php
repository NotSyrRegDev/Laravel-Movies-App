<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    
    public function the_main_page_shows_correct_info()
    {
       Http:fake([
        'https://api.themoviedb.org/movie/popular' => $this->fakePopularMovies(),
        'https://api.themoviedb.org/movie/now_playing' => $this->fakeNowPlayingMovies(),
        'https://api.themoviedb.org/movie/list' => $this->fakeGenres(),
       ]);

        $response = $this->get( route('movies.index') );

        $response->assertSuccessful();

        $response->assertSee('Popular Movies');


    }

    public function fakePopularMovies(  ) {
        
    }
}
