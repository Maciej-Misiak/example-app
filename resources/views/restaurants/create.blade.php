@extends('template')

@section('content')
<div class="container">
    <h2>Add restaurant</h2>
    <!-- problem -->
<form action="{{action([RestaurantController::class, 'index'])}}" method="POST" role="form"> 
    <input type="hidden" name="_token" value="{{csrf_token()}}"
<div class="form-group">
    <label for="name">Name of restaurant</label>
    <input type="text" class="form-control" name="name"/>

</div>
<input type="submit" value="Add" class="btn btn-primary"/>
</form>

</div>

@endsection('content')