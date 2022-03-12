<div>
    <h2 class="font-bold text-xl text-broccoli-900">Filtros</h2>
    <input wire:model="search" class="form-control" placeholder="Buscar..."> 

    <div class="grid sm:grid-cols-4 grid-cols-1 gap-6">
        @foreach ($animals as $animal)
            @php
                if($animal->sex == 'male') $sex = 'Macho';
                else $sex = 'Hembra';   
            @endphp
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-broccoli-50">
                <a href="">
                    <img class="w-full" src="https://placedog.net/500" alt="">
                </a>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-broccoli-900">
                        <a href="">{{$animal->name}}</a>    
                    </div>
                    <p class="text-gray-700 text-base">
                        <ul>
                            <li><i class="fa-solid fa-venus-mars"></i> {{$sex}}</li>
                            <li>{{implode('/', array_reverse(explode('-', $animal->birth)))}} ({{$animal->age}} años)</li>
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
