@extends('template')

@section('content')
<div class="container">
    <h2>Employees</h2>
    <a href="{{URL::to('users/create')}}">Add employee</a>
<table class="table">
<thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Restaurants</th>       
    </tr>
</thead>
<tbody>

    @foreach ($usersList as $user)
    
    <tr>
        <th scope="row">{{$user ['id'] }}</th>
        <td><a href="{{URL::to('users/' . $user->id)}}"> {{ $user->name }} </a></td>
        <td>{{$user->surname}}</td>
        <td>{{$user->email}}</td>
        <td>
            <ul>
            @foreach ($user->restaurants as $restaurant)
            <li>{{$restaurant->name}}</li>
            @endforeach
            </ul>
        </td>
    </tr>
    @endforeach

</tbody>
</table>
</div>

@endsection('content')