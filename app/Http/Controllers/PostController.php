<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    // Liste de tous posts (publication)
    public function all() {

        return view('news',[
            'posts' => Post::All()->sortBy('date_post'),
            ]);

    }

    // liste de tous les postes (affiche sous forme de formulaire modifiable)
    public function postAdmin() {
        return view('admin.post-admin',[
            'posts' => Post::all()
        ]);
    }

    // Récupère les informations modifiées et les persiste
    public function storePostAdminUpdate(PostRequest $request) {
        $post = Post::findOrFail($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->date_post = $request->date_post;

        $post->save();

        return redirect('admin/post')->with('success', 'The post is modified!');
    }

    // Récupère les publications ajoutées et les persiste
    public function storePost(PostRequest $request) {

        $post = New Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->date_post = $request->date_post;


        $chemin = Storage::putFile('public/images', $request->image);

        $post->image_path = basename($chemin);

        $post->save();

        return redirect('admin/post')->with('success', 'This post has been added');
    }

    // supprime la publication par id
    public function postAdminDestroy($id) {
        Post::destroy($id);

        return redirect('admin/post')->with('destroy', 'This post is destroyed');
    }
}
