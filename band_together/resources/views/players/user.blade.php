@extends('layouts.app')

@section('content')

    <h1 class="col-md-6 col-md-offset-3">All My Players</h1>

    @foreach ($players as $player)
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <a href='/players/{{ $player->id }}'><h2 class="panel-title">{{ $player->stage_name }}</h2></a>
                <div class="panel panel-default ">


                    <ul class="list-group">
                        <li class=" list-group-item">
                            Age: {{ $player->age }}
                        </li>

                        <li class="list-group-item ">
                            Instrument: {{ $player->instrument }}
                        </li>

                        <li class="list-group-item">
                            Style: {{ $player->style }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

@endsection