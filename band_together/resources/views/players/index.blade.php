@extends('layouts.app')

@section('content')



<h1>All Players</h1>

    @foreach ($players as $player)

       <a href='/players/{{ $player->id }}'><h2>{{ $player->stage_name }}</h2></a>

            <ul>
        <li>
            {{ $player->age }}
        </li>

        <li>
            {{ $player->instrument }}
        </li>

        <li>
            {{ $player->style }}
        </li>
        </ul>
    @endforeach



@endsection