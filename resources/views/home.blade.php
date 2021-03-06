@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| Home') {{-- Sending this page's title to the master layout for the title --}}



@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}

    <style>
        .custom-row1 {
            background-color: #EDF6FF;
        }

        .custom-row1 h1 {
            margin-top: 0;
            margin-botton: 0;
            line-height: 0px;
        }

        .custom-row1 p sub {
            font-style: italic;
        }

        .custom-row1 .jumbotron {
            background-color: transparent;
            margin-bottom: 0;
        }

        .custom-row2 {
            margin-top: 10px;
            background-color: #F9FCFF;
        }

        .custom-row3 {
            background-color: #EDF6FF;
        }

        .resize-logo {
            margin: 0 auto;
            max-width: 258px; 
            max-height: 274px; 
            display: block;
            width: 100%;
            height: auto;
        }

        .ellipsis {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>


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
                <h2>Featured Listings</h2>
            </div>
        </div>
        
        @foreach($featured as $feat)
            <div class="col-sm-3">
                <div class="thumbnail" >
                    <h4><span class="label label-info">{{ $feat->brand }}</span></h4>
                    <img src="http://placehold.it/650x450&text=Product B" class="img-responsive">
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <h3 class="ellipsis">@if($feat->featured)<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #FFBF00; font-size: 25px"></span>@endif{{ $feat->headline }}</h3>
                            </div>
                            <div class="col-md-6 col-xs-6 price">
                                <h3>
                                    <label>{{ $feat->askingprice }}&euro;</label></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ellipsis">{{ $feat->description }}</p>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ URL::route('listings.show',$feat->id) }}" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                        </div>

                        <p> </p>
                    </div>
                </div>
            </div>
        @endforeach

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