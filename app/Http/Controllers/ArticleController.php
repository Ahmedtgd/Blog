<?php


namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
{
    
    $articles = Article::all();

    return view('article.index', [
        'articles' => DB::table('articles')->paginate(3)
    ]);




}

    public function create()
    {
        return view('article.create'); // Display the form for creating a new article
    }

    public function store(Request $request)
    {
        $ar = new Article();
        $ar->title = $request->input('title');
        $ar->body = $request->input('body');
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/article_images');
            $ar->image_url = str_replace('public/', '', $imagePath);
        }
        
        $ar->user_id = Auth::user()->id;
       

        $ar->save();
    
        return redirect()->route('articles.index');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', ['article' => $article]); // Display the specified article
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', ['article' => $article]); // Display the form for editing the specified article
    }

    public function update(Request $request, $id)
    {
        $ar = Article::findOrFail($id);
        $ar->title = $request->input('title');
        $ar->body = $request->input('body');
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/article_images');
            $ar->image_url = str_replace('public/storage', '', $imagePath);
        }
        
        $ar->save();
    
        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index'); // Redirect to the article listing after deleting
    }


    

}