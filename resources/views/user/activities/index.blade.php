@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>
</div><!--  -->

<div class="container">

    <div class="row">
        <div class="col-md-3">
            <select class="form-control">
                <option>Choose category</option>
                <option>1</option>
                <option>2</option>
            </select>
        </div>
    </div>
    @foreach ($categories as $category)
        @if (Auth::user()->activities()->where('category_id', $category->id)->get()->count() > 0)
        <div class="row">
            <div class="col-12">
                <h2 class="heading">{{ $category->cat_name}}</h2>
                <hr />
            </div>
        </div><!-- end row -->
        <div class="row">
            <div class="col-12">

                @foreach(Auth::user()->activities()->where('category_id', $category->id)->get() as $activity)
                <!-- ******************** CARDS ************************ -->
                    @if ($activity->category_id == $category->id)
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('../public/img/beach.png') }}" alt="Card image cap" style="width: 100%" />
                            <!-- <div class="content">
                                <div class="rect">2 min</div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="circle"><img src="{{ url('../public/img/face_black.svg') }}"></div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card-body" style="padding: 10px;">
                                <h3 class="card-title">{{ $activity->title }}</h3>
                                <p class="card-text">{{ $activity->short_descript }}</p>
                                <a href="{{ route('user.activities.show', $activity->id) }}" class="btn btn-primary">Go</a>
                            </div>  <!-- end card-body -->
                        </div>  <!-- end col-3 -->
                    </div>
                    @endif
                @endforeach
            </div><!-- End col-8 -->
        </div><!-- end row -->
        @endif
    @endforeach

    <hr>
    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; 2018, NRH</p>
    </footer>
</div> <!-- /container -->


@endsection
