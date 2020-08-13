<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|Response|View
     */
    public function index()
    {
        $articles = Article::latest()->paginate(5);

        return view('layouts.content.articles.index',compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

//        return view('layouts.content.articles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|Response|View
     */
    public function create()
    {
        return view('layouts.content.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Application|\Illuminate\Http\RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'img' => 'required',
            'active' => 'false',
            'votes' => '0',

        ]);

        Article::create($request->all());

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return Application|\Illuminate\Contracts\View\Factory|Response|View
     */
    public function show(Article $article)
    {
        return view('layouts.content.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        return view('layouts.content.articles.edit', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Article $article
     * @return \Illuminate\Http\RedirectResponse|Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'active' => 'false',

        ]);
        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Articles updates successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\RedirectResponse|Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Articles deleted successfully');
    }
}
