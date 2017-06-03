@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| View Listing') {{-- Sending this page's title to the master layout for the title --}}


@section('additional_scripts')


@endsection


@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}

<style>

	.row {
		margin-left: 10px;
		margin-right: 10px;
	}

	h4 {
		color: #005087;
	}

	h3 {
		color: #007dd3;
		text-decoration: underline;
	}

	p {
		font-weight: bold;
		margin-left: 10px;
	}

	ul {
		font-weight: bold;
	}

	* {
		word-wrap: break-word;
	}

	.inline {
		display: inline;
		font-size: 25px;
	}

	.cont {
		background-color: rgba(201, 221, 255, .1);

	}
</style>

<div class="panel panel-default" style="margin-top: 25px; margin-bottom: 25px">
	<div class="row cont" style="margin-top: 10px; margin-bottom: 10px">

		<div class="row panel panel-success">
			<div class="col-xs-6 text-right panel-body">
				
				<form action="{{ URL::route('listings.edit',$listing->id) }}" method="POST">
				    <input type="hidden" name="_method" value="GET">
    				<input type="hidden" name="_token" value="{{ csrf_token() }}">
    				<button class="btn btn-primary">Edit</button>
				</form>
			</div>
			<div class="col-xs-6 text-left panel-body">
			
				<form action="{{ URL::route('listings.destroy',$listing->id) }}" method="POST">
				    <input type="hidden" name="_method" value="DELETE">
    				<input type="hidden" name="_token" value="{{ csrf_token() }}">
    				<button class="btn btn-danger">Delete</button>
				</form>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="wrapper">
				<div class="row">
					<div class="text-center" style="margin-top: 15px"> 
						<img class="img-thumbnail" src="http://placehold.it/400x300">
					</div>
				</div>
				<div class="row">
					<h2 class="text-center">{{ $listing->headline }}</h2>
				</div>
				<div class="row text-center">
					@if($listing->featured)
						<div class="inline"><span class="label label-primary">Featured</span></div>
					@endif
					<div class="inline"><span class="label label-default">{{ $listing->devicestorage }}</span></div>
					<div class="inline"><span class="label label-default">{{ $listing->condition }}</span></div>
					<div class="inline"><span class="label label-default">{{ $listing->brand }}</span></div>
					<div class="inline"><span class="label label-default">{{ $listing->category }}</span></div>
				</div>
				<br /><br />
				<div class="row">
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://placehold.it/150x150">
				    </a>
				  </div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-12"> 
						<h3>Description</h3>
						<div style="margin-left: 10px">
							<h4>Product Description</h4>
							<p>
								{{ $listing->description }}
							</p>
							@if(!is_null($listing->dmgdescription))
							<h4>Damage Description / Repair History</h4>
							<p>
								{{ $listing->dmgdescription }}
							</p>
							@endif
							<h4>Overall Device Condition</h4>
							@if($listing->condition == "mint")
								<ul>
									<li>Functions flawlessly</li>
									<li>Perfect screen condition</li>
									<li>No signs of use</li>
								</ul>
							@elseif($listing->condition == "good")
								<ul>
									<li>Functions flawlessly</li>
									<li>Screen with little or no scratching</li>
									<li>Few cosmetic defects such as light scratches</li>
								</ul>
							@elseif($listing->condition == "fair")
								<ul>
									<li>Functions flawlessly</li>
									<li>Screen with noticeable scratching</li>
									<li>Several cosmetic defects, scratches and/or dents</li>
								</ul>
							@elseif($listing->condition == "new")
								<ul>
									<li>Never activated, rooted, or refurbished</li>
									<li>With original box and accessories</li>
									<li>No signs of use</li>
								</ul>
							@endif

							<h4>Additional Accessories</h4>
							<ul>
							@if($listing->boxincluded)
								<li>Origial Box</li>
							@endif
							@if($listing->usbincluded)
								<li>USB Cable</li>
							@endif
							@if($listing->adapterincluded)
								<li>A/C Adapter</li>
							@endif
							@if($listing->microsdincluded)
								<li>MicroUSD Card</li>
							@endif
							@if($listing->carchargedincluded)
								<li>Car Charger</li>
							@endif
							</ul>
						</div>
						<h3>Additional Information</h3>
						<ul>
						@if($listing->originalowner)
							<li>Original Owner: <span class="glyphicon glyphicon-ok"></li>
						@else
							<li>Original Owner: <span class="glyphicon glyphicon-remove"></li>
						@endif

						@if(!$listing->refurbished)
							<li>Not Refurbished: <span class="glyphicon glyphicon-ok"></li>
						@else
							<li>Not Refurbished: <span class="glyphicon glyphicon-remove"></li>
						@endif
						<li>Device Color: {{ $listing->devicecolor }}</li>
						<li>Device Storage: {{ $listing->devicestorage }}</li>
						<li>Ship Location: {{ $listing->shiplocation }}</li>
						</ul>
					
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection