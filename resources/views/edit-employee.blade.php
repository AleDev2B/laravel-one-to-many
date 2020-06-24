@extends('Layout.mainLayout')

@section('content')

<div>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

<form action="{{route('update', $employee['id'])}}" method="post">
  @csrf
  @method('POST')

    <label for="name">NAME</label>
    <input type="text" name="name" value="{{$employee['firstname']}}">
    <br>
    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname" value="{{$employee['lastname']}}">
    <br>
    <label for="dateOfBirth">DATE OF BIRTH</label>
    <input type="text" name="dateOfBirth" value="{{$employee['dateOfBirth']}}">
    <br>
    <label for="role">ROLE</label>
    <input type="text" name="role" value="{{$employee['role']}}">
    <br>
    <br>
    <input type="submit" name="submit" value="UPDATE">
  </div>
</form>



@endsection
