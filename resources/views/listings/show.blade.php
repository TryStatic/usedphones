@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| View Listing') {{-- Sending this page's title to the master layout for the title --}}


@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}


<?php var_dump($listing) ?>

@endsection