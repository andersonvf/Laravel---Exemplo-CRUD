@extends('layouts.app')

@section('title')
    Anderson
@endsection


<div class="container mt-5">
    <h3>Novo Cadastro de Usuário</h3>
    <hr>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" placeholder="Digite o nome">
            </div>
            <div class="form-group">
                <label for="name">E-mail:</label>
                <input type="text" class="form-control" name="email" placeholder="Digite o E-mail">
            </div>
            <div class="form-group">
                <label for="name">Data de Cadastro:</label>
                <input type="number" class="form-control" name="date" placeholder="Data de cadastro">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
</div>
