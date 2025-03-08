<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Instagram</title>

    <!-- Vinculamos los archivos CSS generados por Vite -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-gradient-to-r from-pink-500 via-purple-500 to-orange-500 p-4 text-white text-center">
        <h1 class="text-3xl font-semibold">Bienvenido a Tora Insta</h1>
    </header>

    <nav class="flex justify-center space-x-8 py-4 bg-white shadow-md">
        <a href="{{ route('login.login') }}" class="text-pink-500 font-semibold hover:text-pink-700">Login</a>
        <a href="{{ route('register.create') }}" class="text-pink-500 font-semibold hover:text-pink-700">Registrarse</a>
        <form action="{{ route('login.logout') }}" method="post" class="inline-block">
            @csrf
            <input type="submit" value="Cerrar sesión" class="bg-pink-500 text-white py-2 px-4 rounded-lg hover:bg-pink-700 cursor-pointer">
        </form>
        <a href="{{ route('post.show') }}" class="text-pink-500 font-semibold hover:text-pink-700">Mostrar Todos los Post</a>
    </nav>

    @yield('contenido')


  
</body>
</html>
