<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Converter extends Component
{
    public $base = 'EUR';
    public $amount = 1;
    

    public function render()
    {
        $response = Http::get("https://api.ratesapi.io/api/latest", [
            'base' => $this->base,
            'amount' => $this->amount
        ]);
       
        return view('livewire.converter', \compact('response'));
    }

    
}
