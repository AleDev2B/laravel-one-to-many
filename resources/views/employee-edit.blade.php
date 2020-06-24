@extends('Layout.mainLayout')

@section('content')

<div>
<form class="" method="post">
  @csrf
  @method('POST')

  <label for="name">NAME</label>
  <input type="text" name="name" value="{{$employee['firstname']}}">
  <label for="lastname">LASTNAME</label>
  <input type="text" name="lastname" value="{{$employee['lastname']}}">
  <label for="dateOfBirth">DATEOFBIRTH</label>
  <input type="text" name="dateOfBirth" value="{{$employee['dateOfBirth']}}">
  <label for="role">ROLE</label>
  <input type="text" name="role" value="{{$employee['role']}}">
</form>
</div>


@endsection
