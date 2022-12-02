@extends('layouts.default')

@section('title', 'Cadastrar Departamento')

@section('conteudo')
    <div class="container-fluid shadow bg-white p-4">
        <h1>Cadastrar Departamento</h1>
        <form class="row g-4" method="post" action="{{ route('departamentos.store') }}">
            @csrf
            <div class="mt-5">
                <div>
                    <label for="nome" class="form-label">Descrição</label>
                    <input type="text" name="nome" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                <a href="{{ route('departamentos.index') }}" class="btn btn-danger btn-lg">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
