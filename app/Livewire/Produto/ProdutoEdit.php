<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ProdutoEdit extends Component
{
    use WithPagination;

    public $produto_id;
    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem_atual;
    public $imagem_nova;

    public function mount($id)
    {
        $produto = Produto::findOrFail($id);

        $this->produto_id = $produto->id;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;
        $this->imagem_atual = $produto->imagem;
    }

    public function atualizar()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'ingredientes' => 'required|string',
            'valor' => 'required|numeric|min:0',
            'imagem_nova' => 'nullable|image|max:2048',
        ]);

        $produto = Produto::findOrFail($this->produto_id);

        // Se o usuário enviar nova imagem, substitui
        if ($this->imagem_nova) {
            if ($produto->imagem && Storage::disk('public')->exists($produto->imagem)) {
                Storage::disk('public')->delete($produto->imagem);
            }

            $caminhoImagem = $this->imagem_nova->store('produtos', 'public');
        } else {
            $caminhoImagem = $produto->imagem;
        }

        $produto->update([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $caminhoImagem,
        ]);

        session()->flash('mensagem', 'Produto atualizado com sucesso!');
        return redirect()->route('produtos.show', $this->produto_id);
    }


        public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
