<?php

use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// create update
Route::get('/', function () {

    $post = Post::find(2);

    /* On Parent */

    // create child
    // $comment1 = new Comment;
    // $comment->name = 'comment1';

    // update child
    // $comment = Comment::find(1);

    //1
    // $post->comments()->save($comment);

    //2
    // $post->comments()->create([   (or) createMany([ [], [] ])
    //     'name' => 'comment2'
    // ]);

    /* On Child */

    $comment = new Comment;
    $comment->name = '12';
    $comment->post()->associate($post); // post_id => $post->id
    $comment->save();

    // $comment->save();
    // dissociate
    // $comment = Comment::find(6);
    // $comment->post()->dissociate(9);
    // $comment->save(); **
    return "HELLO";
});

// read
Route::get('/posts', function () {

    $post = Post::find(2); // collection
    dd($post->comments()->where('id', '>', 3)->get());

    $comment = Comment::find(1);
    dd($comment->post); // only get one
});

// Collection => to {} from []

// delete
