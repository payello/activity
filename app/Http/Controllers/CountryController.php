<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class CountryController extends Controller
{
    /**
     * The fillable fields.
     *
     * @var array
     */
    protected $fillable = [
        'countryname'
    ];

    /**
     * Country controller constructor.
     */
    public function __contruct()
    {
        $this->middleware('auth');
    }

    /**
     * Provides a listing for the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $countries = Country::all();

        return view('countries.index')->withCountries($countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'countryname' => 'required'
        ));

        $country = new Country;

        $country->name = $request->name;

        $country->save();

        return redirect('countries.index');
    }
}
