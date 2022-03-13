<div>
    <h2 class="font-bold text-xl text-broccoli-900">Filtros</h2>    
    

    <fieldset class="mt-3 mb-4">
            @foreach ($species as $specie)                
                <x-jet-input type="checkbox" wire:model="filter({{$specie->id}})"/> 
                <label for="species" class="font-medium text-gray-700">{{$specie->name}}</label>
                <br>
            @endforeach

            <x-jet-input type="text" wire:model="search" placeholder="Buscar por nombre..." /> 

            <label for="species" class="font-medium text-gray-700">Ordenar por</label>
            <select name="birth" class="border shadow p-2 bg-white">
                <option value="iddesc" wire:click="order('id', 'desc')">Recientes</option>
                <option value="birthdesc" wire:click="order('birth', 'desc')" >Más jóvenes primero</option>
                <option value="birthasc" wire:click="order('birth', 'asc')">Mayores primero</option>                
            </select>
    </fieldset>
    
    
    @if($animals->count())
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
                        {{$animal->portada}} 
                    </div>
                    <p class="text-gray-700 text-base">
                        <ul>
                            <li>#{{$animal->id}}</li>
                            <li><i class="fa-solid fa-venus-mars"></i>{{$sex}}</li>
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
    @else 
        <p>No se han encontrado resultados</p>
    @endif
</div>
