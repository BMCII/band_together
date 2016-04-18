@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <div class="container">

                        <!-- Portfolio Item Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Portfolio Item
                                    <small>Item Subheading</small>
                                </h1>
                            </div>
                        </div>
                        <!-- /.row -->

                        <!-- Portfolio Item Row -->
                        <div class="row">

                            <div class="col-md-8">
                                <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                            </div>

                            <div class="col-md-4">
                                <h3>Project Description</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                <h3>Project Details</h3>
                                <ul>
                                    <li>Lorem Ipsum</li>
                                    <li>Dolor Sit Amet</li>
                                    <li>Consectetur</li>
                                    <li>Adipiscing Elit</li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.row -->

                        <!-- Related Projects Row -->
                        <div class="row">

                            <div class="col-lg-12">
                                <h3 class="page-header">Related Projects</h3>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                                </a>
                            </div>



                        </div>
                        <!-- /.row -->

                        <hr>

                        <!-- Footer -->
                        <footer>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>Copyright &copy; Your Website 2014</p>
                                </div>
                            </div>
                            <!-- /.row -->
                        </footer>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection