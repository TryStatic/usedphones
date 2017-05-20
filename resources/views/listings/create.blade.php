@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| Create') {{-- Sending this page's title to the master layout for the title --}}


@section('additional_scripts') {{-- We'll be providing additional scripts to the masterpage. Thise will be loaded at the bottom --}}

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


<div class="row panel panel-default" style="margin-top: 25px">
	<div class="col-md-8 col-md-offset-2" style="margin-top: 25px">
		
		<h1 style="margin-bottom: 0px">Create new Listing</h1>
		<hr style="margin-top: 2px; margin-bottom: 25px;">
		<div class="panel panel-info">
			<div class="panel-heading">
				<p>Some fields are optional to make listing creation quicker but should included to make the listing complete.<br />
					<span class="bold">Fields with an asterisk (*) must be provided.</span></p>
				</div>
			</div>

			<form method="POST" action="{{-- route('posts.store') --}}">

				<div class="panel panel-primary">
					<div class="panel-heading">
						Description & Condition
					</div>
					<div class="panel-body">


						<div class="form-group">
							<label for="headline">Headline *:</label>
							<p>A short description of your device and listing.</p>
							<input id="headline" name="headline" class="form-control">
						</div>

						<div class="form-group">
							<label for="description">Description *:</label>
							<p>A short description of your device and listing.</p>
							<textarea id="description" name="description" class="form-control" rows="10" maxlength="3000">
							</textarea>
						</div>

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
												<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
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
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
												<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
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
												<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
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

						<div>
							<span class="bold">Refurbished?:</span>
							<p>Is this a refurbished and/or rebuilt device?</p>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Yes
							</label>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked> No
							</label>
						</div>

						<br />

						<div>
							<span class="bold">Original Owner?:</span>
							<p>Are you the original owner of the device? Answer No if you did not buy this device brand new from a reputable retailer.</p>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions1" id="inlineRadio3" value="option3"> Yes
							</label>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="option4" checked> No
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

			            <div class="row">
			            	<div class="col-sm-3" >
					            <div class="form-group">
					                <label class="control-label" for="inputGroup">Ask Price *: </label>
					                <div class="input-group">
					                    <input type="text" class="form-control aSpinEdit" id="inputGroup"/>
					                    <span class="input-group-addon">
					                        <i class="glyphicon glyphicon-euro"></i>
					                    </span>
					                </div>
					            </div>
					        </div>
							<div class="col-sm-9 vparent"><span class="vchild">&nbsp;+&nbsp;&nbsp;&nbsp;20&euro; (Sale Fee)&nbsp;&nbsp;= <span class="finalval bold">230.00</span>&euro; (Total Price shown to Buyers)</span></div>
						</div>


						<div class="form-group">
							<label for="title">PayPal Email *:</label>
							<p>Your PayPal email address used to accept payment for your device.</p>
							<input id="title" name="title" class="form-control">
						</div>
					</div>
				</div>


				<div class="panel panel-primary">
					<div class="panel-heading">Device Information</div>
					<div class="panel-body">

						<div class="form-group">
							<label for="title">Device Color *:</label>
							<p>Please select the device's color.</p>
							<input id="title" name="title" class="form-control">
						</div>

						<div class="form-group">
							<label for="title">Device Storage *:</label>
							<p>Please select the device's storage.</p>
							<input id="title" name="title" class="form-control">
						</div>
					</div>
				</div>


				<div class="panel panel-primary">
					<div class="panel-heading">Accessories</div>
					<div class="panel-body">

						<div class="form-group">
							<label for="title">Included Accessories</label>
							<p>Please check the accessories you will be including. <span class="bold">The device's battery is required.</span></p>
							<input id="title" name="title" class="form-control">
						</div>

						<div class="form-group">
							<label for="title">Device Storage *:</label>
							<p>Please select the device's storage.</p>
							<input id="title" name="title" class="form-control">
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

						<div class="form-group">
							<label for="title">Country *:</label>
							<p>The country this listing is posted from.</p>
							<input id="title" name="title" class="form-control">
						</div>

						<div class="form-group">
							<label for="title">Ship From Location *:</label>
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