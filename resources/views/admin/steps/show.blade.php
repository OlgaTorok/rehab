@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    View Steps
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>

                            <tr>
                                <td>Title</td>
                                <td>{{ $step->title }}</td>
                            </tr>

                            <tr>
                                <td>Description</td>
                                <td>{{ $step->description }}</td>
                            </tr>

                            <tr>
                                <!-- Here we add the code for the tip description -->
                                <td>Tip ID</td>
                                <td>{{ $step->tip_id }}</td>
                            </tr>

                            <!-- <tr>
                                <td>Picture</td>
                                <td>{{ $step->picture }}</td>
                            </tr> -->
                        </tbody>
                    </table>

                    <a href="{{ route('admin.steps.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.steps.edit', array('step' => $step)) }}"
                       class="btn btn-warning">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('admin.steps.destroy', array('step' => $step )) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="form-control btn btn-danger">Delete</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection