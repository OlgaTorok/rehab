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

        <div class="col-12">

            <div class="col-8">
                <div class="col-3 col-sm-6 col-md-4 col-lg-3">
                    <div class="card" style="margin-bottom: 30px; box-shadow: 2px 5px 8px #dadddf">
                        <img class="card-img-top" src="../../public/img/robot.png" alt="Card image cap" style="width: 100%" />
                        <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title">{{ $activity->title }}</h3>
                            <p class="card-text">{{ $activity->short_descript }}</p>
                            <a href="{{ URL::route('activityy') }}" class="btn btn-primary">Go</a>
                        </div>  <!-- end card-body -->
                    </div>  <!-- end col-3 -->
                </div>
            </div><!-- End col-8 -->

            <div class="col-4">
                <div class="sidebar">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Related Activities</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                            <!-- <p class="card-text">Below you can find related activities.</p> -->
                            <a href="#" class="card-link">Do the Twist</a><br />
                            <a href="#" class="card-link">Want a cracker</a><br />
                            <a href="#" class="card-link">Life's a Beach</a><br />
                        </div>
                    </div>  <!-- End card -->
                </div>  <!-- End sidebar -->
            </div>
        </div>
    </div><!-- end row -->



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
