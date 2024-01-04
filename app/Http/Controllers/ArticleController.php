<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //    
        public function index()
{
    $data = Article::latest()->paginate(5);
return view('articles.index', [
'articles' => $data
]);
}
public function add()
{
return view('articles.add');
}
public function create()
{
    $validator = validator(request()->all(), [
        'title' => 'required',
        'body' => 'required',
        ]);
        if($validator->fails()) {
        return back()->withErrors($validator);
        }
        $article = new Article;
        $article->title = request()->title;
        $article->body = request()->body;
        $article->save();
        return redirect('/articles');
}
public function edit($id)
{
    $article = Article::find($id);
return view('articles.edit', compact('article'));
}
public function update($id)
{    
        $article = Article::find($id);
        $article->title = request()->title;
        $article->body = request()->body;
        $article->update();
        return redirect('/articles');
}
public function delete($id)
{
$article = Article::find($id);
$article->delete();
return redirect('/articles')->with('info', 'Article deleted');
}
public function detail($id)
{
return "Controller - Article Detail - $id";
}
}
