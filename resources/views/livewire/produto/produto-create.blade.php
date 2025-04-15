<div class="max-w-3xl mx-auto mt-12 bg-white shadow-2xl rounded-3xl p-8 transform transition duration-500 hover:scale-105">
    <h2 class="text-4xl font-semibold mb-8 text-gray-800 text-center tracking-wide">Cadastrar Produto</h2>

    @if (session()->has('mensagem'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-800 px-6 py-3 rounded-2xl mb-6 shadow-md">
            {{ session('mensagem') }}
        </div>
    @endif

    <form wire:submit.prevent="salvar" enctype="multipart/form-data" class="space-y-8">

        {{-- Nome --}}
        <div>
            <label class="block text-lg font-medium text-gray-700 mb-2">Nome do Produto</label>
            <input wire:model="nome" type="text" class="w-full p-4 border-2 border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 transition duration-300 hover:border-blue-500 focus:border-blue-500 placeholder:text-gray-400" placeholder="Digite o nome do produto">
            @error('nome') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Ingredientes --}}
        <div>
            <label class="block text-lg font-medium text-gray-700 mb-2">Ingredientes</label>
            <textarea wire:model="ingredientes" rows="5" class="w-full p-4 border-2 border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 transition duration-300 hover:border-blue-500 focus:border-blue-500 placeholder:text-gray-400" placeholder="Ex: pão, queijo, hambúrguer..."></textarea>
            @error('ingredientes') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Valor --}}
        <div>
            <label class="block text-lg font-medium text-gray-700 mb-2">Valor (R$)</label>
            <input wire:model="valor" type="number" step="0.01" class="w-full p-4 border-2 border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 transition duration-300 hover:border-blue-500 focus:border-blue-500 placeholder:text-gray-400" placeholder="Ex: 19.90">
            @error('valor') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Imagem --}}
        <div>
            <label class="block text-lg font-medium text-gray-700 mb-2">Imagem do Produto (opcional)</label>
            <input wire:model="imagem" type="file" class="w-full p-4 border-2 border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 transition duration-300 hover:border-blue-500 focus:border-blue-500">
            @error('imagem') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            @if ($imagem)
                <div class="mt-4">
                    <span class="text-sm text-gray-600">Pré-visualização:</span>
                    <img src="{{ $imagem->temporaryUrl() }}" class="mt-2 w-32 h-32 object-cover rounded-xl shadow-lg transition-transform duration-300 transform hover:scale-105">
                </div>
            @endif
        </div>

        {{-- Botão --}}
        <div class="flex justify-center mt-6">
            <button type="submit" class="bg-blue-600 text-white px-8 py-4 rounded-xl hover:bg-blue-700 transition duration-300 transform hover:scale-105 shadow-xl">
                Salvar Produto
            </button>
        </div>

    </form>
</div>
