@extends('template')

@section('content')
<div class="container">
    <h2>Add user</h2>
    <!-- problem -->
<form action="{{action([UserController::class, 'store'])}}" method="POST" role="form"> 
<input type="hidden" name="_token" value="{{csrf_token()}}"/>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"/>
</div>

<div class="form-group">
    <label for="surname">Surname</label>
    <input type="text" class="form-control" name="surname"/>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email"/>
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password"/>
</div>

<div class="form-group">
    <label for="Restaurant">Restaurant</label>
    @foreach($restaurants as $restaurant)
    <input type="checkbox" class="form-control" name="restaurants[]" value="{{$restaurant->id}}"/>
    @endforeach
</div>

<input type="submit" value="Add" class="btn btn-primary"/>
</form>

</div>

@endsection('content')