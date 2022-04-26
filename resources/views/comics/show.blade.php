@extends('layout.app')

@section('content')
  <div class="container">

    <img src="{{$comics['thumb']}}" alt="">
    <h3> {{$comics->title}} </h3>
    <ul>
      <li> {{$comics->price}}  </li>
      <li> {{$comics->sale_date}}  </li>
      <li> {{$comics->series}}  </li>
      <li> {{$comics->type}}  </li>
      <li> {{$comics->description}}  </li>
    </ul>
    
  </div>
@endsection