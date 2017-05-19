@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| Create') {{-- Sending this page's title to the master layout for the title --}}



@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Primitive Creating of a Listing</h1>
		<hr>
		<div class="panel panel-default">
			<div class="panel-body">
				<p>Some fields are optional to make listing creation quicker but should included to make the listing complete.<br />
				<strong>Fields with an asterisk (*) must be provided.</strong></p>
			</div>
		</div>



		<div class="panel panel-default">
  			<div class="panel-heading">Description & Condition</div>
			<div class="panel-body">
				<form method="POST" action="{{-- route('posts.store') --}}">
					
					<div class="form-group">
						<label name="title">Headline *:</label>
						<p>A short description of your device and listing.</p>
						<input id="title" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label name="title">Description *:</label>
						<p>A short description of your device and listing.</p>
						<input id="title" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label name="title">Overall Device Condition *:</label>
						<p>Please be honest and err on the side of caution.</p>
						<input id="title" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label name="title">Refurbished?:</label>
						<p>Is this a refurbished and/or rebuilt device?</p>
						<input id="title" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label name="title">Original Owner?:</label>
						<p>Are you the original owner of the device? Answer No if you did not buy this device brand new from a reputable retailer.</p>
						<input id="title" name="title" class="form-control">
					</div>
			</div>
		</div>



		<div class="panel panel-default">
  			<div class="panel-heading">Payment Information</div>
			<div class="panel-body">
				<form method="POST" action="{{-- route('posts.store') --}}">
					
					<div class="form-group">
						<label name="title">Ask Price *:</label>
						<p>Specify the amount you'll get paid.</p>
						<input id="title" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label name="title">PayPal Email *:</label>
						<p>Your PayPal email address used to accept payment for your device.</p>
						<input id="title" name="title" class="form-control">
					</div>
			</div>
		</div>


		<div class="panel panel-default">
  			<div class="panel-heading">Device Information</div>
			<div class="panel-body">
				<form method="POST" action="{{-- route('posts.store') --}}">
					
					<div class="form-group">
						<label name="title">Device Color *:</label>
						<p>Please select the device's color.</p>
						<input id="title" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label name="title">Device Storage *:</label>
						<p>Please select the device's storage.</p>
						<input id="title" name="title" class="form-control">
					</div>
			</div>
		</div>


		<div class="panel panel-default">
  			<div class="panel-heading">Accessories</div>
			<div class="panel-body">
				<form method="POST" action="{{-- route('posts.store') --}}">
					
					<div class="form-group">
						<label name="title">Included Accessories</label>
						<p>Please check the accessories you will be including. <strong>The device's battery is required.</strong></p>
						<input id="title" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label name="title">Device Storage *:</label>
						<p>Please select the device's storage.</p>
						<input id="title" name="title" class="form-control">
					</div>
			</div>
		</div>


		<div class="panel panel-default">
  			<div class="panel-heading">Shipping & Handling</div>
			<div class="panel-body">
			<h4>Standard shipping policies:</h4>
			<p>
				<ul>
					<li>Sellers are expected to ship within two business days of receiving payment.</li>
					<li>Standard shipping costs (ground shipping with tracking and insurance in the same country) should be included in listed price.</li>
				</ul>
			</p>
				<form method="POST" action="{{-- route('posts.store') --}}">
					
					<div class="form-group">
						<label name="title">Country *:</label>
						<p>The country this listing is posted from.</p>
						<input id="title" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label name="title">Ship From Location *:</label>
						<p>The location (e.g. city and state) you will ship from.</p>
						<input id="title" name="title" class="form-control">
					</div>
			</div>
		</div>

			<input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
			<input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
	</div>
</div>﻿

@endsection