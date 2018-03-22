@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Add Step</h3>
                </div>

                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('admin.steps.store') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
                        </div>

                       <div class="form-group">
                            <label for="description"> Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
                        </div>

                       <div class="form-group">
                            <label for="short_descript">Short Description</label>
                            <input type="text" class="form-control" id="short_descript" name="short_descript" value="{{ old('short_descript') }}" />
                        </div>

                       <div class="form-group">
                            <label for="tip_id">Tip</label>
                            <select class="form-control" id="tip_id" name="tip_id">
                            @foreach ($tips as $tip)
                                <option value="{{ $tip->id }}" {{ (old('tip_id') == $tip->id)?"selected":"" }}>{{ $tip->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <a href="{{ route('admin.steps.index') }}" class="btn btn-default">Cancel</a>

                        <button type="submit" class="btn btn-primary pull-right">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
