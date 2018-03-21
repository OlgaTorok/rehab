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
    @foreach ($categories as $category)
        @if (Auth::user()->activities()->where('category_id', $category->id)->get()->count() > 0)
        <div class="row">
            <div class="col-12">
                <!-- Add the category name here - OT -->
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
                        <div class="card" style="margin-bottom: 30px; box-shadow: 2px 5px 8px #dadddf">
                            <img class="card-img-top" src="../../public/img/robot.png" alt="Card image cap" style="width: 100%" />
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
    <!--Footer-->
    <footer class="page-footer font-small pt-4 mt-4 indigo lighten-1">
        <!--Footer Links-->
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <!--First column-->
                <div class="col-md-6">
                    <h5 class="text-uppercase">National Rehabilitation Hospital</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->
                <!--Second column-->
                <div class="col-md-6">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->
            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center indigo">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> NRH </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
    <!-- Site footer -->
    <!-- <footer class="footer">
        <p>&copy; 2018, NRH</p>
    </footer> -->
</div> <!-- /container -->


@endsection
