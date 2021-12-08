<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminVehicleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function showVehicleForm() {
        return view('addVehicle', []);
    }

    public function addVehicle() {
        $data = request()->validate([
            'name' => 'required'
        ]);

        return DB::transaction(function() use ($data) {
            Vehicle::create([
                'name' => $data['name']
            ]);
            return redirect("/admin/vehicles");
        });
    }

    public function showVehicleUpdateForm(Vehicle $vehicle) {
        return view('editVehicle', [
            'vehicle' => $vehicle
        ]);
    }

    public function update (Vehicle $vehicle) {
        $data = request()->validate([
            'name' => 'required'
        ]);
        
        DB::transaction(function() use($vehicle, $data) {
            $vehicle->update($data);
        }, 2);

        return redirect("/admin/vehicles");
    }

    public function destroy (Vehicle $vehicle) {
        DB::transaction(function() use($vehicle) {
            $vehicle->delete();
        }, 2);

        return redirect("/admin/vehicles");
    }
}
