@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    View Tip
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>

                            <tr>
                                <td>Name</td>
                                <td>{{ $tip->name }}</td>
                            </tr>

                            <tr>
                                <td>Description</td>
                                <td>{{ $tip->description }}</td>
                            </tr>

                        </tbody>
                    </table>

                    <a href="{{ route('admin.tips.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.tips.edit', array('tip' => $tip)) }}"
                       class="btn btn-warning">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('admin.tips.destroy', array('tip' => $tip )) }}">
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
