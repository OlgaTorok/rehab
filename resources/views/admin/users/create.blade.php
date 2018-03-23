@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Add Users</h3>
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
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">

                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" />
                        </div>
                        <!-- Change boolean to string true/false or yes/no -->
                        <div class="form-group">
                            <label for="is_admin">Admin (True is 1, False is 0)</label>
                            <input type="text" class="form-control" id="is_admin" name="is_admin" value="{{ old('is_admin') }}" />
                        </div>

                        <div class="form-group">
                            <label for="consent">Consent (True is 1, False is 0)</label>
                            <input type="text" class="form-control" id="consent" name="consent" value="{{ old('consent') }}" />
                        </div>

                      <!--  <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" value="{{ old('password') }}" />
                        </div> -->

                        <a href="{{ route('admin.users.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>
                    
                    <h3>Activity</h3>
                    @if (count($user->activities) == 0)
                    <p>There are no Activities for this User</p>
                    @else
                    <table class="table">
                        <tbody>
                        @foreach ($user->activities as $activity)
                            <tr>
                                <td>{{ $user->title }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @endif
                    <a href="{{ route('admin.users.activities_create', $user->id) }}" class="btn btn-primary">Edit Activities</a>


                </div>  <!-- panel-body -->


            </div>  <!-- panel -->
        </div>  <!-- col-md-8 col-md-offset-2 -->
    </div>  <!-- row -->
</div>  <!-- container -->
@endsection
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
