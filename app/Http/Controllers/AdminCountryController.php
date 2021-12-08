<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCountryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function showCountryForm() {
        return view('addCountry', []);
    }

    public function addCountry() {
        $data = request()->validate([
            'name' => 'required'
        ]);

        return DB::transaction(function() use ($data) {
            Country::create([
                'name' => $data['name']
            ]);
            return redirect("/admin/countries");
        });
    }

    public function showCountryUpdateForm(Country $country) {
        return view('editCountry', [
            'country' => $country
        ]);
    }

    public function update (Country $country) {
        $data = request()->validate([
            'name' => 'required'
        ]);
        
        DB::transaction(function() use($country, $data) {
            $country->update($data);
        }, 2);

        return redirect("/admin/countries");
    }

    public function destroy (Country $country) {
        DB::transaction(function() use($country) {
            $country->delete();
        }, 2);

        return redirect("/admin/countries");
    }
}
