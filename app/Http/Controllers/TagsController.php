<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{

    public function show(Tag $tag)
    {
        $articles = $tag->articles()->latest('published_at')->published()->paginate(10);

        return view('articles.list', compact('articles'));
    }

}
