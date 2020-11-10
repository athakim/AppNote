<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Note;
use Carbon\Carbon;


class Notes extends Component
{
    public $idf;

    public $todos;

    public $doings;

    public $dones;

    public $notes;

    public $content;
    
    public $state = 'ToDo';
    
    public $priority = 'Low';
    
    public $limitDate;

    protected $rules = [
        'content' => 'required|string|min:5',
        'limitDate' => 'required|date|after:yesterday'
    ];

    protected $listeners = [
        'noteUpdated'=>'updateNotes',
        'noteEdit' => 'noteEdit'
    ];

    public function updateNotes()
    {
        $this->notes = Note::orderBy('created_at','DESC')->orderBy('limited_at','DESC')
        ->get();
        $this->todos = $this->notes->where('state','ToDo');

        $this->doings = $this->notes->where('state','Doing');

        $this->dones = $this->notes->where('state','Done');
    }

    public function mount()
    {
        $this->notes = Note::orderBy('created_at','DESC')->orderBy('limited_at','DESC')
        ->get();

        $this->todos = $this->notes->where('state','ToDo');

        $this->doings = $this->notes->where('state','Doing');

        $this->dones = $this->notes->where('state','Done');

        $this->limitDate =Carbon::now()->addDays(1)->format('d/m/Y');
    
    }
    public function render()
    {
        return view('livewire.notes');
    }

    public function res()
    {
        $this->content = '';
        $this->state = 'ToDo';
        $this->limitDate = '';
        $this->priority = 'Low';
        $this->idf = '';
    }

    public function save()
    {
        $this->validate();

        if(! $this->idf)
        {
            $this->note = new Note();
            $this->note->content = $this->content;
            $this->note->state = $this->state;
            $this->note->priority = $this->priority;
            $this->note->limited_at = $this->limitDate;
        }
        else{

            $this->note = Note::findOrFail($this->idf);
            $this->note->content = $this->content;
            $this->note->state = $this->state;
            $this->note->priority = $this->priority;
            $this->note->limited_at = $this->limitDate;

        }
        $this->note->save();
        
        $this->res();
        
        $this->emit('noteUpdated');
    }
    
    public function noteEdit($id)
    {
        $this->note = Note::findOrFail($id);
        
        $this->idf = $id;
        $this->content = $this->note->content;
    
        $this->state = $this->note->state;

        $this->priority = $this->note->priority;
        
        $this->limitDate = $this->note->limited_at;


    }
}
