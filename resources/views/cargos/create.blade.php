@extends('layouts.default')

@section('title', 'Cadastrar Cargos')

@section('conteudo')
    <div class="container-fluid shadow bg-white p-4">
        <h1 class="mb-5">Cadastrar Cargo</h1>
        <form class="row g-4" method="post" action="{{ route('cargos.store') }}">
            @csrf
            <div class="mt-5">
                <div>
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" name="descricao" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                <a href="{{ route('cargos.index') }}" class="btn btn-danger btn-lg col-md-2 m-2">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
