<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Article;

class ArticlesController extends Controller
{
    public function index() {

        $id = Auth::user()->getId();

        $articles = Article::where('authorId', $id)->simplePaginate(config('app.paginate'));

        return view('profile.articles.index')
            ->with('articles',  $articles);
    }

    public function create() {
        return view('profile.articles.create');
    }

    public function store(Request $request) {

        $request->validate([
            'text' => 'required'
        ]);

        $article = Article::create([
            'text' => $request->input('text'),
            'authorId' => Auth::user()->getId()
        ]);

        return redirect()
            ->route('profile.articles.index')
            ->with(['message' => 'Статтю успішно створено!', 'class' => 'alert-success']);
    }

    public function edit($id) {

        $article = Article::find($id);

        return view('profile.articles.edit')->with('article', $article);
    }

    public function update($id, Request $request) {

        $request->validate([
            'text' => 'required'
        ]);

        $article = Article::find($id);

        $article->text = $request->input('text');
        $article->save();

        return redirect()
            ->route('profile.articles.index')
            ->with(['message' => 'Статтю успішно відредаговано!', 'class' => 'alert-success']);
    }

    public function destroy($id) {

        $article = Article::find($id);
        $article->delete();

        return back();
    }
}
