<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Search extends Component
{

    public String $input = "";
    public $jobs = [];
    public Int $currentIndex = 0;

    /**
     * Un hook est une fonction qui reagit et s'execute 
     * lorsque qu'une propriété/attribut d'une classe est
     * modifié
     * Le classe est alors une classe hook
     * 
     */
    public function updatedInput(){

        $key = '%'. $this->input.'%';

        if(strlen($this->input) > 3):
            $this->jobs = Job::where('title', 'like', $key)
            ->orWhere('description', 'like', $key)
            ->get();
        endif; 
    }

    public function resetIndex(){

        // la fonction reset de php mais la valeur de la variable mis en paramètre
        // la valeur au moment de sa declaration
        return $this->reset('currentIndex');
    }

    public function incrementIndex(){

        if($this->currentIndex === count($this->jobs)-1){
            $this->currentIndex = 0;
            return; // cette facon de retourner fait la meme chose que le mot-clé pass en python
        }
        $this->currentIndex++;
    }

    public function decrementIndex(){

        if($this->currentIndex === 0){
            $this->currentIndex = count($this->jobs)-1;
            return; // cette facon de retourner fait la meme chose que le mot-clé pass en python
        }
        $this->currentIndex--;
    }

    public function show(){
        if($this->jobs->isNotEmpty()):
            return redirect()->route('jobs.show', [ $this->jobs[$this->currentIndex]->id]);
        endif;
    }



     

    public function render()
    {        
        return view('livewire.search');
    }
}
