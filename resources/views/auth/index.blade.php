@extends('layout')

@section('contenido')
@auth
    <div class="bg-gradient-to-br from-pink-500 via-purple-500 to-orange-500 min-h-screen p-8">
        <div class="text-center text-white mb-8">
            <h1 class="text-3xl font-bold mb-2">Bienvenido, {{ auth()->user()->name }}</h1>
            <a href="{{ route('post.create') }}" 
               class="inline-block bg-white text-pink-500 py-2 px-4 rounded-full font-semibold shadow-md hover:bg-pink-50 transition">
                Crear un post
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach (auth()->user()->posts as $post)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-4">
                        <p class="text-lg font-medium mb-2">{{ $post->texto }}</p>
                        <img src="{{ $post->urlImagen }}" alt="Imagen no disponible" class="w-full h-48 object-cover mb-4 rounded-md">
                    </div>
                    <div class="flex justify-between items-center p-4 bg-gray-50">
                        <a href="{{ route('post.edit', $post->id) }}" 
                           class="text-purple-600 hover:text-purple-800 font-medium">
                            Editar
                        </a>
                        <form action="{{ route('post.delete', $post->id) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="text-red-500 hover:text-red-700 transition">
                                ❌
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endauth

@guest
    <div class="bg-gradient-to-br from-pink-500 via-purple-500 to-orange-500 min-h-screen flex flex-col items-center justify-center text-white">
        <h1 class="text-4xl font-bold mb-4">Hola Invitado</h1>
        <p class="text-lg mb-6">Inicia sesión o regístrate si aún no tienes cuenta</p>
    </div>
@endguest
@endsection
