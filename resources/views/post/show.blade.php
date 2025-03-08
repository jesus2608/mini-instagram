@extends('layout')

@section('contenido')
<div class="bg-gradient-to-br from-pink-500 via-purple-500 to-orange-500 min-h-screen py-10">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-white mb-6">Todos los POST</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-semibold text-pink-500">{{ $post->usuario->name }}</h3>
                    <p class="text-gray-700 mt-2 mb-4">{{ $post->texto }}</p>
                    
                    <img 
                        src="{{ Storage::url($post->urlImagen) }}" 
                        alt="Imagen del post" 
                        class="w-full h-auto rounded-lg mb-4"
                        style="max-width: 100%;"
                    >
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
