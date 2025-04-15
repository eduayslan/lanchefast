<div class="d-flex justify-content-center align-items-center mt-5" style="background-color: #f7f7f7;"> <!-- Cor de fundo alterada -->
    <div class="card shadow-lg bg-dark text-light border-0" style="width: 100%; max-width: 600px;"> <!-- Cor do card alterada -->
        <div class="card-body">
            <h4 class="card-title mb-4 text-center text-warning"> <!-- Cor do título alterada -->
                <i class="bi bi-person-plus-fill"></i> Novo Cliente
            </h4>

            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-person"></i> Nome</label>
                    <input type="text" wire:model="nome" class="form-control">
                    @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-house"></i> Endereço</label>
                    <input type="text" wire:model="endereco" class="form-control">
                    @error('endereco') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-telephone"></i> Telefone</label>
                    <input type="text" wire:model="telefone" class="form-control">
                    @error('telefone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-credit-card"></i> CPF</label>
                    <input type="text" wire:model="cpf" class="form-control">
                    @error('cpf') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-envelope"></i> Email</label>
                    <input type="email" wire:model="email" class="form-control">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label text-light"><i class="bi bi-lock"></i> Senha</label>
                    <input type="password" wire:model="senha" class="form-control">
                    @error('senha') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('clientes.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Voltar
                    </a>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
