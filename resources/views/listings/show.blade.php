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

</style>

<div class="panel panel-default" style="margin-top: 25px; margin-bottom: 25px">
	<div class="row product-detail-2">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="wrapper">
				<div class="row">
					<div class="text-center" style="margin-top: 15px"> 
						<img src="http://placehold.it/300x300">
					</div>
				</div>
				<div class="row">
					<h1>{{ $listing->headline }}</h1>
				</div>
				<div class="row">
					<div class="col-lg-6 text-left">
						<div class="product-price">
							<span>Harga</span><br/> Rp 1.365.000
						</div>
					</div>
					<div class="col-lg-6 text-right">
						<button type="button" class="btn btn-lg btn-success btn-lg">Find Agen</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-12"> 
						<h3>Stok Barang</h3>
						<div class="product-stock">
							Tersedia 30 barang
						</div>
						<h3>Spesifikasi</h3>
						<div class="product-specifications">
							Kategori: Case & Cover
							Brand: Lain-lain
							Berat: 0.35 kg
						</div>
						<h3>Deskripsi Barang</h3>
						<div class="product-descriptions">
							<p>
								Imak Flip Leather Cover Case Series for Samsung Galaxy S6 Edge<br/>
								An Excellent protection for your smartphone<br/>
								Imak Le Series untuk Samsung Galaxy S6 Edge. Le Series merupakan case<br/>
								terbaru Imak yang terbuat dari bahan material kulit berkualitas untuk<br/>
								mellindungi smartphone. Hadir dengan design corak yang elegan, case ini<br/>
								juga dapat digunakan sebagai stand.<br/><br/>

								Features<br/>
								Fashion, Simple, Perfect<br/>
								Imak Leather Case untuk Samsung Galaxy S6 Edge Inch hadir dengan design<br/>
								yang ringan, tipis, serta modis untuk menambah kesan stylish bagi<br/>
								smartphone Anda.<br/><br/>

								Leather Materials bring best protection for your mobile phone<br/>
								Imak Leather Case untuk Samsung Galaxy S6 Edge menggunakan bahan<br/>
								kulit berkualitas untuk melindungi smartphone dari goresan, guncangan dan<br/>
								kotoran lainnya<br/><br/>

								The Surface is Dustproof, Anti fingerprint, and Easy To Clean<br/>
								Imak Leather Case untuk Samsung Galaxy S6 Edge ini pun dilengkapi dengan<br/>
								anti fingerprint, sehingga melindungi smartphone Anda dari bercakan tangan<br/>
								yang mengganggu, serta dapat mencegah debu-debu kecil menempel.<br/>
								Walaupun terdapat debu atau kotoran yang menempel, Anda dapat dengan<br/>
								mudah membersihkannya.<br/><br/>

								Easy Access to All Buttons<br/>
								Anda tetap mendapat akses ke setiap port dan button yang terdapat di device<br/>
								Anda dengan gampang.                            
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php var_dump($listing) ?>
@endsection