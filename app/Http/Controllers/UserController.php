<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Models\Restaurant;

class UserController extends BaseController
{
    public function index(UserRepository $userRepo)
    {
     $users = $userRepo->getAllUsers();

     return view('users.list',["usersList"=>$users]);
    }

    public function listByRestaurant(UserRepository $userRepo, $id)
    {
     $users = $userRepo-> getUsersByRestaurant($id);

     return view('users.list',["usersList"=>$users]);
    }

    public function show(UserRepository $userRepo, $id)
    {
     $user = $userRepo->find($id);

     return view('users.show',["user"=>$user]);
    }

    public function create()
    {
     $restaurants = Restaurant::all();

     return view('users.create',['restaurants' => $restaurants]);    
    }

    public function edit(UserRepository $userRepo, $id)
    {
        $user = $userRepo->update(["name" => "Maciej"], $id);  
        return redirect('users');

    }
}
