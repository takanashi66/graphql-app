<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;

use App\Models\Posts as PostsModel;

class Postscontroller extends Controller
{
    public function index()
    {
        $posts = PostsModel::orderBy('id', 'asc')->paginate(200);
        return view('index', ['posts' => $posts]);
    }


    public function store(PostsRequest $request)
    {
        // Form データ
        $formdata = $request->all();

        $posts = PostsModel::create([
            'title'     => $formdata['title'],
            'subtitle'     => $formdata['subtitle'],
            'body'      => $formdata['body'],
        ]);

        return redirect(route('index'));
    }

}
