<div class="container-fluid bg-light min-vh-100 py-4" style="background-color: #f0f4f8;"> <!-- Fundo suave da página -->
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="mb-0 text-dark">
                    <i class="bi bi-people-fill me-1"></i> Clientes
                </h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('clientes.create') }}" class="btn btn-primary shadow-sm"> <!-- Botão colorido com borda suave -->
                    <i class="bi bi-plus-circle me-1"></i> Novo Cliente
                </a>
            </div>
        </div>

        <!-- Card com fundo neutro e leve sombreamento -->
        <div class="card shadow-lg border-0 rounded-4 bg-white"> <!-- Card com fundo branco e sombra -->
            <div class="card-body">
                <div class="row mb-4 align-items-center">
                    <div class="col-md-6 mb-2 mb-md-0">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" wire:model.debounce.300ms="search" class="form-control" placeholder="Buscar clientes por nome, CPF..." style="border-color: #ced4da;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select wire:model="perPage" class="form-select" style="border-color: #ced4da;">
                            <option value="10">10 por página</option>
                            <option value="25">25 por página</option>
                            <option value="50">50 por página</option>
                            <option value="100">100 por página</option>
                        </select>
                    </div>
                </div>

                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-1"></i> {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-info text-white"> <!-- Cabeçalho da tabela com fundo azul suave -->
                            <tr>
                                <th><i class="bi bi-person me-1"></i> Nome</th>
                                <th><i class="bi bi-credit-card me-1"></i> CPF</th>
                                <th><i class="bi bi-envelope me-1"></i> Email</th>
                                <th><i class="bi bi-telephone me-1"></i> Telefone</th>
                                <th class="text-center"><i class="bi bi-gear me-1"></i> Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clientes as $cliente)
                                <tr class="hover-table">
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->cpf }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-sm btn-outline-info me-1" title="Visualizar">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-outline-warning me-1" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button wire:click="delete({{ $cliente->id }})"
                                                class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Tem certeza que deseja excluir este cliente?')"
                                                title="Excluir">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                   <td colspan="5" class="text-center text-muted">
                                       <i class="bi bi-info-circle"></i> Nenhum cliente encontrado.
                                   </td> 
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    {{ $clientes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>