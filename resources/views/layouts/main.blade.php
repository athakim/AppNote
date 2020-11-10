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
                <div class='h-10 text-center justify-center w-20 text-md'>
                    logo 
                </div>
                <div class="">
                    <a href="" class="text-sm ml-1" >s'inscrire</a>
                    <a href="" class="text-sm ml-1">login</a>
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
