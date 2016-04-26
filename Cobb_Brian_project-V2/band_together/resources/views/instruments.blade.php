@extends('layouts.app')

@section('content')



<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

            <!-- New Instrument Form -->
    <form action="{{ url('instrument') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}

                <!-- Instrument Name -->
        <div class="form-group">
            <label for="instrument-name" class="col-sm-3 control-label">Instrument</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="instrument-name" class="form-control">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Instrument
                </button>
            </div>
        </div>
    </form>
</div>

@if (count($instruments) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Current Instruments
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">

                <!-- Table Headings -->
                <thead>
                <th>Instrument</th>
                <th>&nbsp;</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                @foreach ($instruments as $instrument)

                    <tr>
                        <!-- Instrument Name -->
                        <td class="table-text">
                            <div>{{ $instrument->name }}</div>
                        </td>

                        <!-- Delete Button -->
                        <td>
                            <form action="{{ url($'instrument/'.$instrument->id) }}" method="POST">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>


                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
@endsection

@endsection