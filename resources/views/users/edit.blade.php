@extends('layouts.app')

@section('title')
    Anderson
@endsection

<div class="container mt-5">
    <h3>Alteração de dados do Usuário</h3>
    <hr>
    <form action="{{ route('users.update',['id'=>$users->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" value="{{ $users->name }}" placeholder="Digite o nome">
            </div>
            <div class="form-group">
                <label for="name">E-mail:</label>
                <input type="text" class="form-control" name="email" value="{{ $users->email}}"placeholder="Digite o E-mail">
            </div>
            <div class="form-group">
                <label for="name">Data de Cadastro:</label>
                <input type="number" class="form-control" name="date" value="{{ $users->date }}"placeholder="Digite a data">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
</div>


