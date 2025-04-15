<div class="container-fluid bg-light min-vh-100 py-4"> <!-- Fundo claro e agradável -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4 bg-white">
                    <div class="card-body">
                        <h2 class="text-center text-dark mb-5">Editar Produto</h2>

                        {{-- Imagem do Produto --}}
                        <div class="text-center mb-5">
                            @if ($imagem_atual && Storage::disk('public')->exists($imagem_atual))
                                <img src="{{ asset('storage/' . $imagem_atual) }}" 
                                     class="img-fluid w-50 h-auto object-cover rounded shadow-lg" 
                                     alt="Imagem do Produto">
                            @else
                                <img src="https://via.placeholder.com/400x400?text=Imagem+Indisponível" 
                                     class="img-fluid w-100 h-auto object-cover rounded shadow-lg" 
                                     alt="Imagem do Produto">
                            @endif
                        </div>

                        {{-- Nome --}}
                        <div class="mb-4">
                            <h4 class="text-secondary">Nome do Produto:</h4>
                            <input wire:model="nome" type="text" 
                                   class="form-control p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Digite o nome do produto">
                            @error('nome') 
                                <span class="text-red-500 text-sm">{{ $message }}</span> 
                            @enderror
                        </div>

                        {{-- Ingredientes --}}
                        <div class="mb-4">
                            <h4 class="text-secondary">Ingredientes:</h4>
                            <textarea wire:model="ingredientes" rows="4" 
                                      class="form-control p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                      placeholder="Ex: pão, queijo, hambúrguer..."></textarea>
                            @error('ingredientes') 
                                <span class="text-red-500 text-sm">{{ $message }}</span> 
                            @enderror
                        </div>

                        {{-- Valor --}}
                        <div class="mb-4">
                            <h4 class="text-secondary">Valor (R$):</h4>
                            <input wire:model="valor" type="number" step="0.01" 
                                   class="form-control p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Ex: 19.90">
                            @error('valor') 
                                <span class="text-red-500 text-sm">{{ $message }}</span> 
                            @enderror
                        </div>

                        {{-- Imagem Nova --}}
                        <div class="mb-4">
                            <h4 class="text-secondary">Imagem (opcional):</h4>
                            <input wire:model="imagem_nova" type="file" 
                                   class="form-control p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('imagem_nova') 
                                <span class="text-red-500 text-sm">{{ $message }}</span> 
                            @enderror

                            @if ($imagem_nova)
                                <div class="mt-3">
                                    <span class="text-sm text-gray-600">Pré-visualização:</span>
                                    <img src="{{ $imagem_nova->temporaryUrl() }}" 
                                         class="mt-2 w-32 h-32 object-cover rounded-lg">
                                </div>
                            @endif
                        </div>

                        {{-- Botões --}}
                        <div class="d-flex justify-content-between mt-5">
                            <a href="{{ route('produtos.index') }}" 
                               class="btn btn-outline-secondary w-48 py-2 px-4 rounded-lg font-semibold text-gray-700 hover:bg-gray-100">
                                <i class="bi bi-arrow-left-circle me-2"></i> Voltar
                            </a>
                            <button wire:click="atualizar" 
                                    class="btn btn-warning w-48 py-2 px-4 rounded-lg font-semibold text-white hover:bg-yellow-600">
                                <i class="bi bi-pencil-fill me-2"></i> Atualizar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
