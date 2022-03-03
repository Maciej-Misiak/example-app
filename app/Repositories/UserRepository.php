<?php

namespace App\Repositories;

use App\Models\User;
use DB;

 class UserRepository extends BaseRepository{  

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAllUsers(){
        return $this->model->get();
        }

    public function getUsersByRestaurant($id)
    {
        return $this->model->where('type','user')->whereHas('restaurants',
        function($query) use ($id)
        {
        $query->where('restaurants.id',$id);
        }) ->orderBy('name', 'asc')->get();

    }      
}  

 
 