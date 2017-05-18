@extends('layouts.masterpage') {{-- We'll be using the master layout page. --}}


@section('title', 'Home') {{-- This specific section has it's own title of course and that's home --}}



@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}

    <script type="text/javascript">
        // Removing the Container Class as our homepage is the only one that doesn't need it.
        document.getElementById("maincointainer").classList.remove("container");

    </script>

    <!-- Row 1 -->
    <div class="container-fuid custom-row1">
        <div class="row">
            <div class="col-xs-12 jumbotron text-center">
                <img src="" class="img-responsive center">
                <img class="resize-logo" src="/images/logo.png"/>
                <h1>Usedphones</h1>
                <p>The best marketplace for gently used mobile tech <sub>and more...</sub></p>
            </div>
        </div>
    </div>


    <!-- Row 2 -->
    <div class="container-fluid custom-row2 text-center">

        <div cass="row">
            <div class="col-xs-12">
                <h2>Featured Pieces</h2>
            </div>
        </div>
        <div class="row">
            <!-- Listing A -->
            <div class="col-sm-3">
                <div class="thumbnail" >
                    <h4><span class="label label-info">BRAND</span></h4>
                    <img src="http://placehold.it/650x450&text=Product A" class="img-responsive">
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <h3>Listing Title</h3>
                            </div>
                            <div class="col-md-6 col-xs-6 price">
                                <h3>
                                    <label>xxx,xx&euro;</label></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Product Description</p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                        </div>

                        <p> </p>
                    </div>
                </div>
            </div>

            <!-- Listing B -->
            <div class="col-sm-3">
                <div class="thumbnail" >
                    <h4><span class="label label-info">BRAND</span></h4>
                    <img src="http://placehold.it/650x450&text=Product B" class="img-responsive">
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <h3>Listing Title</h3>
                            </div>
                            <div class="col-md-6 col-xs-6 price">
                                <h3>
                                    <label>xxx,xx&euro;</label></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Product Description</p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                        </div>

                        <p> </p>
                    </div>
                </div>
            </div>

            <!-- Listing C -->
            <div class="col-sm-3">
                <div class="thumbnail" >
                    <h4><span class="label label-info">BRAND</span></h4>
                    <img src="http://placehold.it/650x450&text=Product C" class="img-responsive">
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <h3>Listing Title</h3>
                            </div>
                            <div class="col-md-6 col-xs-6 price">
                                <h3>
                                    <label>xxx,xx&euro;</label></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Product Description</p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                        </div>

                        <p> </p>
                    </div>
                </div>
            </div>

            <!-- Listing D -->
            <div class="col-sm-3">
                <div class="thumbnail" >
                    <h4><span class="label label-info">BRAND</span></h4>
                    <img src="http://placehold.it/650x450&text=Product D" class="img-responsive">
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <h3>Listing Title</h3>
                            </div>
                            <div class="col-md-6 col-xs-6 price">
                                <h3>
                                    <label>xxx,xx&euro;</label></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Product Description</p>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                        </div>

                        <p> </p>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Row 3 -->
    <div class="container-fuid custom-row3 text-center">
        <div class="row">
            <div class="row">
                IMPLEMENT QUEUE HERE
            </div>
        </div>
    </div>

    </div>



@endsection