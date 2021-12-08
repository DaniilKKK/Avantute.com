<?php

namespace App\Http\Controllers;

use App\City;
use App\Role;
use App\User;
use App\Vehicle;
use App\Service;
use App\Tour;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminServiceController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function showServiceForm() {
        $vehicles = Vehicle::all();
        $cities = City::all();

        return view('addService', [
            'vehicles' => $vehicles,
            'cities' => $cities
        ]);
    }

    public function showServiceUpdateForm(Service $service) {
        $cities = City::all();
        $vehicles = Vehicle::all();
        
        return view('editService', [
            'service' => $service,
            'cities' => $cities,
            'vehicles' => $vehicles
        ]);
    }

    public function addService() {
        $data = request()->validate([
            'name' => 'required',
            'vehicle_id' => 'required',
            'city_id' => 'required',
            'visa_service' => 'required',
            'habitation' => 'required',
            'food' => 'required',
            'excursions' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required'
        ]);

        return DB::transaction(function() use ($data) {
            Service::create([
                'name' => $data['name'],
                'vehicle_id' => $data['vehicle_id'],
                'city_id' => $data['city_id'],
                'visaService' => $data['visa_service'],
                'habitation' => $data['habitation'],
                'food' => $data['food'],
                'excursions' => $data['excursions'],
                'departureDate' => $data['departure_date'],
                'arrivalDate' => $data['arrival_date'],
            ]);
            return redirect("/admin/services");
        });
    }

    public function update (Service $service) {
        $data = request()->validate([
            'name' => 'required',
            'vehicle_id' => 'required',
            'city_id' => 'required',
            'visa_service' => 'required',
            'habitation' => 'required',
            'food' => 'required',
            'excursions' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required'
        ]);
        
        DB::transaction(function() use($service, $data) {
            $service->update([
                'name' => $data['name'],
                'vehicle_id' => $data['vehicle_id'],
                'city_id' => $data['city_id'],
                'visaService' => $data['visa_service'],
                'habitation' => $data['habitation'],
                'food' => $data['food'],
                'excursions' => $data['excursions'],
                'departureDate' => $data['departure_date'],
                'arrivalDate' => $data['arrival_date'],
            ]);
        }, 2);

        return redirect("/admin/services");
    }

    public function destroy (Service $service) {
        DB::transaction(function() use($service) {
            $service->delete();
        }, 2);

        return redirect("/admin/services");
    }
}
