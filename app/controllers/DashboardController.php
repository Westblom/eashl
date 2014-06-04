<?php

class DashboardController extends BaseController{


	public function showDashboard() {

		$cards = Card::where('user_id', '=', Auth::id())->get();
		return View::make('dashboard.dashboard', compact('cards'));
	}

	public function showTeam() {

		$myCards = Card::where('user_id', '=', Auth::id())->get();
		
		$benchPlayers = Card::where('user_id', '=', Auth::id())
					->where('slot', '=', 0)
		 			->get();
		

		//CHECK IF LEFT WING IS EQUIPPED
		$leftwing = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'LW')
						->count();
		if($leftwing){
						$leftwing = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'LW')
						->firstOrFail();
		} else {
			unset($leftwing);
		}
		
		//CHECK IF CENTER IS EQUIPPED
		$center = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'C')
						->count();
		if($center){
						$center = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'C')
						->firstOrFail();
		} else {
			unset($center);
		}
		
		//CHECK IF RIGHT WING IS EQUIPPED
		$rightwing = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'RW')
						->count();
		if($rightwing){
						$rightwing = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'RW')
						->firstOrFail();
		} else {
			unset($rightwing);
		}
		
		//CHECK IF LEFT DEFENSE IS EQUIPPED
		$leftd = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'LD')
						->count();
		if($leftd){
						$leftd = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'LD')
						->firstOrFail();
		} else {
			unset($leftd);
		}
		
		//CHECK IF RIGHT DEFENSE IS EQUIPPED
		$rightd = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'RD')
						->count();
		if($rightd){
						$rightd = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'RD')
						->firstOrFail();
		} else {
			unset($rightd);
		}

		//CHECK IF GOALTENDER IS EQUIPPED
		$goalie = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'G')
						->count();
		if($goalie){
						$goalie = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'G')
						->firstOrFail();
		} else {
			unset($goalie);
		}
		

		return View::make('dashboard.team', compact('myCards', 
											'leftwing', 'center', 'rightwing', 'leftd', 'rightd', 'goalie',
											'benchPlayers'));
	}

	public function postEquip($slot, $card_id) {


		$card = Card::find($card_id);

		if($card->user_id == Auth::id()){

			$removeCard = Card::where('user_id', '=', Auth::id())->where('slot', '=', $slot)->count();
			if($removeCard){

				$removeCard = Card::where('user_id', '=', Auth::id())->where('slot', '=', $slot)->firstOrFail();
					$removeCard->slot = 0;
				$removeCard->save();
			}
			
			$card->slot = $slot;
			$card->save();

		}
		return Redirect::route('dashboard.team');
	}

	public function newCards() {


		$newCards = Card::where('user_id', '=', Auth::id())->where('new', '=', 1)->get();
		foreach($newCards as $card){
			$card->new = 0;
			$card->save();
		}

		return View::make('dashboard.newcards', compact('newCards'));
	}
}
