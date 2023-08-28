<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $articleId)
    {
        // Validate the input
        $request->validate([
            'body' => 'required|string',
        ]);
    
        // Create a new comment
        $comment = new Comment();
        $comment->comment = $request->input('body');
        $comment->article_id = $articleId; // Associate the comment with the specific article
        $comment->user_id = Auth::user()->id; // Associate the comment with the logged-in user
        $comment->save();
    
        // Redirect back to the article's show page
        return redirect()->route('articles.show', ['article' => $articleId]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($articleId, $commentId)
    {
        // Find the comment and delete it
        $comment = Comment::findOrFail($commentId);
        $comment->delete();

        // Redirect back to the article's show page
        return redirect()->route('articles.show', ['article' => $articleId]);
    }
}

