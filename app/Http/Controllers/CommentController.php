<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = auth()->user()->id;
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully.');
    }



    // public function showComments()
    // {
    //     $comments = Comment::all();
    //     return view('start_pages/size_converter', compact('comments'));
    // }

    // public function show($id)
    // {
    //     $comment = Comment::findOrFail($id);

    //     return view('comments.show', compact('comment'));
    // }



}
