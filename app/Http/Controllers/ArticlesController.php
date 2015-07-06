<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Http\Requests;
use App\Http\Requests\ArticlesRequest;
use App\Tag;
use Illuminate\Support\Facades\Auth;

/**
 * Class ArticlesController
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function Index()
    {
        $articles = Articles::latest('published_at')->published()->paginate(10);

        return view('articles.list', compact('articles'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.create', compact('tags'));
    }

    /**
     * @param ArticlesRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticlesRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        $this->syncTags($article, $request->has('tag_list') ? $request->input('tag_list') : []);

        flash()->overlay("You're added new article.", "Good Job!");

        return redirect('articles');
    }

    /**
     * @param Articles $article
     * @return \Illuminate\View\View
     */
    public function show(Articles $article)
    {
        return view('articles.detail', compact('article'));
    }

    /**
     * @param Articles $article
     * @return \Illuminate\View\View
     */
    public function edit(Articles $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
    }

    /**
     * @param Articles $article
     * @param ArticlesRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Articles $article, ArticlesRequest $request)
    {
        $article->update($request->all());

        $this->syncTags($article, $request->has('tag_list') ? $request->input('tag_list') : []);

        flash()->success("You're updated this article");

        return redirect()->back();
    }

    /**
     * @param Articles $article
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Articles $article)
    {
        $article->delete();

        return redirect('articles');
    }

    /**
     * @param Articles $article
     * @param array $tags
     */
    function syncTags($article, array $tags)
    {
        $article->tags()->sync($tags);
    }

}
