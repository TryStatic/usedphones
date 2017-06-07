@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| View Listing') {{-- Sending this page's title to the master layout for the title --}}


@section('additional_scripts')


@endsection


@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}
	This ought to be the edit view. <br />
	The User is provided with an interface to edit the data for their listing. <br />
	The controller for this view already pulled all the data from the model and dumped it into this view.<br />


@endsection