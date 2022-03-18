@section('title', 'Contáctanos')

<x-app-layout>
    <div class="container mx-auto px-8 sm:px-20 lg:px-52 py-8">
        <h1 class="text-3xl font-bold text-broccoli-700 mb-10">Contáctanos</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 w-full">
            {{-- Datos contacto (col1) --}}
            <div>
                <h1 class="text-xl font-bold text-broccoli-700 mb-2">Ven a visitarnos</h1>
                <ul>
                    <li class="py-1"><i class="fa-solid fa-phone" style="color:#5c2e23"></i> +34 628 11 22 33</li>
                    <li class="py-1"><i class="fa-solid fa-envelope" style="color:#5c2e23"></i> info@protectora.es</li>
                    <li class="py-1"><i class="fa-solid fa-location-dot" style="color:#5c2e23"></i> C/Falsa 123, 46702 Valencia</li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41530.56819718778!2d-0.3678395389979504!3d39.3159565661633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61b4c0cef6b643%3A0xfb1cc4553bca4d04!2sTancat%20de%20Milia!5e0!3m2!1ses!2ses!4v1647532865459!5m2!1ses!2ses" class="w-full" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            
            {{-- Formulario (col2) --}}
            <div>
                <form action="{{route('contactanos.store')}}" method="POST">
                    @csrf
                    <label class="block text-broccoli-900 font-bold mb-2" for="name">
                        Nombre
                    </label>
                    <input 
                            type="text" 
                            class="w-full mt-1 mb-6 focus:ring-indigo-500 focus:border-indigo-500 block shadow-sm sm:text-sm border-gray-300 rounded-md"
                            name="name" 
                            value="{{old('name')}}"
                            placeholder="Nombre">
                    @error('name')
                        *<small>{{$message}}</small>
                    @enderror
            
                    <label class="block text-broccoli-900 font-bold mb-2" for="correo">
                        Correo
                    </label>
                    <input 
                        type="text" 
                        class="w-full mt-1 mb-6 focus:ring-indigo-500 focus:border-indigo-500 block shadow-sm sm:text-sm border-gray-300 rounded-md"
                        name="correo" 
                        value="{{old('correo')}}"
                        placeholder="Correo">
                    @error('correo')
                        *<small>{{$message}}</small>
                    @enderror
            
                    <label class="block text-broccoli-900 font-bold mb-2" for="mensaje">
                        Mensaje
                    </label>
                        <textarea 
                            rows="5" 
                            name="mensaje"
                            class="w-full mb-6 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block sm:text-sm border border-gray-300 rounded-md">
                            {{old('mensaje')}}</textarea>
                    </label>
                    @error('mensaje')
                        *<small>{{$message}}</small>
                    @enderror
                    
                    <div class="text-center sm:text-right">
                        <button 
                            type="submit"
                            class="px-6 py-2 text-broccoli-600 transition-colors duration-300 border-2 border-broccoli-600 rounded-full hover:bg-broccoli-600 hover:text-white">
                            Enviar
                        </button>            
                        @if (session('info'))
                            <script>
                                alert('{{session("info")}}');
                            </script>
                        @endif
                    </div>
                </form>
            </div>
            
        </div>
    </div>               
</x-app-layout>