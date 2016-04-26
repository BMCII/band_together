@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user('players')->stage_name}}</div>

                <div class="panel-body">
                    <span>Name: {{ Auth::user()->name }}</span> <br />
                    <span>Email: {{ Auth::user()->email }}</span>

                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-primary col-md-offset-9" data-toggle="modal" data-target="#">Edit User Info</button>
                    <button type="button" class="btn btn-primary col-md-offset-9" data-toggle="modal" data-target="#myModal">Create Player</button>

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
                                    <form method="post" action="players">
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
                                        <div class="form-group">
                                            <button type="submit"  class="btn-primary  col-md-offset-10">Create Player</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>


@endsection
