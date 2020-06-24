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
  <br>
  <br>
  <a href="{{route('edit', $employee['id'])}}">EDIT ME</a>
  <a href="{{route('update', $employee['id'])}}">UPDATE</a>
</div>


@endsection
