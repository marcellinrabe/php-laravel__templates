<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Job extends Component
{
    public Job $job;
    public function render()
    {
        return view('livewire.job');
    }
}
