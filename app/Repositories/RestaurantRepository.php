<?php

namespace App\Repositories;

use App\Models\Restaurant;

 class RestaurantRepository extends BaseRepository{  

    public function __construct(Restaurant $model)
    {
        $this->model = $model;
    }
}