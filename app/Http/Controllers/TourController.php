<?php

namespace App\Http\Controllers;

use Exception;
use App\Tour;
use App\Order;
use App\Service;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    private function priceArray($tour) {
        return $tour['price'];
    }

    public function showTourUpdateForm(Tour $tour) {
        $services = Service::all();
        
        return view('editTour', [
            'tour' => $tour,
            'services' => $services
        ]);
    }

    public function index (Request $request) {
        $tours = Tour::all();
        $cities = City::all();

        if ($request->query()) {
            try {
                $filteredTours = Service::leftJoin('tours', 'tours.service_id', '=', 'services.id')->where([
                    'people' => $request->query('people'),
                    'city_id' => $request->query('city_id'),
                    'departureDate' => $request->query('departure_date'),
                    'arrivalDate' => $request->query('arrival_date')
                ])->get();

                $tours = $filteredTours;
            } catch (Exception $e) {
                $tours = [];
            }
        }
        return view('tours', [
            'cities' => $cities,
            'tours' => $tours
        ]);
    }

    public function cardOrder (Tour $tour) {
        return view('cardOrder', [
            'tour' => $tour
        ]);
    }

    public function showban () {
        return view('showban', [

        ]);
    }

    public function card (Tour $tour) {
        return view('card', [
            'tour' => $tour
        ]);
    }

    public function update (Tour $tour) {
        $data = request()->validate([
            'name' => 'required',
            'service_id' => 'required',
            'duration' => 'required',
            'people' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        

        DB::transaction(function() use($tour, $data) {
            $tour->update($data);
        }, 2);

        return redirect("/admin/tours");
    }

    public function destroy (Tour $tour) {
        DB::transaction(function() use($tour) {
            $tour->delete();
        }, 2);

        return redirect("/admin/tours");
    }

    public function order (Tour $tour) {
        $user = Auth::user();

        return DB::transaction(function() use($tour, $user) {
            if ($user->blocked == "1") {
                throw new Exception("Your account has been blocked. You can not make an order");
            };

            $newOrder = Order::create([
                'dateIssue' => date("Y-m-d H:i:s"),
                'collaborator_id' => 3,
                'client_id' => $user->id,
                'tour_id' => $tour->id
            ]);

            return redirect("/client/orders");

        }, 2);
    }
}