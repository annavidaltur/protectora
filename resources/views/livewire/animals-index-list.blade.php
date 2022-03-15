<div>
    <div>
        <h2 class="font-bold text-xl text-broccoli-900">Filtros</h2>    

        <fieldset class="mt-3 mb-4">
                @foreach ($species as $specie)                
                    <x-jet-input type="checkbox" wire:click="filter({{$specie->id}})"/> 
                    <label for="species" class="font-medium text-gray-700">{{$specie->name}}</label>
                    <br>
                @endforeach
    
                <x-jet-input type="text" wire:model="search" placeholder="Buscar por nombre..." /> 
    
                <label for="species" class="font-medium text-gray-700">Ordenar por</label>
                <select name="birth" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
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
                    <a href="{{route('animals.show', $animal)}}">                   
                        <img class="w-full" src="{{Storage::url($animal->portada()->url)}}" alt="">
                    </a>  
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-broccoli-900">
                            <a href="{{route('animals.show', $animal)}}">{{$animal->name}} {{$animal->specie_id}}
                            </a>               
                        </div>
                        <p class="text-gray-700 text-base">
                            <ul role="list">                            
                                <li>{{$sex}}</li>
                                <li>{{implode('/', array_reverse(explode('-', $animal->birth)))}} ({{$animal->age}} años)</li>
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
    
</div> </div>
