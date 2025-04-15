<div class="container mt-4" style="background-color: #f7f7f7;"> <!-- Fundo da página -->
    <div class="row mb-3">
        <div class="col-md-6">
            <h2><i class="bi bi-person-lines-fill"></i> Detalhes do Cliente</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('clientes.index') }}" class="btn btn-outline-dark">
                <i class="bi bi-arrow-left-circle"></i> Voltar
            </a>
        </div>
    </div>

    <div class="card shadow-lg bg-dark text-white border-0"> <!-- Card com fundo escuro e letras brancas -->
        <div class="card-header bg-secondary text-light"> <!-- Cabeçalho com fundo secundário e letras claras -->
            <strong><i class="bi bi-info-circle"></i> Informações do Cliente</strong>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold text-info"><i class="bi bi-person"></i> Nome:</label> <!-- Cor personalizada -->
                    <p class="form-control-plaintext text-light">{{ $cliente->nome }}</p> <!-- Texto claro -->
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-info"><i class="bi bi-credit-card"></i> CPF:</label> <!-- Cor personalizada -->
                    <p class="form-control-plaintext text-light">{{ $cliente->cpf }}</p> <!-- Texto claro -->
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold text-info"><i class="bi bi-envelope"></i> Email:</label> <!-- Cor personalizada -->
                    <p class="form-control-plaintext text-light">{{ $cliente->email ?? 'Não informado' }}</p> <!-- Texto claro -->
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-info"><i class="bi bi-telephone"></i> Telefone:</label> <!-- Cor personalizada -->
                    <p class="form-control-plaintext text-light">{{ $cliente->telefone }}</p> <!-- Texto claro -->
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label fw-bold text-info"><i class="bi bi-geo-alt"></i> Endereço:</label> <!-- Cor personalizada -->
                    <p class="form-control-plaintext text-light">{{ $cliente->endereco ?? 'Não informado' }}</p> <!-- Texto claro -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="form-label fw-bold text-info"><i class="bi bi-calendar-plus"></i> Criado em:</label> <!-- Cor personalizada -->
                    <p class="form-control-plaintext text-light">{{ $cliente->created_at->format('d/m/Y H:i') }}</p> <!-- Texto claro -->
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-info"><i class="bi bi-calendar-check"></i> Atualizado em:</label> <!-- Cor personalizada -->
                    <p class="form-control-plaintext text-light">{{ $cliente->updated_at->format('d/m/Y H:i') }}</p> <!-- Texto claro -->
                </div>
            </div>
        </div>
    </div>
</div>
