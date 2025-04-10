<div class="max-w-xl mx-auto mt-10 bg-white shadow-md rounded-2xl p-6">
    <h2 class="text-2xl font-semibold mb-6 text-gray-700">Editar Produto</h2>

    @if (session()->has('mensagem'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('mensagem') }}
        </div>
    @endif

    <form wire:submit.prevent="atualizar" enctype="multipart/form-data" class="space-y-5">

        {{-- Nome --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Nome</label>
            <input wire:model="nome" type="text" class="w-full border-gray-300 rounded-lg shadow-sm">
            @error('nome') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Ingredientes --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Ingredientes</label>
            <textarea wire:model="ingredientes" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm"></textarea>
            @error('ingredientes') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Valor --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Valor (R$)</label>
            <input wire:model="valor" type="number" step="0.01" class="w-full border-gray-300 rounded-lg shadow-sm">
            @error('valor') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Imagem Atual --}}
        @if ($imagem_atual)
            <div>
                <label class="block text-sm font-medium text-gray-700">Imagem atual</label>
                <img src="{{ asset('storage/' . $imagem_atual) }}" class="w-32 h-32 object-cover rounded mt-2">
            </div>
        @endif

        {{-- Nova Imagem --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Nova imagem (opcional)</label>
            <input wire:model="imagem_nova" type="file" class="w-full border-gray-300 rounded-lg shadow-sm">
            @error('imagem_nova') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            @if ($imagem_nova)
                <div class="mt-3">
                    <span class="text-sm text-gray-600">Pré-visualização da nova imagem:</span>
                    <img src="{{ $imagem_nova->temporaryUrl() }}" class="mt-2 w-32 h-32 object-cover rounded">
                </div>
            @endif
        </div>

        {{-- Botão --}}
        <div class="flex justify-end">
            <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition duration-200">
                Atualizar Produto
            </button>
        </div>

    </form>
</div>
