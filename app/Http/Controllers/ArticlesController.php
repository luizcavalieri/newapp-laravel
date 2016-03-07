<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Request;


class ArticlesController extends Controller {

	public function index()
    {

        $articles = Article::latest('published_at')->published()->get(); //return all the values in asc order


        return view('articles.index', compact('articles'));

    }


    public function show($id)
    {
        $article = Article::findOrFail($id); // -->> if the article doesn't exist show nothing

        //dd($article->published_at);

        return view('articles.show', compact('article'));
    }

    public function create(){

        return view('articles.create');
    }

    public function store(CreateArticleRequest $request){    // -->>> CreateArticleRequest is the validation class found in requests folder

        $input = Request::all();

        //$input['published_at'] = Carbon::now();

        Article::create($input); // faster way to do it and safe as well as we have a rules inside of the Article class ($fillable)

        return redirect('articles');

    }

}
