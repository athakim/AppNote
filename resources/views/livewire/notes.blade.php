<div>
    <div id="block">

        <div class=" mx-auto sm:w-3/5 ">
            <form wire:submit.prevent="save" action="" >
                <input type="hidden" name="idf" wire:model="id" value="{{$idf}}" >
                <div class="flex justify-between">
                    <input wire:model="content" placeholder= "Ex: Préparer mon séminaire ..." type="text" class="ml-2 px-2 py-1 w-full border-solid border-2 rounded-bl-md rounded-tl-md border-yellow-400 outline-none text-xs text-gray-500">
                    <button type="submit" class=" w-20 bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-br-md rounded-tr-md mr-2">+</button>
                </div>
                <div class="my-1  mx-2 ">
                    <div class="md:flex sm:justify-center md:justify-between mt-2 mb-1">
                        <div class="flex  px-2 py-1 justify-left text-sm text-gray-700   border-gray-300 border-2 rounded-md">
                            <div>
                                <input wire:model="state" type="radio" id="todo" name="state" value="ToDo" checked class="m-1">
                                <label for="todo" class="text-sm">ToDo</label>
                            </div>
                            <div>
                                <input wire:model="state" type="radio" id="doing" name="state" value="Doing"  class="m-1">
                                <label for="doing" class="text-sm">Doing</label>
                            </div>
                            <div>
                                <input wire:model="state" type="radio" id="done" name="state" value="Done"  class="m-1">
                                <label for="done" class="text-sm">Done</label>
                            </div>
                        </div>
                        <div class="flex px-2 py-1 mb-1 text-sm text-gray-700 sm:justify-center  border-gray-300 border-2 rounded-md">
                            <div>
                                <input wire:model="priority" type="radio" id="low" name="priority" value="low" checked class="m-1">
                                <label for="low" class="text-sm">Low</label>
                            </div>
                            <div>
                                <input wire:model="priority" type="radio" id="moderate" name="priority" value="moderate"  class="m-1">
                                <label for="moderate" class="text-sm">Moderate</label>
                            </div>
                            <div>
                                <input wire:model="priority" type="radio" id="high" name="priority" value="high"  class="m-1">
                                <label for="high" class="text-sm">High</label>
                            </div>
                        </div>
                        <div class=" px-2 py-1 md:justify-right sm:justify-center mb-1 text-sm text-gray-700  border-gray-300 border-2 rounded-md">
                            <div>
                            <label for="date" class="text-sm text-gray-700 mr-3">Before : </label>
                            <input wire:model="limitDate"  type="date" class="text-sm text-gray-700 " name="limitDate" >
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @if ($errors->any())
                <div class=" text-center mt-1 bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative m-auto w-auto" role="alert">
                    <strong class="font-bold">Error ! </strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    
                </div>
            @endif
        </div>
        <div class=" sm:flex ">
             <!-- TODO List  -->
            <div class=" sm:flex-1 colonne bg-gray-100 m-4 p-3 border-solid border-gray-200 border-2 rounded-md ">
                <div class="entete bg-orange-200 m-auto text-center p-5 font-bold mb-2 border-solid border-orange-300 border-2 rounded-md">ToDo</div>
                    
                @foreach ($todos as $note)
                    @livewire('note-details', ['note' => $note], key($note->id))
                @endforeach

            </div>   
            <!-- Doing List  -->
            <div class="sm:flex-1 colonne bg-gray-100 m-4 p-3 border-solid border-gray-200 border-2 rounded-md ">
                <div class="entete bg-yellow-200 m-auto text-center p-5 font-bold mb-2 border-solid border-yellow-300 border-2 rounded-md">Doing</div>
                   
                @foreach ($doings as $note)
                    @livewire('note-details', ['note' => $note], key($note->id))
                @endforeach

            </div>  
            <!-- Done List  -->
            <div class="sm:flex-1 colonne bg-gray-100 m-4 p-3 border-solid border-gray-200 border-2 rounded-md ">
                <div class="entete bg-green-200 m-auto text-center p-5 font-bold mb-2 border-solid border-green-300 border-2 rounded-md">Done</div>
                    
                @foreach ($dones as $note)
                    @livewire('note-details', ['note' => $note], key($note->id))
                @endforeach

            </div>  
    </div>
</div>
