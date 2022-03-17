@section('title', "Conoce a $animal->name")

@php 
    if($animal->sex == 'male') $sex = 'Macho';
    else $sex = 'Hembra';

    if($animal->accept_dogs) $dogs = 'Sí';
    else $dogs = 'No';

    if($animal->accept_cats) $cats = 'Sí';
    else $cats = 'No';
    
    if($animal->accept_children) $children = 'Sí';
    else $children = 'No';
@endphp

<x-app-layout>
    <div class="container mx-auto px-8 sm:px-20 lg:px-52 py-8">        
        {{-- Imagen, nombre y descripción --}}
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-6">
            {{-- Carrousel (col_1) --}}
            <div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($animal->images() as $image)
                            <div class="swiper-slide">                                
                                <img
                                class="object-cover w-full h-100"
                                src="{{Storage::url($image->url)}}"                                                            
                                />
                            </div>
                        @endforeach                        
                    </div>
                    <div class="swiper-button-next"><i class="fa-solid fa-chevron-right" style="color:white"></i></div>
                    <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left" style="color:white"></i></div>
                </div>
              
                <!-- Swiper JS -->
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                <script>
                    var swiper = new Swiper('.mySwiper', {
                      spaceBetween: 30,
                      centeredSlides: true,
                      loop: true,
                      autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                      },
                      pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                      },
                      navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                      },
                    });
                  </script>
            </div>

            {{-- Nombre y descripción (col_2)--}}
            <div>                 
                <h1 class="font-bold text-3xl text-broccoli-700">{{$animal->name}}</h1>  
                <p class="mt-3">{{$animal->description}}</p>
                <p class="mt-2"><i class="fa-solid fa-briefcase-medical" style="color:#5c2e23"></i> {{$animal->health}}</p>
            </div>            
        </div>

        {{-- Otros datos --}}
        <div class="grid grid-cols-3 mt-5">
            <div>
                <ul>
                    <li><i class="fa-solid fa-paw" style="color:#5c2e23"></i> <span class="font-bold text-orange-900">Sexo:</span> {{$sex}}</li>
                    <li><i class="fa-solid fa-paw" style="color:#5c2e23"></i> <span class="font-bold text-orange-900">Edad:</span> {{$animal->age}} años</li>
                    <li><i class="fa-solid fa-paw" style="color:#5c2e23"></i> <span class="font-bold text-orange-900">Peso:</span> {{$animal->weight}}kg</li>
                </ul>                
            </div>
            <div>
                <ul>
                    <li><i class="fa-solid fa-paw" style="color:#5c2e23"></i> <span class="font-bold text-orange-900">Raza:</span> {{$animal->breed}}</li>
                    <li><i class="fa-solid fa-paw" style="color:#5c2e23"></i> <span class="font-bold text-orange-900">Tamaño:</span> {{$animal->size}}</li>
                    <li><i class="fa-solid fa-paw" style="color:#5c2e23"></i> <span class="font-bold text-orange-900">Ciudad:</span> {{$animal->location}}</li>
                </ul>                
            </div>
            <div>
                <ul>
                    <li><i class="fa-solid fa-paw" style="color:#5c2e23"></i> <span class="font-bold text-orange-900">¿Acepta perros?</span> {{$dogs}}</li>
                    <li><i class="fa-solid fa-paw" style="color:#5c2e23"></i> <span class="font-bold text-orange-900">¿Acepta gatos?</span> {{$cats}}</li>
                    <li><i class="fa-solid fa-paw" style="color:#5c2e23"></i> <span class="font-bold text-orange-900">¿Acepta niños?</span> {{$children}}</li>
                </ul>                
            </div>
        </div>

        {{-- Otros perris --}}
        <div class="mt-10">
            <h1 class="font-bold text-3xl text-broccoli-700">Mis amigos</h1>  
            <div class="grid sm:grid-cols-4 grid-cols-1 gap-6 mt-4">
                @foreach ($friends as $friend)
                    @livewire('animal-card', ['animal' => $friend])
                @endforeach
            </div>
        </div>
    </div>      
</x-app-layout>