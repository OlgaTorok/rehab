@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message')}} </p>
            @endif

            <div class="col-md-6karr">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Tips</h3>
                    </div>

                    <div class="panel-body">
                        @if (count($tips) === 0)
                            <p>There are no Tips!</p>
                        @else
                        <table class = "table table-hover table-responsive">
                            <thead>
                                <th>Tips Name</th>
                                <th>Tips Description</th>
                            </thead>

                            <tbody>
                                @foreach ($tips as $tip)
                                    <tr>
                                        <td>{{ $tip->name }}</td>
                                        <td>{{ $tip->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.tips.edit', array('tip' => $tip)) }}"
                                                   class="btn btn-primary">Edit</a>
                                            <form style="display:inline-block" method="POST" action="{{ route('admin.tips.destroy', array('tip' => $tip)) }}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="form-control btn btn-danger">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                        <hr />

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Add new Tip</h3>
                    </div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('admin.tips.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
                            </div>

                            <a href="{{ route('admin.tips.index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
