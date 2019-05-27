@extends('principal')

@section('conteudo-principal')


<div class="container">
<h2>Editar </h2>

<form method="post" action="{{url('/posts/editar')}}">


    @csrf

    <input type="hidden" name="id" value="{{$post->id}}">

    <div class="form-group">
        <label for="titulo">Heroe</label>
    <input id="titulo" class="form-control" name="titulo" type="text"
     value="{{$post->titulo}}">
    </div>

    <div class="form-group">
        <label for="texto">Descrição</label>
        <textarea id="texto" class="form-control" rows="3" name="texto">
        {{$post->titulo}}
        </textarea>
    </div>

    <button class="btn btn-success" type="submit">Enviar</button>
    <button href="{{url('/posts/posts.blade.php')}}" class="btn btn-success ">
        voltar</a>

</form>
</div>

@endsection
