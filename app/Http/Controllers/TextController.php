<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class TextController extends Controller
{
    
    public function view($id)
    {
    	$article = Article::find($id);

    	$article->category;
    	$article->user;
    	$article->tags;

    	return view('text.index',['prueba' => $article]);
    }


}