@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Edit Activities for User: {{ $user->name }}</h3>
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
                    <form method="POST" action="{{ route('admin.users.activities_store', $user->id) }}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" id="title" name="title" value="{{ $activity[0]->title }}" />
                          </div>

                       <div class="form-group">
                            <label for="description"> Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $activity[0]->description }}" />
                        </div>

                       <div class="form-group">
                            <label for="short_descript">Short Description</label>
                            <input type="text" class="form-control" id="short_descript" name="short_descript" value="{{ $activity[0]-> short_descript }}" />
                        </div>

                       <div class="form-group">
                            <label for="tip_id">Tip</label>
                            <input type="text" class="form-control" id="tip_id" name="tip_id" value="{{ $activity[0]->tip_id }}" />
                        </div>

                        <div class="form-group">
                           <label for="level_id">Level </label>
                           <input type="text" class="form-control" id="level_id" name="level_id" value="{{  $activity[0]->level_id }}" />
                       </div>

                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $activity[0]->category_id }}" />
                        </div>

                       <div class="form-group">
                            <label for="rating_id">Rating</label>
                            <input type="text" class="form-control" id="rating_id" name="rating_id" value="{{ $activity[0]->rating_id }}" />
                        </div>

                        <div class="form-group">
                            <label for="emoji_id">Emoji Id</label>
                            <input type="text" class="form-control" id="emoji_id" name="emoji_id" value="{{ $activity[0]->emoji_id }}" />
                        </div>

                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
