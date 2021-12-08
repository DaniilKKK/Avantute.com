<?php

namespace App\Http\Controllers;

use App\Country;
use App\City;
use App\Role;
use App\User;
use App\Vehicle;
use App\Service;
use App\Tour;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function orders() {
        $orders = Order::all();
        return view('orders', [
            'orders' => $orders
        ]);
    }

    public function showOrderUpdateForm(Order $order) {
        $tours = Tour::all();
        $users = User::all();
        
        return view('editOrder', [
            'order' => $order,
            'tours' => $tours,
            'clients' => $users,
            'collaborators' => $users,
        ]);
    }

    public function orderUpdate(Order $order) {
        $data = request()->validate([
            'tour_id' => 'required',
            'client_id' => 'required',
            'collaborator_id' => 'required'
        ]);
    
        DB::transaction(function() use($order, $data) {
            $order->update($data);
        }, 2);

        return redirect("/admin/orders");
    }

    public function orderDestroy(Order $order) {
        DB::transaction(function() use($order) {
            $order->delete();
        }, 2);

        return redirect("/admin/orders");
    }

    public function userDestroy(User $user) {
        DB::transaction(function() use($user) {
            $user->delete();
        }, 2);

        return redirect("/admin/users");
    }

    public function showUserUpdateForm(User $user) {
        $roles = Role::all();
        return view('editUser', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function userUpdate(User $user) {
        $data = request()->validate([
            'fullName' => 'required',
            'role_id' => 'required',
            'address' => 'required',
            'position' => 'required',
            'login' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required'
        ]);
    
        DB::transaction(function() use($user, $data) {
            $user->update($data);
        }, 2);

        return redirect("/admin/users");
    }

    public function toursAdmin() {
        $tours = Tour::all();
        return view('toursAdmin', [
            'tours' => $tours
        ]);
    }

    public function services() {
        $services = Service::all();
        return view('services', [
            'services' => $services
        ]);
    }

    public function countries() {
        $countries = Country::all();
        return view('countries', [
            'countries' => $countries
        ]);
    }

    public function cities() {
        $cities = City::all();
        return view('cities', [
            'cities' => $cities
        ]);
    }

    public function vehicles() {
        $vehicles = Vehicle::all();
        return view('vehicles', [
            'vehicles' => $vehicles
        ]);
    }

    public function users() {
        $users = User::all();
        return view('users', [
            'users' => $users
        ]);
    }

    public function roles() {
        $roles = Role::all();
        return view('roles', [
            'roles' => $roles
        ]);
    }

    public function ban(User $user) {
        return DB::transaction(function() use ($user) {
            $user->update(['blocked' => !$user->blocked]);
            return redirect("/admin/users");
        });
    }

    public function showTourForm() {
        $services = Service::all();
        return view('addTour', [
            'services' => $services
        ]);
    }

    public function addTour() {
        $data = request()->validate([
            'name' => 'required',
            'service_id' => 'required',
            'people' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $imageName = basename(request('image')->store('tours', 'public_uploads'));

        return DB::transaction(function() use ($data, $imageName) {
            Tour::create([
                'name' => $data['name'],
                'service_id' => $data['service_id'],
                'people' => $data['people'],
                'price' => $data['price'],
                'duration' => $data['duration'],
                'description' => $data['description'],
                'image' => $imageName,
            ]);
            return redirect("/admin/tours");
        });
    }
}
