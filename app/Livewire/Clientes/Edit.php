<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{
    public $clienteId, $nome, $email, $telefone;

    public function mount($id)
    {
        $cliente = Cliente::findOrFail($id);
        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->email = $cliente->email;
        $this->telefone = $cliente->telefone;
    }

    public function atualizar()
    {
        $this->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
        ]);

        Cliente::findOrFail($this->clienteId)->update([
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
        ]);

        return redirect()->route('clientes.index');
    }

    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
