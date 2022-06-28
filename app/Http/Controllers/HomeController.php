<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class HomeController extends Controller
{
    public function index() {
        $articles = Article::orderBy('created_at', 'DESC')->simplePaginate(config('app.paginate'));

        return view('home')->with('articles', $articles);
    }
}
