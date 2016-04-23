@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Stage Name</div>

                <div class="panel-body">
                    <span>Name: {{ Auth::user()->name }}</span> <br />
                    <span>Email: {{ Auth::user()->email }}</span>

                    <form method="post" >
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
                        <button type="submit" href="{{ url('/players/profile_form') }}" class="btn-primary  col-md-offset-10">Create Player</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
