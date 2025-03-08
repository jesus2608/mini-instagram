@extends('layout')

@section('contenido')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-pink-500 via-purple-500 to-orange-500">
    <div class="bg-white p-8 rounded-2xl shadow-xl max-w-md w-full">
        <h2 class="text-3xl font-bold text-center text-pink-500 mb-6">Crear un nuevo post</h2>

        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="urlImagen" class="block text-lg font-medium text-gray-700">Imagen</label>
                <input 
                    type="file" 
                    name="urlImagen" 
                    id="urlImagen" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-pink-500"
                >
            </div>

            <div>
                <label for="texto" class="block text-lg font-medium text-gray-700">Texto</label>
                <input 
                    type="text" 
                    name="texto" 
                    placeholder="Ingrese el texto" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-pink-500"
                >
            </div>

            <div class="flex justify-between items-center">
                <input 
                    type="submit" 
                    value="Crear post" 
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
