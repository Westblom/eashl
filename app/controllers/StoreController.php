<?php

Class StoreController extends BaseController{

	public function showStore() {

		$packs = Pack::all();
		return View::make('store',compact('packs'));
	}

	public function buyPack($id) {

		$pack = Pack::find($id);

		if(Auth::user()->coins < $pack->price){
			return "NOT ENOUGH COINS";
		}

		$user = User::find(Auth::id());
			$user->coins = $user->coins - $pack->price;
		$user->save();


		$i = 0;
		while($i < $pack->rares){
			Card::randRare();
			$i++;
		}
		
		while($i < $pack->cards){
			Card::randValue();
			$i++;
		}

		return Redirect::route('dashboard.newcards');

	}
}