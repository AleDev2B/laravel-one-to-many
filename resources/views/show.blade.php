@extends('Layout.mainLayout')

@section('content')

<div class="impiegato">

  @if (session('success'))
    <h3>{{session('success')}}</h3>
  @endif

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
  <a href="{{route('destroy', $employee['id'])}}">DESTROY</a>
</div>


@endsection
