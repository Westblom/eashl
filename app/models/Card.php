<?php

class Card extends \Eloquent {
	protected $fillable = [];

	public function player(){

		return $this->belongsTo('Player');
	}

	public static function randNormal(){

		$player = Player::orderBy(DB::raw('RAND()'))->firstOrFail();
		$card = new Card;
			$card->user_id = Auth::id();
			$card->player_id = $player->id;
			$card->C = rand(0,9) + $player->C;
			$card->L = rand(0,9) + $player->L;
			$card->R = rand(0,9) + $player->R;
			$card->D = rand(0,9) + $player->D;
			$card->G = rand(0,9) + $player->G;
			$card->new = 1;
		$card->save();
	}
}

