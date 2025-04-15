<div class="container-fluid bg-light min-vh-100 py-4"> <!-- Fundo claro e agradável -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4 bg-white">
                    <div class="card-body">
                        <h2 class="text-center text-dark mb-5">Detalhes do Produto</h2>

                        {{-- Imagem do Produto --}}
                        @if ($produto->imagem)
                            <div class="text-center mb-5">
                                <img src="{{ asset('storage/' . $produto->imagem) }}" 
                                     class="img-fluid w-50 h-auto object-cover rounded shadow-lg" 
                                     alt="Imagem do Produto">
                            </div>
                        @else
                            <div class="text-center mb-5">
                                <img src="https://via.placeholder.com/400x400?text=Imagem+Indisponível" 
                                     class="img-fluid w-100 h-auto object-cover rounded shadow-lg" 
                                     alt="Imagem do Produto">
                            </div>
                        @endif

                        {{-- Nome --}}
                        <div class="mb-4">
                            <h4 class="text-secondary">Nome do Produto:</h4>
                            <p class="text-dark fs-5">{{ $produto->nome }}</p>
                        </div>

                        {{-- Ingredientes --}}
                        <div class="mb-4">
                            <h4 class="text-secondary">Ingredientes:</h4>
                            <p class="text-muted">{{ $produto->ingredientes }}</p>
                        </div>

                        {{-- Valor --}}
                        <div class="mb-4">
                            <h4 class="text-secondary">Valor:</h4>
                            <p class="text-success fs-4"><strong>R$ {{ number_format($produto->valor, 2, ',', '.') }}</strong></p>
                        </div>

                        {{-- Botões de Ação --}}
                        <div class="d-flex justify-content-between mt-5">
                            <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary w-48">
                                <i class="bi bi-arrow-left-circle me-2"></i> Voltar
                            </a>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning w-48">
                                <i class="bi bi-pencil-fill me-2"></i> Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
