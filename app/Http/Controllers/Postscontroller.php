<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;

use App\Models\Posts as PostsModel;

class Postscontroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(PostsRequest $request)
    {
        // Form データ
        $formdata = $request->all();

        $Post = PostsModel::create([
            'title'     => $formdata['title'],
            'subtitle'     => $formdata['subtitle'],
            'body'      => $formdata['body'],
        ]);

        return redirect(route('index'));
    }

}
