<x-app-layout>
    <div class="container px-52 py-8">
        <h2>Filtros</h2>

{{$animals[0]}}
        <div class="grid grid-cols-4 gap-6">
            @foreach ($animals as $animal)
                @php
                    if($animal->sex == 'male') $sex = 'Macho';
                    else $sex = 'Hembra';   
                @endphp
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <a href="">
                        <img class="w-full" src="https://placedog.net/500" alt="">
                    </a>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            <a href="">{{$animal->name}}</a>    
                        </div>
                        <p class="text-gray-700 text-base">
                            <ul>
                                <li><i class="fa-solid fa-venus-mars"></i> {{$sex}}</li>
                                <li>{{$animal->age}} años</li>
                                <li>Tamaño {{$animal->size}}</li>
                            </ul>
                        </p>
                    </div>                    
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{$animals->links()}}
        </div>
    </div> 
</x-app-layout>