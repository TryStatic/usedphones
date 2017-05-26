@extends('layouts.masterpage') {{-- We'll be extending the master layout page. --}}


@section('title', '| View Listing') {{-- Sending this page's title to the master layout for the title --}}


@section('additional_scripts')


@endsection


@section('maincontent') {{-- This is the main content that this file will be providing to the master layout --}}
  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Listing ID</th>
        <th>Listing Title</th>
      </tr>
    </thead>
    <tbody>

    	@foreach($listings as $listing)
    		<tr>
    			<td> {{ $listing->id }} </td>
    			<td> {{ $listing->headline }} </td>
    		</tr>
    	@endforeach
    </tbody>
  </table>
  </div>

@endsection