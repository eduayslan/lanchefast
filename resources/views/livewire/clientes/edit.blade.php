<div class="d-flex justify-content-center align-items-center mt-5" style="background-color: #f7f7f7;">
    <div class="card shadow-lg bg-dark text-light border-0" style="width: 100%; max-width: 600px;">
        <div class="card-body">
            <h4 class="card-title mb-4 text-center text-warning">
                <i class="bi bi-person-plus-fill"></i> Editar Cliente
            </h4>

            <!-- Exibindo a mensagem de sucesso após a atualização -->
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <!-- Formulário de Edição -->
            <form wire:submit.prevent="atualizar">
                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-person"></i> Nome</label>
                    <input type="text" wire:model="nome" class="form-control" value="{{ $cliente->nome }}">
                    @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-credit-card"></i> CPF</label>
                    <input type="text" wire:model="cpf" class="form-control" value="{{ $cliente->cpf }}">
                    @error('cpf') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-envelope"></i> Email</label>
                    <input type="email" wire:model="email" class="form-control" value="{{ $cliente->email }}">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-telephone"></i> Telefone</label>
                    <input type="text" wire:model="telefone" class="form-control" value="{{ $cliente->telefone }}">
                    @error('telefone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('clientes.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Voltar
                    </a>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Atualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
