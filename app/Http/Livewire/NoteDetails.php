<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Note;

class NoteDetails extends Component
{
    public $note ;

    public function render()
    {
    
        return view('livewire.note-details');
    }

    public function delete($id)
    {
        $this->note = Note::findOrFail($id);
        $this->note->delete();

        $this->emit('noteUpdated');
    }

    public function updateState($id,$state)
    {
        $this->note = Note::findOrFail($id);
        $this->note->state = $state;
        $this->note->save();
        
        $this->emit('noteUpdated');
    }

    public function update($id)
    {
        $this->emit('noteEdit',$id);
    }
}
