@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| View Listing') {{-- Sending this page's title to the master layout for the title --}}


@section('additional_scripts')


@endsection


@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}

<style>

  .bottom-align-text-parent {
      position: relative;
  }

  .bottom-align-text {
    position: absolute;
    bottom: 0;
    right: 0;
  }

.ellipsis {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
</style>


<div class="panel panel-default" style="margin-top: 25px; margin-bottom: 25px">


  <div class="cont-wrapper" style="margin: 10px;">



    <div class="row">
      <div class="col-xs-6">
        <p>Viewing listings...</p>
        <p>Found <span style="font-weight: bold">{{ $listings->count() }}</span> results.</p>
      </div>
      <div class="col-xs-6 text-right">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Sort
          <span class="caret"></span></button>
          <ul class="dropdown-menu pull-right">
            <li><a href="#">Time: Newly Created</a></li>
            <li><a href="#">Price: Lowest First</a></li>
            <li><a href="#">Price: Highest First</a></li>
          </ul>
        </div>
      </div>
      <hr />

      @foreach($listings as $listing)
      <div class="row">
        <div class="col-xs-3 text-center">
          <img src="http://placehold.it/200x200">
        </div>
        <div class="col-xs-9">
          <h4><a href="{{ URL::route('listings.show',$listing->id) }}">@if($listing->featured)<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #FFBF00; font-size: 25px"></span>@endif{{ $listing->headline }}</a></h4>
          <p>{{ $listing->condition }}</p>
          <p style=""><span style="font-size: 155%">Price: <span style="font-weight: bold">{{ $listing->askingprice }}&euro;</span></span>&emsp;Country: {{ $listing->country }}</p>
          <p class="ellipsis">{{ $listing->description }}</p>
        </div>
      </div>
      <hr />
      @endforeach

    </div>
  </div>


@endsection