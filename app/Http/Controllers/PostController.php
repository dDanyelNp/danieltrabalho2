<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar a classe simples de acesso ao BD
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    //

    public function posts()
    {

        $dados = Post::all();

        return view('posts')->with('posts', $dados);
    }

    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar()
    {
        return view('form-adicionar');
    }

    /**
     * Método que vai adicionar um post no BD
     */
    public function adicionar(Request $request)
    {
        //Pegando os dados dod formulario que vieram na requisicao
        $titulo = $request->input('titulo');
        $texto = $request->input('texto');

        //DB::insert('INSERT INTO posts (titulo, texto) VALUES (?, ?)', [$titulo, $texto]);

        //$post = new Post();
       // $post->titulo = $request->titulo;
        //$post->texto = $request->texto;

       // $post->save();

        //Atribuição em massa

        Post::create($request->input());

        return redirect()->action('PostController@posts');

    }

    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id

        Post::destroy($id);
        return redirect()->action('PostController@posts');
    }

    public function form_editar($id)
    {
       //buscar o post no bd pelo id
       $post = Post::find($id);

      //chamando a view e passando o dado do post
       return view('form-editar')->with('post',$post);


    }

    public function editar(Request $request)
    {

        //$post = Post::find($request->id);
        //$post->titulo = $request->titulo;
        //$post->texto = $request->texto;
       // $post->save();


        //via atribuição em massa

        Post::find($request->id)->update($request->input());

        return redirect()->action('PostController@posts');
    }

}
