@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <!-- <div class="col-md-11 col-md-offset-1">
                            <a href="#" class="btn btn-primary">User</a>
                            <a href="{{ route('admin.activities.index') }}" class="btn btn-primary">Activities</a>
                            <a href="{{ route('admin.steps.index') }}" class="btn btn-primary">Steps</a>
                            <a href="#" class="btn btn-primary">Categories</a>
                            <a href="#" class="btn btn-primary">Levels</a>
                            <a href="#" class="btn btn-primary">Ratings</a>
                            <a href="#" class="btn btn-primary">Emojis</a>
                        </div> -->


                    </div>
                    <h1>Welcome to National Rehabilitation Hospital</h1>
                    <p>This page can be the menu page for the admin</p>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
