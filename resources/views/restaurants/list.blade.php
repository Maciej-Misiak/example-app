@extends('template')

@section('content')
<div class="container">
    <h2>Restaurants</h2>
    <a href="{{ URL::to('restaurants/create') }}">Add new restaurant</a>
<table class="table">
<thead>
    <tr>
        <th>#</th>
        <th>Name</th>      
    </tr>
</thead>
<tbody>

    @foreach ($restaurants as $restaurant)
    
    <tr>
        <th scope="row">{{$restaurant->id }}</th>
        <td><a href="{{ URL::to('users/restaurants/' . $restaurant->id) }}">{{ $restaurant->name }} </a></td>
    </tr>
    @endforeach

</tbody>
</table>
</div>

@endsection('content')