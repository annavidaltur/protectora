<div>
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
</div>
