<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Session;

class CountryController extends Controller
{
  protected $fillable = [
      'countryname'
    ];

    public function __contruct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $countries = Country::all();
      return view('countries.index')->withCountries($countries);
    }

    public function store(Request $request)
    {
      $this->validate($request, array(
        'countryname'=>'required'
      ));

      $country = new Country;
        dd($country);
      $country->name = $request->name;

      $country->save();

      return redirect('countries.index');
    }
}
