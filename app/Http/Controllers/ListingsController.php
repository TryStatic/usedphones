<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Listing;
use Illuminate\Validation\Rule;

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


        return dump($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Showid";
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
