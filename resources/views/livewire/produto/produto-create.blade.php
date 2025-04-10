<div class="max-w-xl mx-auto mt-10 bg-white shadow-md rounded-2xl p-6">
    <h2 class="text-2xl font-semibold mb-6 text-gray-700">Cadastrar Produto</h2>

    @if (session()->has('mensagem'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('mensagem') }}
        </div>
    @endif

    <form wire:submit.prevent="salvar" enctype="multipart/form-data" class="space-y-5">

        {{-- Nome --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Nome</label>
            <input wire:model="nome" type="text" class="w-full border-gray-300 rounded-lg shadow-sm" placeholder="Nome do produto">
            @error('nome') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Ingredientes --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Ingredientes</label>
            <textarea wire:model="ingredientes" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm" placeholder="Ex: pão, queijo, hambúrguer..."></textarea>
            @error('ingredientes') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Valor --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Valor (R$)</label>
            <input wire:model="valor" type="number" step="0.01" class="w-full border-gray-300 rounded-lg shadow-sm" placeholder="Ex: 19.90">
            @error('valor') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Imagem --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Imagem (opcional)</label>
            <input wire:model="imagem" type="file" class="w-full border-gray-300 rounded-lg shadow-sm">
            @error('imagem') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            @if ($imagem)
                <div class="mt-3">
                    <span class="text-sm text-gray-600">Pré-visualização:</span>
                    <img src="{{ $imagem->temporaryUrl() }}" class="mt-2 w-32 h-32 object-cover rounded">
                </div>
            @endif
        </div>

        {{-- Botão --}}
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                Salvar Produto
            </button>
        </div>

    </form>
</div>
