<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToDoApp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        @livewireStyles
    </head>
    <body>
        <div id="navbar" class=" bg-gray-800 text-gray-200  mb-10 border-solid border-gray-150 border-b-1 shadow-md">
             <div class="m-auto container p-1 flex justify-between">
                <div class='h-10 text-center justify-center w-20 text-xl'>
                    AppNote 
                </div>
                <div>
                    <form action="" class="flex justify-center">
                        <input type="text" name="search" placeholder="Search ... " class="ml-2 px-2 py-1 w-full border-solid border-2 rounded-bl-md rounded-tl-md border-yellow-400 outline-none text-xs text-gray-500"> 
                        <button class="text-white w-20 bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-br-md rounded-tr-md mr-2"><img class="h-4 text-white" src="img/search.png" alt=""></button>
                    </form>
                </div>
                <div class="m-2">
                    <a href="/register" class="text-sm ml-1 border-solid border-2 border-gray-500 rounded-md py-1 px-3 hover:bg-yellow-500 hover:border-yellow-500">s'inscrire</a>
                    <a href="/login" class="text-sm ml-1  border-solid border-2 border-gray-500 rounded-md py-1 px-3 hover:bg-yellow-500 hover:border-yellow-500">login</a>
                </div>
             </div>
        </div> 

        @yield('content');

        @livewireScripts

        <div id="footer" class=" text-sm text-center bg-gray-800 text-gray-200  mb-10 border-solid border-gray-150 border-b-1 shadow-md">
         <p>&copy 2020 - AppNote - <a href="http://www.codeservio.fr">Codeservio.fr</a> </p>
        </div>
        </body>
</html>
