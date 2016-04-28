@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Account Info</div>

                <div class="panel-body">
                    <h4>Name: {{ Auth::user()->name }}</h4>
                    <h4>Email: {{ Auth::user()->email }}</h4>
                    <img src="{{Auth::user()->avatar}}" height="200" width="200"/>

                    {{--<h3>My Players</h3>--}}
                    {{--@foreach ($players as $player)--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6 ">--}}
                                {{--<a href='/players/{{ $player->id }}'><h2 class="panel-title">{{ $player->stage_name }}</h2></a>--}}
                                {{--<div class="panel panel-default ">--}}


                                    {{--<ul class="list-group">--}}
                                        {{--<li class=" list-group-item">--}}
                                            {{--Instrument: {{ $player->instrument }}--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}

                    <!-- Trigger the modal with a button -->
                    {{--<button type="button" class="btn btn-primary col-md-offset-9" data-toggle="modal" data-target="#">Edit User Info</button>--}}
                    {{--<button type="button" class="btn btn-primary col-md-offset-9" data-toggle="modal" data-target="#myModal">Create Player</button>--}}

                    {{--<!-- Modal -->--}}
                    {{--<div id="myModal" class="modal fade" role="dialog">--}}
                        {{--<div class="modal-dialog">--}}

                            {{--<!-- Modal content-->--}}
                            {{--<div class="modal-content">--}}
                                {{--<div class="modal-header">--}}
                                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                                    {{--<h4 class="modal-title">Player Info</h4>--}}
                                {{--</div>--}}
                                {{--<div class="modal-body">--}}
                                    {{--<form method="post" action="{{ Auth::user()->id }}/player">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="player">Stage Name:</label>--}}
                                            {{--<input type="text" name="stage_name" class="form-control" id="player">--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="age">Age:</label>--}}
                                            {{--<input type="number" class="form-control" name="age" id="age">--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="instrument">Instrument:</label>--}}
                                            {{--<input type="text" class="form-control" name="instrument" id="instrument">--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="style">Style:</label>--}}
                                            {{--<input type="text" class="form-control" name="style" id="style">--}}
                                        {{--</div>--}}
                                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<button type="submit"  class="btn-primary  col-md-offset-10">Create Player</button>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                                {{--<div class="modal-footer">--}}
                                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}




                </div>
            </div>
        </div>
    </div>
</div>


@endsection
