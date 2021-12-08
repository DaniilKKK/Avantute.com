<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCityController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function showCityForm() {
        $countries = Country::all();
        return view('addCity', [
            'countries' => $countries
        ]);
    }

    public function addCity() {
        $data = request()->validate([
            'country_id' => 'required',
            'name' => 'required'
        ]);

        return DB::transaction(function() use ($data) {
            City::create([
                'country_id' => $data['country_id'],
                'name' => $data['name']
            ]);
            return redirect("/admin/cities");
        });
    }

    public function showCityUpdateForm(City $city) {
        $countries = Country::all();
        return view('editCity', [
            'countries' => $countries,
            'city' => $city
        ]);
    }

    public function update (City $city) {
        $data = request()->validate([
            'country_id' => 'required',
            'name' => 'required'
        ]);
        
        DB::transaction(function() use($city, $data) {
            $city->update($data);
        }, 2);

        return redirect("/admin/cities");
    }

    public function destroy (City $city) {
        DB::transaction(function() use($city) {
            $city->delete();
        }, 2);

        return redirect("/admin/cities");
    }
}
