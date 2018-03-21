@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Activity: {{ $activity->title }}
                </div>
                <div class="panel-body">


                    <table class="table table-hover table-responsive">
                        <tbody>
                            <tr>
                                <td>Title</td>
                                <td>{{ $activity->title }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $activity->description }}</td>
                            </tr>
                            <tr>
                                <td>Short Description</td>
                                <td>{{ $activity->short_descript }}</td>
                            </tr>
                            <tr>
                                <td>Picture</td>
                                <td>{{ $activity->picture }}</td>
                            </tr>
                            <tr>
                                <td>Tip ID</td>
                                <td>{{ $activity->tip_id }}</td>
                            </tr>
                            <tr>
                                <td>Level ID></td>
                                <td>{{ $activity->level_id }}</td>
                            </tr>
                            <tr>
                                <td>Category ID</td>
                                <td>{{ $activity->category_id }}</td>
                            </tr>
                            <tr>
                                <td>Rating ID</td>
                                <td>{{ $activity->rating_id }}</td>
                            </tr>
                            <tr>
                                <td>Emoji ID</td>
                                <td>{{ $activity->emoji_id }}</td>
                            </tr>
                        </tbody>
                    </table>


                    <a href="{{ route('admin.activities.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.activities.edit', array('activity' => $activity)) }}"
                       class="btn btn-primary">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('admin.activities.destroy', array('activity' => $activity)) }}">
                           <input type="hidden" name="_method" value="DELETE">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <a type="submit" class="form-control btn btn-danger">Delete</a>
                    </form>
                </div>  <!-- panel-body -->


            </div>  <!-- panel -->
        </div>  <!-- col-md-8 col-md-offset-2 -->
    </div>  <!-- row -->
</div>  <!-- container -->
@endsection
