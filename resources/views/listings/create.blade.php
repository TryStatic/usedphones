@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| Creating new Listing') {{-- Sending this page's title to the master layout for the title --}}


@section('additional_scripts') {{-- We'll be providing additional scripts to the masterpage. Thise will be loaded at the bottom --}}

	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
	<script src="http://blazeworx.com/jquery.flagstrap.min.js"></script>

	<script src="{{ asset('js/bootstrap-spinedit.js') }}"></script>
	<script type="text/javascript">

	    $('.aSpinEdit').spinedit({
	    	value: 200,
	        numberOfDecimals: 2,
			minimum: 10,
			maximum: 2000,
			step: 10
	    });
		$('.aSpinEdit').on("valueChanged", function (e) {
			finalval = e.value + 20.0;
			$('.finalval').text(finalval.toFixed(2));
	    });


		$(document).ready(function () {
			//cumhere
		    $('#createlisting').validate({
		        rules: {
		            headline: {
		                minlength: 2,
		                required: true
		            },
		            description: {
		            	minlength: 20,
		            	required: true
		            },
		            ppemail: {
		                required: true,
		                email: true
		            },
		            shiplocation: {
		            	required: true
		            },
		            refurbishedoptions: {
		            	required: true
		            },
		            originalowneroptions: {
		            	required: true
		            },
		            devicecolors: {
		            	required: true
		            },
		            devicestorage: {
		            	required: true
		            },
		            country: {
		            	required: true
		            },
		            shiplocation: {
		            	required: true
		            }
		        },
		        highlight: function (element) {
		            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		        },
		        success: function (element) {
		            element.closest('.form-group').removeClass('has-error').addClass('has-success');
		        }
		    });

		});

		$(document).ready(function () {
		    $('#select_country').attr('data-selected-country','GR');
		    $('#select_country').flagStrap();
		});
	</script>
@endsection


@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}


<style>

	.devicecondition ul {
		margin-left: 0px;
		padding-left: 5px;
	}

	.bold {
		font-weight: bold;
	}
</style>

<link rel="stylesheet" href="{{ asset('css/bootstrap-spinedit.css') }}"> <!-- This Links inside the body, OH WELL -->
<link href="http://blazeworx.com/flags.css" rel="stylesheet">

<div class="row panel panel-default" style="margin-top: 25px; margin-bottom: 25px">
	<div class="col-md-8 col-md-offset-2" style="margin-top: 25px; margin-bottom: 25px">
		
		<h1 style="margin-bottom: 0px">Creating a new {{ $category }} listing</h1>
		<hr style="margin-top: 2px; margin-bottom: 25px;">
		<div class="panel panel-info">
			<div class="panel-heading">
				<p>Some fields are optional to make listing creation quicker but should included to make the listing complete.<br />
					<span class="bold">Fields with an asterisk (*) must be provided.</span></p>
				</div>
			</div>

			<form id="createlisting" method="POST" action="{{ route('listings.store') }}">

				<div class="panel panel-primary">
					<div class="panel-heading">
						Description & Condition
					</div>
					<div class="panel-body">

						<!-- Headline -->
						<div class="form-group">
							<label for="headline">Headline *:</label>
							<p>A short description of your device and listing.</p>
							<input id="headline" name="headline" class="form-control">
						</div>




						<!-- Description -->
						<div class="form-group">
							<label for="description">Description *:</label>
							<p>Describe in detail your device and what is included for the buyer.</p>
							<textarea id="description" name="description" class="form-control" rows="10" maxlength="3000"></textarea>
						</div>




						<!-- Overall Device Condition -->
						<div class="row">
							<div class="col-xs-12">
								<span class="bold">Overall Device Condition *:</span>
								<p>Please be honest and err on the side of caution.</p>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="devicecondition" style="margin: 10px 10px 10px 10px;">					
								<div class="row">
									<div class="col-sm-4">
										<div class="radio">
											<label>
												<input type="radio" name="devconditions" id="devcondition1" value="devcondition1" checked>
												<span class="bold">Mint</span>
												<ul>
													<li>Functions flawlessly</li>
													<li>Perfect screen condition</li>
													<li>No signs of use</li>
												</ul>
											</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="radio">
											<label>
												<input type="radio" name="devconditions" id="devcondition2" value="devcondition2">
												<span class="bold">Good</span>
												<ul>
													<li>Functions flawlessly</li>
													<li>Screen with little or no scratching</li>
													<li>Few cosmetic defects such as light scratches</li>
												</ul>
											</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="radio">
											<label>
												<input type="radio" name="devconditions" id="devcondition3" value="devcondition3">
												<span class="bold">Fair</span>
												<ul>
													<li>Functions flawlessly</li>
													<li>Screen with noticeable scratching</li>
													<li>More cosmetic defects, scratches and/or dents</li>
												</ul>											
											</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="radio">
											<label>
												<input type="radio" name="devconditions" id="devcondition4" value="devcondition4">
												<span class="bold">New</span>
												<ul>
													<li>Never activated, rooted, or refurbished</li>
													<li>With original box and accessories</li>
													<li>No signs of use</li>
												</ul>											
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>




						<!-- Damage Description -->
						<div class="form-group">
							<label for="dmgdescription">Damage Description / Repair History:</label>
							<p>Please describe any imperfections, damage the device has sustained, and/or repairs made. Leave blank for none.</p>
							<textarea id="dmgdescription" name="dmgdescription" class="form-control" rows="5" maxlength="1500">
							</textarea>
						</div>




						<!-- Refurbished -->
						<div>
							<span class="bold">Refurbished?:</span>
							<p>Is this a refurbished and/or rebuilt device?</p>
							<label class="radio-inline">
								<input type="radio" name="refurbishedoptions" id="refurbishedoption1" value="refurbishedoption1"> Yes
							</label>
							<label class="radio-inline">
								<input type="radio" name="refurbishedoptions" id="refurbishedoption2" value="refurbishedoption2" checked> No
							</label>
						</div>




						<br />



						<!-- Original Owner -->
						<div>
							<span class="bold">Original Owner?:</span>
							<p>Are you the original owner of the device? Answer No if you did not buy this device brand new from a reputable retailer.</p>
							<label class="radio-inline">
								<input type="radio" name="originalowneroptions" id="originalowneroption1" value="originalowneroption1"> Yes
							</label>
							<label class="radio-inline">
								<input type="radio" name="originalowneroptions" id="originalowneroption2" value="originalowneroption2" checked> No
							</label>
						</div>
					</div>
				</div>


				<div class="panel panel-primary">
					<div class="panel-heading">Payment Information</div>
					<div class="panel-body">


						<style>
							.vparent {
								  position: relative;
								  height: 90px;
							}
							.vchild {
								  position: absolute;
								  top: 50%;
								  transform: translateY(-50%);
								  font-size: 18px;
							}
						</style>




						<!-- Asking Price -->
			            <div class="row">
			            	<div class="col-sm-3" >
					            <div class="form-group">
					                <label class="control-label" for="askprice">Ask Price *: </label>
					                <div class="input-group">
					                    <input type="text" name="askprice" class="form-control aSpinEdit" id="askprice"/>
					                    <span class="input-group-addon">
					                        <i class="glyphicon glyphicon-euro"></i>
					                    </span>
					                </div>
					            </div>
					        </div>
							<div class="col-sm-9 vparent"><span class="vchild">&nbsp;+&nbsp;&nbsp;&nbsp;20&euro; (Sale Fee)&nbsp;&nbsp;= <span class="finalval bold">230.00</span>&euro; (Total Price shown to Buyers)</span></div>
						</div>




						<!-- Paypal E-maill Address -->
						<div class="form-group">
							<label for="ppemail">PayPal Email *:</label>
							<p>Your PayPal email address used to accept payment for your device.</p>
							<input type="email" id="ppemail" name="ppemail" class="form-control">
						</div>
					</div>
				</div>


				<div class="panel panel-primary">
					<div class="panel-heading">Device Information</div>
					<div class="panel-body">




						<!-- Device Color -->
						<div class="form-group">
							<label for="title">Device Color *:</label>
							<p>Please select the device's color.</p>
								<label class="radio-inline bold"> <input type="radio" name="devicecolors" id="devicecolorblack" value="Black" checked> Black </label>
								<label class="radio-inline bold"> <input type="radio" name="devicecolors" id="devicecolorblue" value="Blue"> Blue </label>
								<label class="radio-inline bold"> <input type="radio" name="devicecolors" id="devicecolorgold" value="Gold"> Gold </label>
								<label class="radio-inline bold"> <input type="radio" name="devicecolors" id="devicecolorwhite" value="White"> White </label>
						</div>



						<!-- Device Storage -->
						<div class="form-group">
							<label for="title">Device Storage *:</label>
							<p>Please select the device's storage.</p>
								<label class="radio-inline bold"> <input type="radio" name="devicestorage" id="devicestorage16gb" value="16GB" checked> 16GB </label>
								<label class="radio-inline bold"> <input type="radio" name="devicestorage" id="devicestorage32gb" value="32GB"> 32GB </label>
								<label class="radio-inline bold"> <input type="radio" name="devicestorage" id="devicestorage64gb" value="64GB"> 64GB </label>
								<label class="radio-inline bold"> <input type="radio" name="devicestorage" id="devicestorage128gb" value="128GB"> 128GB </label>
							</div>
					</div>
				</div>


				<div class="panel panel-primary">
					<div class="panel-heading">Accessories</div>
					<div class="panel-body">




						<!-- Inlcuded Accessories -->
						<div class="form-group">
							<label for="title">Included Accessories</label>
							<p>Please check the accessories you will be including. <span class="bold">The device's battery is required.</span></p>
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td><input type="checkbox" name="chboxoriginalbox" id="chboxoriginalbox" value="originalbox"></td>
										<td>Origial Box</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="chboxusbcable" name="chboxusbcable" id="chboxusbcable" value="usbcable"></td>
										<td>USB Cable</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="chboxacadapter" id="chboxacadapter" value="acadapter"></td>
										<td>A/C Adapter</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="chboxmicrosdcard" id="chboxmicrosdcard" value="microsdcard"></td>
										<td>MicroUSD Card</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="chboxmicrosdcard" id="chboxcarcharger" value="carcharger"></td>
										<td>Car Charger</td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>


				<div class="panel panel-primary">
					<div class="panel-heading">Shipping & Handling</div>
					<div class="panel-body">
						<h4>Standard shipping policies:</h4>
						<p>
							<ul>
								<li>Sellers are expected to ship within two business days of receiving payment.</li>
								<li>Standard shipping costs (ground shipping with tracking and insurance in the same country) should be included in listed price.</li>
							</ul>
						</p>

						<!-- Country --> 
						    <div class="form-group">
						        <label>Country:</label><br>
						        <div class="flagstrap" id="select_country" data-input-name="country"></div>
						    </div>

			            
						<!-- Ship Location -->
						<div class="form-group">
							<label for="shiplocation">Ship From Location *:</label>
							<p>The location (e.g. city and state) you will ship from.</p>
							<input id="shiplocation" name="shiplocation" class="form-control">
						</div>
					</div>
				</div>

				<input type="submit" value="Create new Listing" class="btn btn-success btn-lg btn-block">
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>﻿

@endsection