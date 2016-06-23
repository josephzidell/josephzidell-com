<?php

use App\Post;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$posts = Post::orderBy('created', 'asc')->get();

    return view('posts', [
    	'posts' => $posts,
    ]);
});

Route::post('/post', function(Request $request) {
	$validator = Validator::make($request->all(), [
		'title' => 'required|max:255',
	]);

	if ($validator->fails()) {
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}

	$post = new Post;
	$post->title = $request->title;
	$post->save();

	return redirect('/');
});

Route::delete('/post/{post}', function(Post $post) {
	$post->delete();

	return redirect('/');
});