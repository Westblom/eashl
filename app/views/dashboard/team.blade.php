@extends('layouts.main')

@section('content')

<h1>My Team</h1>
<div class="row">
<div class="col-md-6 col-md-offset-3 formation">
	
	
		<div class="col-md-4 text-center formation-player player-lw">
			
				@if(isset($leftwing))
					<h4>{{$leftwing->L}}</h4>
					<h5>{{$leftwing->player->alias}}</h5>
				@else
					<h4>??</h4>
					<h5>Left Wing</h5>
				@endif
			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#leftwing">
	 	 		Switch player
			</button>
		</div>
	
	

		<div class="col-md-4 text-center formation-player player-c">
				@if(isset($center))
					<h4>{{$center->C}}</h4>
					<h5>{{$center->player->alias}}</h5>
				@else
					<h4>??</h4>
					<h5>Center</h5>
				@endif
			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#center">
	 	 		Switch player
			</button>
		</div>

	
	
	
		<div class="col-md-4 text-center formation-player player-rw">
				@if(isset($rightwing))
					<h4>{{$rightwing->R}}</h4>
					<h5>{{$rightwing->player->alias}}</h5>
				@else
					<h4>??</h4>
					<h5>Right Wing</h5>
				@endif
			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#rightwing">
	 	 		Switch player
			</button>
		</div>


	
		<div class="col-md-4 col-md-offset-1 text-center formation-player player-d">
				@if(isset($leftd))
					<h4>{{$leftd->D}}</h4>
					<h5>{{$leftd->player->alias}}</h5>
				@else
					<h4>??</h4>
					<h5>Defender</h5>
				@endif
			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#leftd">
	 	 		Switch player
			</button>
		</div>


	
		<div class="col-md-4 col-md-offset-2 text-center formation-player player-d">
				@if(isset($rightd))
					<h4>{{$rightd->D}}</h4>
					<h5>{{$rightd->player->alias}}</h5>
				@else
					<h4>??</h4>
					<h5>Defender</h5>
				@endif
			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#rightd">
	 	 		Switch player
			</button>
		</div>
	


		<div class="col-md-4 col-md-offset-4 text-center formation-player player-g">
				@if(isset($goalie))
					<h4>{{$goalie->G}}</h4>
					<h5>{{$goalie->player->alias}}</h5>
				@else
					<h4>??</h4>
					<h5>Defender</h5>
				@endif
			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#goalie">
	 	 		Switch player
			</button>
		</div>


</div>
</div>
<h1>My Players</h1>


	<table class="table table-striped">

	<tr>
		<th>Player</th>
		<th>Center</th>
		<th>Left wing</th>
		<th>Right wing</th>
		<th>Defender</th>
		<th>Goalie</th>
		<th></th>
	</tr>
	@foreach($myCards as $card)

				<tr>
					<td>{{$card->player->alias}}</td>
					<td>{{$card->C}}</td>
					<td>{{$card->L}}</td>
					<td>{{$card->R}}</td>
					<td>{{$card->D}}</td>
					<td>{{$card->G}}</td>
					<td><div class="text-success"><b>{{Card::rollCompare($card->id)}}</b></div></td>
				</tr>
						
						
	@endforeach
	</table>
	
@stop

<!-- Left Wing Modal -->
<div class="modal fade" id="leftwing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pick left wing</h4>
      </div>
      <div class="modal-body">
		<table class="table table-striped">
			<th>Player</th>
			<th>Left wing score</th>
			<th></th>
		@foreach($benchPlayers as $LW)
				<tr>
					<td>{{$LW->player->alias}}</td>
					<td>{{$LW->L}}</td>
					<td><a href="{{URL::route('dashboard.team.equip',['LW',$LW->id])}}" class="btn btn-success"><i class="fa fa-check"></i> Select</a></td>
				</tr>	
		@endforeach
		</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Right Wing Modal -->
<div class="modal fade" id="rightwing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pick right wing</h4>
      </div>
      <div class="modal-body">
		<table class="table table-striped">
			<th>Player</th>
			<th>Right wing score</th>
			<th></th>
		@foreach($benchPlayers as $RW)
				<tr>
					<td>{{$RW->player->alias}}</td>
					<td>{{$RW->R}}</td>
					<td><a href="{{URL::route('dashboard.team.equip',['RW',$RW->id])}}" class="btn btn-success"><i class="fa fa-check"></i> Select</a></td>
				</tr>	
		@endforeach
		</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Center Modal -->
<div class="modal fade" id="center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pick left wing</h4>
      </div>
      <div class="modal-body">
		<table class="table table-striped">
			<th>Player</th>
			<th>Left wing score</th>
			<th></th>
		@foreach($benchPlayers as $C)
				<tr>
					<td>{{$C->player->alias}}</td>
					<td>{{$C->C}}</td>
					<td><a href="{{URL::route('dashboard.team.equip',['C',$C->id])}}" class="btn btn-success"><i class="fa fa-check"></i> Select</a></td>
				</tr>	
		@endforeach
		</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Left D Modal -->
<div class="modal fade" id="leftd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pick left wing</h4>
      </div>
      <div class="modal-body">
		<table class="table table-striped">
			<th>Player</th>
			<th>Left wing score</th>
			<th></th>
		@foreach($benchPlayers as $LD)
				<tr>
					<td>{{$LD->player->alias}}</td>
					<td>{{$LD->D}}</td>
					<td><a href="{{URL::route('dashboard.team.equip',['LD',$LD->id])}}" class="btn btn-success"><i class="fa fa-check"></i> Select</a></td>
				</tr>	
		@endforeach
		</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Right defender Modal -->
<div class="modal fade" id="rightd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pick left wing</h4>
      </div>
      <div class="modal-body">
		<table class="table table-striped">
			<th>Player</th>
			<th>Left wing score</th>
			<th></th>
		@foreach($benchPlayers as $RD)
				<tr>
					<td>{{$RD->player->alias}}</td>
					<td>{{$RD->D}}</td>
					<td><a href="{{URL::route('dashboard.team.equip',['RD',$RD->id])}}" class="btn btn-success"><i class="fa fa-check"></i> Select</a></td>
				</tr>	
		@endforeach
		</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Goalie	 Modal -->
<div class="modal fade" id="goalie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pick left wing</h4>
      </div>
      <div class="modal-body">
		<table class="table table-striped">
			<th>Player</th>
			<th>Goaltender score</th>
			<th></th>
		@foreach($benchPlayers as $G)
				<tr>
					<td>{{$G->player->alias}}</td>
					<td>{{$G->G}}</td>
					<td><a href="{{URL::route('dashboard.team.equip',['G',$G->id])}}" class="btn btn-success"><i class="fa fa-check"></i> Select</a></td>
				</tr>	
		@endforeach
		</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




