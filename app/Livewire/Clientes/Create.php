<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    protected $rules = [
        'nome' => 'required|min:3',
        'endereco' => 'required|min:5',
        'telefone' => 'required',
        'cpf' => 'required|cpf|unique:clientes,cpf',
        'email' => 'required|email|unique:clientes,email',
        'senha' => 'required|min:6',
    ];

    public function salvar()
    {
        $this->validate();

        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha),
        ]);

        session()->flash('mensagem', 'Cliente cadastrado com sucesso!');
        $this->reset();
    }



    public function render()
    {
        return view('livewire.clientes.create');
    }
}
