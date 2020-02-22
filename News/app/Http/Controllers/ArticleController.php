<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Category;
use App\User;
use App\Favorite;
use App\Visit;
use App\Comment;

class ArticleController extends Controller  
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::orderBy ('timestamps', 'DESC')->paginate(10);
        return view('website.article.index', [
            'article' => $articles,
            'categories', $categories,
            'user', $user,
            'comments', $comments

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('redactor.article.create',
        [
            'categories' => Category::all(),
            'article' => New Article
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request,
        [
            'title' => 'required', 
            'excerpt' => 'required',
            'content' => 'required'
        ]);
        
        $article = New Article;
        $article->title = $request->get('title');
        $article->excertp = $request->get('excerpt');
        $article->content = $request->get('content');
        $article->save();

        if ($request->has('categories')){
            $article->categories()->attach($request->get('categories'));
        }
        return redirect('article/' . $article->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   //logued???
        $article = Article :: findOrFail($id);
        $favorites = Favorite :: where ('article_id', $id);
        $comments = Comment :: where ('article_id', $id);
        $visits = Visit :: where ('article_id', $id);
        return view('website.article.show', [
            'article' => $article,
            'user' => $logued,
            'favorites' => $favorites,
            'comments' => $comments,
            'visits' => $visits

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('redactor.article.show', [
            'categories' => Category::all(),
            'article' => Article::FindOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $this->$validate ($request,
        [
            'title' => 'required', 
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $article = Article::find($id);
        $article -> save();
        $article->update($request->all());

        return redirect('article/' . $article->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article :: findOrFail($id);
        $article->delete();

        return redirect('/article');
    }
}
