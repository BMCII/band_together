@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
    <h1>They Call me {{ $player->stage_name }}</h1>
    <ul class="list-group">
        <li class="list-group-item">
            Instrument: {{ $player->instrument }}
        </li>

        <li class="list-group-item">
            Style: {{ $player->style }}
        </li>

        <li class="list-group-item">
            Age: {{ $player->age }}
        </li>

    </ul>

    <h2>Stuff</h2>
                @foreach($player->notes as $note)
                    <ul class="list-group">
                        <li class="list-group-item">{{ $note->body }}
                                    <!-- Delete Button -->

                            <div class="row">
                                <div class="col-md-offset-10">
                            <td>
                                <form action="{{ url('notes/'.$note->id) }}" method="POST">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger ">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                                    </div>
                                </div>
                        </li>
                    </ul>

                    <tr>
                        <!-- Task Name -->
                        <td class="table-text">
                            <div>{{ $note->name }} </div>
                        </td>


                    </tr>
                @endforeach
            </div>
        </div>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-primary col-md-offset-9" data-toggle="modal" data-target="#myModal">Add Stuff</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Player Info</h4>
                </div>
                <div class="modal-body">
                    <h3>New Stuff</h3>

                    <form method="post" action="/players/{{ $player->id }}">
                        <textarea name="body" class="form-control"></textarea>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn-default">Add Note</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>




@endsection