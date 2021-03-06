<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel/Tailwind Movies App</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans bg-gray-900 text-white">
        <nav class="border-b border-gray-800">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
                <ul class="flex flex-col md:flex-row items-center">
                    <li>
                        <a href="{{ route('movies.index') }}">
                            LOGO
                        </a>
                    </li>
                    <li class="md:ml-16 mt-3 md:mt-0">
                        <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="#" class="hover:text-gray-300">Tv Shows</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="#" class="hover:text-gray-300">Actors</a>
                    </li>
                </ul>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="relative mt-3 md:mt-0">
                        <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                        <div class="absolute top-0">
                            <!--icons-->
                            <!--"fill-current w-4 text-gray-500 mt-1 ml-2"-->
                        </div>
                    </div>
                    <div class="md:ml-4 mt-3 md:mt-0">
                        <a href="#">
                            <!--icons-->
                            <!--"rounded-full w-8 h-8"-->
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </body>
</html>
