<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Cadastro de Cliente</h4>
        </div>
        <div class="card-body">
            @if (session()->has('mensagem'))
                <div class="alert alert-success">
                    {{ session('mensagem') }}
                </div>
            @endif

            <form wire:submit.prevent="salvar">
                {{-- Nome --}}
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" wire:model.defer="nome" class="form-control" id="nome" placeholder="Nome completo">
                    @error('nome') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Endereço --}}
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" wire:model.defer="endereco" class="form-control" id="endereco" placeholder="Rua, número, bairro">
                    @error('endereco') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Telefone --}}
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" wire:model.defer="telefone" class="form-control" id="telefone" placeholder="(99) 99999-9999">
                    @error('telefone') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- CPF --}}
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" wire:model.defer="cpf" class="form-control" id="cpf" placeholder="000.000.000-00">
                    @error('cpf') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" wire:model.defer="email" class="form-control" id="email" placeholder="email@exemplo.com">
                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Senha --}}
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" wire:model.defer="senha" class="form-control" id="senha" placeholder="Digite uma senha segura">
                    @error('senha') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Botão --}}
                <div class="text-end">
                    <button type="submit" class="btn btn-success">
                        Salvar Cliente
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
