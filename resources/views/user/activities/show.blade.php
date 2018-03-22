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
        <div class="col-md-9">
            <div class="card" style="margin-bottom: 30px; padding: 20px; box-shadow: 2px 5px 8px #dadddf">
                <!--Card image-->
                <!-- <div class="view overlay">
                    <img class="card-img-top" src="{{ url('../public/img/robot.png') }}" alt="Card image cap" style="width: 50%" />
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div> -->
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body elegant-color white-text">
                    <!--Social shares button-->
                    <a class="activator p-3 mr-2" href="#"><i class="fa fa-universal-access white-text"></i></a>
                    <a class="activator p-3 mr-2" href="#"><i class="fa fa-child white-text"></i></a>
                    <hr class="hr-light">
                    <!--Title-->
                    <h1 class="card-title">{{ $activity->title }}</h1>
                    <hr class="hr-light">
                    <!--Text-->
                    <ul class="list-group list-group-flush ">
                        <p class="card-text">{{ $activity->description }}</p>
                        <hr />
                        <p class="card-text"><b>Category: </b> {{ $activity->category_id }} </p>
                        <hr />
                        <p class="card-text"><b>Level: </b> {{ $activity->level_id }}</p>
                        <hr />
                        <p class="card-text"><b>Steps:</b>{{ $activity->step_id }}</p>
                        <hr />
                        <p class="card-text">
                            <p style="text-align: center;"><b>How did the activity go?</b></p>
                            <div class="row">
                                <div class="col-4"><a class="btn btn-info" type="button">Too easy</a></div>
                                <div class="col-4"><a class="btn btn-info" type="button">Just right</a></div>
                                <div class="col-4"><a class="btn btn-info" type="button">Too hard</a></div>
                            </div>
                        </p>
                    </ul>
                    <p class="font-small mb-4">{{ $activity->tip_id }}</p>
                    <hr class="hr-light">
                </div>  <!--/.Card content-->
            </div>  <!--/.Card -->



        </div>  <!-- End col-md-9 -->

        <div class="col-md-3 sidebar">
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
