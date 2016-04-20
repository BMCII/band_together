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
                            <div class="col-lg-9">
                                <h1 class="page-header">Band Together
                                    <small>Bringing Musicians Together </small>
                                </h1>
                            </div>
                        </div>
                        <!-- /.row -->

                        <!-- Portfolio Item Row -->
                        <div class="row">

                            <div class="col-md-8">
                                <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                            </div>


                        </div>
                        <!-- /.row -->

                        <!-- Related Projects Row -->
                        <div class="row">

                            <div class="col-lg-10">
                                <h3 class="page-header">Featured Players</h3>
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
