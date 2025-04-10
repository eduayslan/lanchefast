<div class="max-w-xl mx-auto mt-10 bg-white shadow-md rounded-2xl p-6">
    <h2 class="text-2xl font-semibold text-gray-700 mb-6">Detalhes do Produto</h2>

    {{-- Imagem --}}
    @if ($produto->imagem)
        <div class="flex justify-center mb-6">
            <img src="{{ asset('storage/' . $produto->imagem) }}" class="w-48 h-48 object-cover rounded shadow">
        </div>
    @endif

    {{-- Nome --}}
    <div class="mb-4">
        <h3 class="text-lg font-medium text-gray-800">Nome:</h3>
        <p class="text-gray-600">{{ $produto->nome }}</p>
    </div>

    {{-- Ingredientes --}}
    <div class="mb-4">
        <h3 class="text-lg font-medium text-gray-800">Ingredientes:</h3>
        <p class="text-gray-600 whitespace-pre-line">{{ $produto->ingredientes }}</p>
    </div>

    {{-- Valor --}}
    <div class="mb-4">
        <h3 class="text-lg font-medium text-gray-800">Valor:</h3>
        <p class="text-green-600 font-semibold">R$ {{ number_format($produto->valor, 2, ',', '.') }}</p>
    </div>

    {{-- Botão de Voltar ou Editar --}}
    <div class="mt-6 flex gap-4">
        <a href="{{ route('produtos.index') }}"
           class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300 transition">
            Voltar
        </a>

        <a href="{{ route('produtos.edit', $produto->id) }}"
           class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
            Editar
        </a>
    </div>
</div>
