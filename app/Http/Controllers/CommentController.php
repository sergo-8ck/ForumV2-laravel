<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(Request $request, Forum $forum){
      $request->validate([
        'content_body' => 'required|min:5'
      ]);
      $comment = New Comment;
      $comment->user_id = Auth::user()->id;
      $comment->content_body = $request->content_body;

      $forum->comments()->save($comment);

      return back()->withInfo('Ответ добавлен!');
    }


  public function replyComment(Request $request, Comment $comment){
    $request->validate([
      'content_body' => 'required|min:5'
    ]);
    $reply = New Comment;
    $reply->user_id = Auth::user()->id;
    $reply->content_body = $request->content_body;

    $comment->comments()->save($reply);

    return back()->withInfo('Ответ добавлен!');
  }
}
