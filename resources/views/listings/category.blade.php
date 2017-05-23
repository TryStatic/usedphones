@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| Select a Category') {{-- Sending this page's title to the master layout for the title --}}


@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}

<style>
	img.resize{
	    width: 350px; /* you can use % */
	    height: auto;
	}
</style>

<div class="row panel panel-default text-center" style="margin-top: 25px; margin-bottom: 25px">
	<h1>Please Select a Category</h1>
	<hr />
	<div class="col-md-3">
		<a style="display:block" href="{{ url()->current() }}/iphone">
			<div class="thumbnail">
				<div class="caption">
					<h4>iPhone</h4>
				</div>
				<img class="resize" src="https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/plus/iphone7-plus-black-select-2016?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1472430090682" alt="Iphone Image">
			</div>
		</a>
	</div>
    <div class="col-md-3">
		<a style="display:block" href="{{ url()->current() }}/smartphone">
			<div class="thumbnail">
				<div class="caption">
					<h4>Smartphone</h4>
				</div>
				<img class="resize" src="http://www.samsung.com/us/business/discover/galaxy-s8/assets/images/options/S8+_silver.png" alt="Smartphone Image">
			</div>
		</a>
    </div>
    <div class="col-md-3">
		<a style="display:block" href="{{ url()->current() }}/ipad">
			<div class="thumbnail">
				<div class="caption">
					<h4>iPad</h4>
				</div>
				<img class="resize" src="https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/pa/ipad/cell/ipad-cell-select-spacegray-201703_GEO_US?wid=470&hei=556&fmt=png-alpha&qlt=95&.v=1489697053214" alt="Ipad Image">
			</div>
		</a>
    </div>
    <div class="col-md-3">
		<a style="display:block" href="{{ url()->current() }}/tablet">
			<div class="thumbnail">
				<div class="caption">
					<h4>Tablet</h4>
				</div>
				<img class="resize" src="http://images.samsung.com/is/image/samsung/p5/au/tablets/galaxy-tab-s2.png?$ORIGIN_PNG$" alt="Tablet Image">
			</div>
		</a>
    </div>
</div>

@endsection