<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProdutoCreate extends Component
{
    use WithFileUploads;

    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    public function salvar()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'ingredientes' => 'required|string',
            'valor' => 'required|numeric|min:0',
            'imagem' => 'nullable|image|max:2048', // Máx. 2MB
        ]);

        $path = $this->imagem ? $this->imagem->store('produtos', 'public') : null;

        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $path,
        ]);

        session()->flash('mensagem', 'Produto criado com sucesso!');
        return redirect()->route('produtos.index');
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
