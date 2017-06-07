<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
Use App\Listing;
use Session;

class ListingsController extends Controller
{

    private $fee = 20;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::orderBy('id', 'desc')->paginate(6);
        $totalListings = Listing::count();

        return view('listings/index')->withListings($listings)->withTotal($totalListings);
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
            return view('listings/create', ['category' => $category, 'fee' => $this->fee]); // Otherwise forward him to the create listing view
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
            'dmgdescription' => 'nullable|max:255',
            'refurbishedoptions' => 'required|boolean',
            'originalowneroptions' => 'required|boolean',
            'askprice' => 'required|numeric',
            'ppemail' => 'required|email',
            'devicecolors' => 'required|in:Black,Blue,Gold,White',
            'devicestorage' => 'required|in:16GB,32GB,64GB,128GB',
            'accessories' => 'nullable',
            'country' => 'required|max:255',
            'shiplocation' => 'required|max:255',
            'brand' => 'required|max:255',
            'category' => 'required|in:iphone,ipad,smartphone,tablet',
        ]);

        $listing = new Listing();

        $listing->headline             = $request->headline;
        $listing->description          = $request->description;

        if($request->category == "iphone" || $request->category == "ipad")
            $listing->brand = "Apple";
        else
            $listing->brand = $request->brand;

        $listing->category             = $request->category;
        $listing->condition            = $request->devconditions;
        $listing->dmgdescription       = $request->dmgdescription;
        $listing->refurbished          = $request->refurbishedoptions;
        $listing->originalowner        = $request->originalowneroptions;
        $listing->askingprice          = $request->askprice + $this->fee;
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
        $listing->featured             = false;

        $listing->save();
    
        Session::flash('success', 'You have successfully added a new listing.');

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

        if($listing == null)
            return 404;

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

        $listing = Listing::find($id);

        return view('listings/edit')->withListing($listing);
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

        $listing = Listing::find($id);

        $listing->delete();
        Session::flash('success', 'You have successfully deleted that listing.');
        return redirect()->route('listings.index');
    }

    private function validCategory($category) {

        if($category == "iphone" || $category == "ipad" || $category == "smartphone" || $category == "tablet")
            return true;
        return false;
    }

    public static function getFourRandomFeatured()
    {
        // Get ALL the featured listings from the database.
        $featuredListings = DB::table('listings')->where('featured', '=', '1')->get();

        

        if($featuredListings->count() > 4)
        { // More than four.
            $featuredListings = $featuredListings->shuffle(); // Shuffle them
            return $featuredListings->slice(0,4); // Return the first 4 from the collection
        }
        else if($featuredListings->count() == 4)
        { // Exactly four
             return $featuredListings; // Just return them
        }
        else 
        { // Less than four, this one's tricky, we need to populate the missing one(s) with non-featured listings.
            
            // How many more do we need?
            $amountWeHave = $featuredListings->count(); // We have this many.
            // But: amountWeHave + amountWeNeed = 4   =>   amountWeNeed = 4 - amountWeHave;
            $amountWeNeed = 4 - $amountWeHave;

            $nonFeaturedListings = DB::table('listings')->where('featured', '=', '0')->get();

            if($nonFeaturedListings->count() <= $amountWeNeed)
            { // Means what we need is exactly or less than what we have.
                // Either case, we just add it to the collection for featured listings
                foreach ($nonFeaturedListings as $nonFeatruedListing) {
                    $featuredListings->push($nonFeaturedListings->pop());
                }
            }
            else
            {
                // Ok, more than the amount of non-featured listings we need came through, let's shuffle them.
                $nonFeaturedListings = $nonFeaturedListings->shuffle();

                for($i=0;$i<$amountWeNeed;$i++) {
                    $featuredListings->push($nonFeaturedListings->pop());
                }
            }

            // Either case, you return the featured listings. Should always be 4.
            return $featuredListings;

        }
    }
}
