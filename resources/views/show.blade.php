@extends('Layout.mainLayout')

@section('content')

<div class="impiegato">

  NAME:  {{$employee['firstname']}}
  <br>
  LASTNAME:{{$employee['lastname']}}
  <br>
  DATE OF BIRTH:  {{$employee['dateOfBirth']}}
  <br>
  ROLE:  {{$employee['role']}}
</div>

@endsection
