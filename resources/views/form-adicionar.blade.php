@extends('principal')

@section('conteudo-principal')

<h2>Cadastrar</h2>

<form method="post" action="{{url('/posts/adicionar')}}" >

    @csrf

    <div class="form-group">
        <label for="titulo">heroe</label>
        <input id="titulo" class="form-control" name="titulo" type="text">
    </div>

    <div class="form-group">
        <label for="texto">Descrição</label>
        <textarea id="texto" class="form-control" rows="3" name="texto">
        </textarea>
    </div>

    <button class="btn btn-success" type="submit">Cadastrar</button>

</form>

@endsection
