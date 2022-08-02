<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

    public function create(Request $r) {
        $new_post = [
            'title' => 'Segundo Post',
            'content' => 'Conteúdo Teste para post 2',
            'author' => 'Henrique'

        ];

        $post = new Post($new_post);
        $post->save();
        dd($post);
    }


    public function read(Request $r)
    {
        $post = new Post();

        $post = $post->find(1); //TAMBÉM BUSCAR APENAS UM ESPECÍFICO

        // $posts = $post->all();
        // $posts = $post->where(1); //BUSCAR UM ESPECÍFICO NO BAnCO

        return $post;
    }

    public function all(Request $r)
    {
        $posts = Post::all();

        return $posts;

       
    }

    public function update(Request $r)
    {
        $post = Post::find(1);
        $post->title = 'Meu post atualizado';
        $post->save();
        return $post;
    }

    public function delete(Request $r)
    {
        // $post = Post::find(2);
        $post = Post::where('id', '>', 0);
        
        if ($post) {
            $post->delete();
            return $post;
        }
    }
}
