@extends('layouts.app')

@section('content')

    <h1>{{ $player->stage_name }}</h1>
    <ul>
        <li>
            {{ $player->instrument }}
        </li>

        <li>
            {{ $player->style }}
        </li>

        <li>
            {{ $player->age }}
        </li>
        <li>
            <ul>
                @foreach($player->notes as $note)
                    <li>
                        {{ $note->body }}
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>

@endsection