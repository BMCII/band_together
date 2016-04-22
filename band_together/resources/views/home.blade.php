@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Stage Name</div>

                <div class="panel-body">
                    <span>Name: {{ Auth::user()->name }}</span> <br />
                    <span>Email: {{ Auth::user()->email }}</span>
                    <a class="btn-primary">Edit Account</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
