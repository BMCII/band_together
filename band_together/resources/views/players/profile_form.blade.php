@extends('layouts.app')

@section('content')


<h1>Your Player Profile</h1>

    @include('common.errors')

<form method="post" action="/players/{{ $player->id }}">
    <div class="form-group">
        <label for="player">Stage Name:</label>
        <input type="text" name="stage_name" class="form-control" id="player">
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age">
    </div>
    <div class="form-group">
        <label for="instrument">Instrument:</label>
        <input type="text" class="form-control" id="instrument">
    </div>
    <div class="form-group">
        <label for="style">Style:</label>
        <input type="text" class="form-control" id="style">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn-default">Add Note</button>
</form>




@endsection