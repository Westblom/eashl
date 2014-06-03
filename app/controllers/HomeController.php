<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome() {

		return View::make('hello');
	}

	public function showStore() {

		$packs = Pack::all();
		return View::make('store',compact('packs'));
	}

	public function buyPack($id) {

		$pack = Pack::find($id);

		if(Auth::user()->coins < $pack->price){
			return "NOT ENOUGH COINS";
		}

		$i = 0;
		while($i < $pack->cards){
			Card::randNormal();
			$i++;
		}


		$newCards = Card::where('user_id', '=', Auth::id())->where('new', '=', 1)->get();
		foreach($newCards as $card){
			$card->new = 0;
			$card->save();
		}
		return View::make('store.newpack', compact('newCards', 'pack'));

	}
}
