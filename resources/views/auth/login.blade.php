@extends('layout')

@section('contenido')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-pink-500 via-purple-500 to-orange-500">
    <div class="bg-white p-8 rounded-2xl shadow-xl max-w-md w-full">
        <h2 class="text-3xl font-bold text-center text-pink-500 mb-6">Iniciar Sesión</h2>
        
        <form action="{{ route('login.store') }}" method="post" class="space-y-6">
            @csrf
            
            <div>
                <input 
                    type="text" 
                    name="email" 
                    placeholder="Ingrese aquí su email" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-pink-500"
                >
            </div>
            
            <div>
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Ingrese aquí su contraseña" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-pink-500"
                >
            </div>
            
            <div>
                <input 
                    type="submit" 
                    value="Iniciar sesión" 
                    class="w-full bg-gradient-to-r from-pink-500 to-orange-500 text-white p-3 rounded-lg shadow-lg font-semibold cursor-pointer transition-transform transform hover:scale-105"
                >
            </div>
        </form>
    </div>
</div>
@endsection
