@extends('layouts.masterpage') {{-- We'll be using the master layout page. --}}


@section('title', 'About us') {{-- This specific section has it's own title of course and that's home --}}



@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}


    <style>
        .img-center {
           margin: 0 auto;
        }
    </style>

        <!-- Introduction Row -->
        <div class="row panel panel-default">
            <div class="col-lg-12 panel-body">
                <h1 class="page-header">About Us
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row panel panel-default">
            <div class="col-lg-12 panel-body">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Johnathan Cranz
                    <small>Cutting Boutgatsa with Laser</small>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Michael Scofield
                    <small>Second Helper of Flying Kite</small>
                </h3>
                <p>Unt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Lincoln Burrows
                    <small>Fly Collector</small>
                </h3>
                <p>Lorem ipsum dolor sit amet, ne modo bonorum voluptua has, his ei laoreet scribentur.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>C-Note
                    <small>Light Headed</small>
                </h3>
                <p>Voluptua has, his ei laoreet scribentur. nsetetur.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>T-Bag
                    <small>Psychopath</small>
                </h3>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Westmorland
                    <small>Millionaire but in Prison</small>
                </h3>
                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            </div>
        </div>


@endsection