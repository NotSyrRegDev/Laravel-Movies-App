<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Movie App</title>

    @vite('resources/css/app.css')

    <livewire:styles />
    <script src="//unpkg.com/alpinejs" defer></script>


</head>

<body class="font-sans bg-gray-900 text-white" >


    <nav class="border-b border-gray-800" >
    
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                   
                    <a href="{{ route('movies.index') }}"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 172 172" style=" fill:#26e07f;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#1fb141"><path d="M21.5,21.5v129h64.5v-32.25v-64.5v-32.25zM86,53.75c0,17.7805 14.4695,32.25 32.25,32.25c17.7805,0 32.25,-14.4695 32.25,-32.25c0,-17.7805 -14.4695,-32.25 -32.25,-32.25c-17.7805,0 -32.25,14.4695 -32.25,32.25zM118.25,86c-17.7805,0 -32.25,14.4695 -32.25,32.25c0,17.7805 14.4695,32.25 32.25,32.25c17.7805,0 32.25,-14.4695 32.25,-32.25c0,-17.7805 -14.4695,-32.25 -32.25,-32.25z"></path></g></g></svg>  </a>
                </li>

                <li class="md:ml-16 mt-3 md:mt-0" >
                    <a href="" class="hover:text-gray-300" >Movies</a>
                </li>

                <li class="md:ml-16 mt-3 md:mt-0" >
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300" >Tv Shows</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0" >
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300" > Actors</a>
                </li>
            </ul>

            <div class="flex flex-col md:flex-row items-center">
               <livewire:search-drop-down>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}">
                        <img src="/images/avatar.jpg"  alt="avatar" class="rounded-full -8 h-8" >
                    </a>
                </div>
            </div>
        </div>

    </nav>

    @yield('content')

   <livewire:scripts />

   @yield('scripts')

    
</body>
</html>