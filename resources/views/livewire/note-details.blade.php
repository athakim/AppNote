<div>
    <div class=" text-xs border-dotted border-gray-300 border-2 rounded-md mb-1">
        <div class="flex justify-between p-2 m-2 ">
            <div class=" choix">    
                <!-- choix TODO -->
                @if ($note->state != 'ToDo')
                <div >
                    <a href="" wire:click.prevent="updateState({{$note->id}},'ToDo')" title ="ToDo" class="border-solid  border-2 inline-block border-orange-300 p-1 mb-1 mr-2 bg-orange-200" ><img src="{{asset('img/todo.png')}}" alt="todo" class="w-4    "></a>
                </div>
                @endif
                <!-- choix DOING -->
                @if ($note->state != 'Doing')
                <div>
                    <a href="" wire:click.prevent="updateState({{$note->id}},'Doing')" title ="Doing" class="border-solid  border-2 inline-block  border-yellow-300 p-1 mb-1 mr-2 bg-yellow-200"  ><img src="{{asset('img/doing.png')}}" alt="todo" class="w-4  "></a>
                </div>
                @endif
                <!-- choix DONE -->
                @if ($note->state != 'Done')
                <div>
                    <a href="" wire:click.prevent="updateState({{$note->id}},'Done')" title ="Done" class="border-solid  border-2 inline-block  border-green-300 p-1 mb-1 mr-2 bg-green-200"  ><img src="{{asset('img/done.png')}}" alt="todo" class="w-4  "></a>
                </div>
                @endif
            </div>
            <p class="w-full p-1 {{  ($note->state === 'Done') ? 'line-through' : ''}}">{{$note->content}}</p>
            <div class=" actions">    
                <div>
                    <a href="" wire:click.prevent="update({{$note->id}})" class="border-solid  border-2 inline-block p-1 mb-1 ml-2 border-blue-300 bg-blue-200" ><img src="{{asset('img/pen.png')}}" alt="todo" class="w-4    "></a>
                </div>
                <div>
                    <a href="" wire:click.prevent="delete({{$note->id}})" class="border-solid  border-2 inline-block p-1 ml-2 border-red-300 bg-red-200"  ><img src="{{asset('img/delete.png')}}" alt="todo" class="w-4   "></a>
                </div>
            </div>
        </div>
        <div class="flex justify-between px-4 text-gray-400 mb-1">
            @php
                if ($note->priority == 'High')
                    $color = 'red';
                elseif ($note->priority == 'Moderate')
                    $color = 'orange';
                else
                    $color = 'yellow';
            @endphp
            <div class="bg-{{$color}}-400 border-solid border-{{$color}}-500 border-2 text-{{$color}}-800 px-1 rounded-md">
                {{$note->priority}}
            </div>
            <div>
                Before: {{ ($note->limited_at)?$note->limited_at->format('d/m/y') :'n/a'}}
                
            </div>
        </div>
    </div>
</div>
