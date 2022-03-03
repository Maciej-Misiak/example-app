@extends('template')

@section('content')

<div class="container">
<div class="card">
    
    <div class="card-header">
    {{ $user->name}}
    </div>
    <div class="card-body">
        <table class="table">
       <tr>
           <td>Name:</td>
           <td> {{ $user->name}}</td>
       </tr>
       <tr>
        <td>Surname:</td>
        <td> {{ $user->surname}}</td>
    </tr>
    <tr>
        <td>Name:</td>
        <td> {{ $user->email}}</td>
    </tr>
    <tr>
        <td>Restaurants:</td>
        <td> 
            <ul>
                @foreach ($user->restaurants as $restaurant)
            <li>{{$restaurant->name}}</li>
            @endforeach
            </ul>
        </td>
    </tr>
        </table>
    </div>
</div>
</div>

@endsection('content')