<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Livewire\Component;

class Show extends Component
{
    public $cliente;

    public function mount($id)
    {
        $this->cliente = Cliente::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.clientes.show');
    }
}
