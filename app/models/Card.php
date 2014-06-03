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

	public static function rollCompare($id){

		$card = Card::find($id);
		$compare['C'] = ($card->C - $card->player->C);
		$compare['L'] = ($card->L - $card->player->L);
		$compare['R'] = ($card->R - $card->player->R);
		$compare['D'] = ($card->D - $card->player->D);
		$compare['G'] = ($card->G - $card->player->G);
		$total = 0;
		foreach($compare as $key => $value) {
			$total = $total + $value;

		}
		return "+" . $total;
	}
}

