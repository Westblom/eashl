<?php

class DashboardController extends BaseController{


	public function showDashboard() {

		$cards = Card::where('user_id', '=', Auth::id())->get();
		return View::make('dashboard.dashboard', compact('cards'));
	}

	public function showTeam() {

		$myCards = Card::where('user_id', '=', Auth::id())->get();
		
		$LWs = Card::where('user_id', '=', Auth::id())
					->where('slot', '=', 0)
		 			->orderBy('L', 'DESC')
		 			->get();
		
		$Cs = Card::where('user_id', '=', Auth::id())
					->where('slot', '=', 0)
		 			->orderBy('C', 'DESC')
		 			->get();
		
		$RWs = Card::where('user_id', '=', Auth::id())
					->where('slot', '=', 0)
		 			->orderBy('R', 'DESC')
		 			->get();
		
		$LDs = Card::where('user_id', '=', Auth::id())
					->where('slot', '=', 0)
		 			->orderBy('D', 'DESC')
		 			->get();
		
		$RDs = Card::where('user_id', '=', Auth::id())
					->where('slot', '=', 0)
		 			->orderBy('D', 'DESC')
		 			->get();
		
		$Gs = Card::where('user_id', '=', Auth::id())
					->where('slot', '=', 0)
		 			->orderBy('G', 'DESC')
		 			->get();



		$leftwing = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'LW')
						->firstOrFail();
		
		$center = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'C')
						->firstOrFail();
		
		$rightwing = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'RW')
						->firstOrFail();
		
		$leftd = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'LD')
						->firstOrFail();
		
		$rightd = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'RD')
						->firstOrFail();

		$goalie = Card::where('user_id', '=', Auth::id())
						->where('slot', '=', 'G')
						->firstOrFail();
		
		

		return View::make('dashboard.team', compact('myCards', 
											'leftwing', 'center', 'rightwing', 'leftd', 'rightd', 'goalie',
											'LWs', 'Cs', 'RWs', 'LDs', 'RDs', 'Gs'));
	}

	public function postEquip($slot, $card_id) {


		$card = Card::find($card_id);

		if($card->user_id == Auth::id()){

			$removeCard = Card::where('user_id', '=', Auth::id())->where('slot', '=', $slot)->firstOrFail();
				$removeCard->slot = 0;
			$removeCard->save();

			$card->slot = $slot;
			$card->save();

		}
		return Redirect::route('dashboard.team');
	}
}
