<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RestaurantRepository;
use App\Models\Restaurant;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    public function index(RestaurantRepository $restaurantRepo)
    {
     $restaurants = $restaurantRepo->getAll();

     return view('restaurants.list',["restaurants"=>$restaurants]);
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $restaurant = new Restaurant;
        $restaurant->name = $request->input('name');
        $restaurant->save();

        return redirect()->action([RestaurantController::class, 'index']);
    }
}
