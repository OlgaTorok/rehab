@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Edit Activity</h3>
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
                    <form method="POST" action="{{ route('admin.activities.update', array('activity' => $activity)) }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $activity->title) }}" />
                        </div>
                        <div class="form-group">
                            <label for="description"> Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $activity->description) }}" />
                        </div>
                        <div class="form-group">
                            <label for="short_descript">Short Description</label>
                            <input type="text" class="form-control" id="short_descript" name="short_descript" value="{{ old('short_descript', $activity->short_descript) }}" />
                        </div>
                        <!-- <div class="form-group">
                            <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                                <label>Image:</label>
                                <input type="file" name="file" id="file"> <br/>
                                <input type="submit" value="Upload" class="btn btn-default" name="submit">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                            </form>
                        </div> -->

                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <input type="text" class="form-control" id="picture" name="picture" value="{{ old('picture', $activity->picture) }}" />
                        </div>

                        <div class="form-group">
                            <label for="tip_id">Tip ID</label>
                            <input type="text" class="form-control" id="tip_id" name="tip_id" value="{{ old('tip_id', $activity->tip_id) }}" />
                        </div>
                        <div class="form-group">
                            <label for="level_id">Level ID</label>
                            <input type="text" class="form-control" id="level_id" name="level_id" value="{{ old('level_id', $activity->level_id) }}" />
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category ID</label>
                            <input type="text" class="form-control" id="category_id" name="category_id" value="{{ old('category_id', $activity->category_id) }}" />
                        </div>
                        <div class="form-group">
                            <label for="rating_id">Rating ID</label>
                            <input type="text" class="form-control" id="rating_id" name="rating_id" value="{{ old('rating_id', $activity->rating_id) }}" />
                        </div>
                        <div class="form-group">
                            <label for="emoji_id">Emoji ID</label>
                            <input type="text" class="form-control" id="emoji_id" name="emoji_id" value="{{ old('emoji_id', $activity->emoji_id) }}" />
                        </div>

                        <!-- <div class="form-group">
                            <label for="user_id">User ID</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id', $activity->user_id) }}" />
                        </div> -->

                        <a href="{{ route('admin.activities.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
