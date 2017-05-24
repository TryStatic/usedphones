<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
Use App\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

        return "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category = null)
    {
        if($category == null) // If the category is null or is not one of the valid categories hard coded.
            return view('listings/category'); // Show him the category selection view.
        else if($this->validCategory($category))
            return view('listings/create', ['category' => $category]); // Otherwise forward him to the create listing view
        else return "404"; // TODO: Add actual 404
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate the data coming from the form
       $this->validate($request, [
            'headline' => 'required|min:6|max:255',
            'description' => 'required|min:20|max:3000',
            'devconditions' => 'required|in:mint,good,fair,new',
            'dmgdescription' => 'nullable',
            'refurbishedoptions' => 'required|boolean',
            'originalowneroptions' => 'required|boolean',
            'askprice' => 'required|numeric',
            'ppemail' => 'required|email',
            'devicecolors' => 'required|in:Black,Blue,Gold,White',
            'devicestorage' => 'required|in:16GB,32GB,64GB,128GB',
            'accessories' => 'nullable',
            'country' => 'required',
            'shiplocation' => 'required',
            'category' => 'required|in:iphone,ipad,smartphone,tablet',
        ]);

        $listing = new Listing();

        $listing->headline             = $request->headline;
        $listing->description          = $request->description;
        $listing->category             = $request->category;
        $listing->condition            = $request->devconditions;
        $listing->dmgdescription       = $request->dmgdescription;
        $listing->refurbished          = $request->refurbishedoptions;
        $listing->originalowner        = $request->originalowneroptions;
        $listing->askingprice          = $request->askprice;
        $listing->paypalemail          = $request->ppemail;
        $listing->devicecolor          = $request->devicecolors;
        $listing->devicestorage        = $request->devicestorage;

        if( !is_null($request->accessories) ) {
            if( in_array("originalbox", $request->accessories) )
                $listing->boxincluded = true; 
            else 
                $listing->boxincluded = false;

            if( in_array("usbcable", $request->accessories) )
                $listing->usbincluded = true;
            else
                $listing->usbincluded = false;

            if( in_array("acadapter", $request->accessories) )
                $listing->adapterincluded = true;
            else
                $listing->adapterincluded = false;

            if( in_array("microsdcard", $request->accessories) )
                $listing->microsdincluded = true;
            else
                $listing->microsdincluded = false;

            if( in_array("carcharger", $request->accessories) )
                $listing->carchargedincluded = true;
            else
                $listing->carchargedincluded = false;

        } else {
            $listing->boxincluded = false; 
            $listing->usbincluded = false; 
            $listing->adapterincluded = false; 
            $listing->microsdincluded = false; 
            $listing->carchargedincluded = false; 
        }

        $listing->country              = $request->country;
        $listing->shiplocation         = $request->shiplocation;

        $listing->save();
    

        return redirect()->route('listings.show', $listing->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
        return view('listings/show')->withListing($listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "destroy";
    }

    private function validCategory($category) {

        if($category == "iphone" || $category == "ipad" || $category == "smartphone" || $category == "tablet")
            return true;
        return false;
    }
}
