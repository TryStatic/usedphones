@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| View Listing') {{-- Sending this page's title to the master layout for the title --}}


@section('additional_scripts')



@endsection


@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}

<style type="text/css">
.glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}

p {
  word-wrap: break-word;
}

.ellipsis {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

</style>


<div class="container panel panel-default" style="padding: 10px">
    <div class="well well-sm">
        <strong>There are total {{ $listings->count() }} results.</strong>

    </div>

    <div id="products" class="row list-group">
    @foreach($listings as $listing)
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        @if($listing->featured)
                            <span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #FFBF00; font-size: 15px"></span>
                        @endif
                        {{ $listing->headline }}</h4>
                    <p class="group inner list-group-item-text ellipsis">
                       {{ $listing->description }}</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                Price: <span style="font-weight: bold">{{ $listing->askingprice }}</span>&euro; Country: {{ $listing->country }}</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-primary" href="{{ URL::route('listings.show',$listing->id) }}">View Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>


@endsection