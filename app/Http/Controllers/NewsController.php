<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class NewsController extends Controller
{	

    function allnews() {

        //per crerare tot. articoli per pag
        $notizie = Post::where('published', true)->paginate(3);
        
        return view('notizie', ['notizie' => $notizie]);

    }

    function showform(){

    	return view('form');

    }

    function aggiungi(Request $req){

		$notizia = new Post();

		$notizia->title = $req->input('title');

		$notizia->description = $req->input('description');

		$notizia->save();

		return redirect()->route('thankyou')->with('status', 'success');
		
	}

    function shownotizia($id){

    	$notizia = Post::find($id);

    	return view('notizia', ['notizia' => $notizia]);
	}

	function toapprove(){

		$notizie = Post::where('published', false)->get();

		return view('toapprove', ['notizie'=>$notizie]);

	}

	function approve($id){

		$notizia = Post::find($id);

		$notizia->published = true;

		$notizia->save();

		return redirect()->route('toapprove');
	}

	function delete($id){

		$notizia = Post::find($id);

		$notizia->delete();

		return redirect()->route('toapprove');


	}




}

