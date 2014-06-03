<?php

class DashboardController extends BaseController{


	public function showDashboard() {

		$cards = Card::where('user_id', '=', Auth::id())->get();
		return View::make('dashboard.dashboard', compact('cards'));
	}

	public function showTeam() {

		$myCards = Card::where('user_id', '=', Auth::id())->get();
		return View::make('dashboard.team', compact('myCards'));
	}

}
