<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo App</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">    
    </head>
    <body>
        <div class="flex p-5 " id="app">
            <div class="w-1/5 text-center  
                border-2 rounded border-gray-600 bg-gray-100 text-gray-800
                pt-8 pb-8">
                <h6 class="font-bold text-3xl">
                    Hotel App
                </h6>
                <ul>
                    <!--li>
                        <a href="/book" class=" text-2xl">Home</a>
                    </!--li-->
                    <li>
                        <a href="/room" class=" text-2xl">Room</a>
                    </li>
                    <li>
                        <a href="/book" class="text-2xl">Book</a>
                    </li>  
                </ul>
            </div>
            <div class="w-3/4 p-5">
                @yield('content')
            </div>
        </div>        
        <script src="/js/app.js"></script>
    </body>
</html>