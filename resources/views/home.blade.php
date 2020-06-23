@extends('Layout.mainLayout')

@section('content')

<h1>IMPIEGATI</h1>
<ul>
  @foreach ($employee as $employe)
    <li>
      <a href="{{route('show', $employe['id'] )}}">
        {{$employe['firstname']}}
      </a>
    </li>
  @endforeach
</ul>

@endsection
