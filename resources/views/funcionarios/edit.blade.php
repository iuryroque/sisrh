@extends('layouts.default')

@section('title', 'Alterar Funcionário')

@section('conteudo')
    <div class="container-fluid shadow bg-white p-4">
        <h1 class="mb-3">Alterar Funcionário</h1>
        <form class="row g-4" method="post" action="{{ route('funcionarios.update', $funcionario->id) }}" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            {{-- <input type="hidden" value="1" name="id_user"> --}}
            <div class="row mt-5 mb-4">
                <div class="col-md-4">
                    <div>
                        <label for="nome" class="form-label fw-bold">Nome</label>
                        <input type="text" name="nome" value="{{ $funcionario->nome }}" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="data_nasc" class="form-label fw-bold">Data de Nascimento</label>
                        <input type="date" name="data_nasc" value="{{ $funcionario->data_nasc }}" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="sexo" class="form-label fw-bold">Sexo</label>
                        <select name="sexo" id="sexo" class="form-select form-select-lg bg-light" required>
                            <option value="">--</option>
                            <option value="m" @selected($funcionario->sexo == 'm')>Masculino</option>
                            <option value="f" @selected($funcionario->sexo == 'f')>Feminino</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div>
                        <label for="cpf" class="form-label fw-bold">CPF</label>
                        <input type="text" name="cpf" value="{{ $funcionario->cpf }}" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="email" class="form-label fw-bold">E-mail</label>
                        <input type="text" name="email" value="{{ $funcionario->email }}" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="telefone" class="form-label fw-bold">Telefone</label>
                        <input type="text" name="telefone" value="{{ $funcionario->telefone }}" class="form-control form-control-lg bg-light" value=""
                            placeholder="(DDD) XXXXX-XXXX" required>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div>
                        <label for="id_departamento" class="form-label fw-bold">Departamento</label>
                        {{-- <input type="text" name="departamento" class="form-select form-select-lg bg-light" value="" --}}
                        {{-- required> --}}
                        <select name="id_departamento" id="id_departamento" class="form-select form-select-lg"
                            aria-label=".form-select-lg example">
                            <option value="">--</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}" @selected($departamento->id == $funcionario->id_departamento)>{{ $departamento->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="id_cargo" class="form-label fw-bold">Cargo</label>
                        {{-- <input type="text" name="cargo" class="form-select form-select-lg bg-light" value=""
                            required> --}}
                        <select name="id_cargo" id="id_cargo" class="form-select form-select-lg"
                            aria-label=".form-select-lg example">
                            <option value="">--</option>
                            @foreach ($cargos as $cargo)
                                <option value="{{ $cargo->id }}" @selected($cargo->id == $funcionario->id_cargo)>{{ $cargo->descricao }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="salario" class="form-label fw-bold">Salário</label>
                        <input type="text" name="salario" value="{{ $funcionario->salario }}" class="form-control form-control-lg bg-light" value=""
                            placeholder="R$" required>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2">
                <img src="/storage/funcionarios/{{ $funcionario->foto }}" class="img-thumbnail" alt="{{ $funcionario->nome }}">
            </div>

            <div class="col-md-10">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input class="form-control" type="file" id="formFile" name="foto">
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary btn-lg">Alterar</button>
                <a href="{{ route('funcionarios.index') }}" class="btn btn-danger btn-lg">Cancelar</a>
                {{-- <button type="button" class="btn btn-danger">Cancelar</button> --}}
            </div>
        </form>
    </div>
@endsection
