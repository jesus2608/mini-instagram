@extends('layout')

@section('contenido')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-pink-500 via-purple-500 to-orange-500">
    <div class="bg-white p-8 rounded-2xl shadow-xl max-w-md w-full">
        <h2 class="text-3xl font-bold text-center text-pink-500 mb-6">Actualizar Post</h2>

        <form action="{{ route('post.put', $post->id) }}" method="post" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Subir archivo -->
            <div>
                <label for="urlImagen" class="block text-lg font-medium text-gray-700">Nueva Imagen</label>
                <input 
                    type="file" 
                    name="urlImagen" 
                    id="urlImagen" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-pink-500"
                    value="{{ $post->urlImagen }}"
                >
            </div>

            <!-- Imagen actual -->
            @if ($post->urlImagen)
                <div>
                    <p class="text-gray-700">Imagen actual:</p>
                    <img 
                        src="{{ asset('storage/' . $post->urlImagen) }}" 
                        alt="Imagen actual" 
                        class="w-48 h-auto rounded-lg border border-gray-300 mb-4"
                    >
                    <input type="hidden" name="imagenActual" value="{{ $post->urlImagen }}">
                </div>
            @endif

            <!-- Texto del post -->
            <div>
                <label for="texto" class="block text-lg font-medium text-gray-700">Texto del post</label>
                <input 
                    type="text" 
                    name="texto" 
                    placeholder="Ingrese el texto" 
                    value="{{ $post->texto }}" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-pink-500"
                >
            </div>

            <!-- Botón de actualización -->
            <div class="flex justify-between items-center">
                <input 
                    type="submit" 
                    value="Actualizar post" 
                    class="w-full bg-gradient-to-r from-pink-500 to-orange-500 text-white p-3 rounded-lg shadow-lg font-semibold cursor-pointer transition-transform transform hover:scale-105"
                >

                <input 
                    type="hidden" 
                    name="usuario_id" 
                    value="{{ auth()->user()->id }}"
                >
            </div>
        </form>
    </div>
</div>
@endsection
