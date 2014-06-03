<?php

class Card extends \Eloquent {
	protected $fillable = [];

	public function player(){

		return $this->belongsTo('Player');
	}

	public static function randValue(){
		$roll = rand(1,1000);

		if($roll > 950){
			return Card::randGold();
		} elseif($roll > 700){
			return Card::randSilver();
		} else {
			return Card::randBronze();
		}
	}

	public static function randRare(){
		$roll = rand(701,1000);

		if($roll > 950){
			return Card::randGold();
		} elseif($roll > 700){
			return Card::randSilver();
		} else {
			return Card::randBronze();
		}
	}

	public static function randBronze(){

		$player = Player::orderBy(DB::raw('RAND()'))->where('cardtype_id', '=', '1')->firstOrFail();
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

	public static function randSilver(){

		$player = Player::orderBy(DB::raw('RAND()'))->where('cardtype_id', '=', '2')->firstOrFail();
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

	public static function randGold(){

		$player = Player::orderBy(DB::raw('RAND()'))->where('cardtype_id', '=', '3')->firstOrFail();
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

	public static function display($id){

		$card = Card::find($id);
			echo "<div class='col-md-3'>";
		    echo "<div class='text-center cardtype-1'>";
			echo "<b style='font-size:150%'>".$card->player->alias."</b style='font-size:150%'>";
			echo "<table class='table'>";
			echo "<tr><th>Center</td> <td>".$card->C."</td></tr>";
			echo "<tr><th>Leftwing</td> <td>".$card->L."</td></tr>";
			echo "<tr><th>Rightwing</td> <td>".$card->R."</td></tr>";
			echo "<tr><th>Defender</td> <td>".$card->D."</td></tr>";
			echo "<tr><th>Goaltender</td> <td>".$card->G."</td></tr>";
			echo "</table>";
						
			echo "</div></div>";

	}
}

