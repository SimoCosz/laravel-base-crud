@extends('layout.app')

@section('content')
  <div class="container">

    <img src="{{$comics['thumb']}}" alt="">
    <h3> {{$comics->title}} </h3>
    <ul>
      <li>$ {{$comics->price}}  </li>
      <li> {{$comics->sale_date}}  </li>
      <li> {{$comics->series}}  </li>
      <li> {{$comics->type}}  </li>
      <li> {{$comics->description}}  </li>
    </ul>
    <div class="px-2 border rounded p-2 text-center mb-3"> <a href="{{route('comics.edit', $comics->id)}}">Edit</a> </div\>
  </div>
@endsection