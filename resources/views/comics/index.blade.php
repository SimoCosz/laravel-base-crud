@extends('layout.app')

@section('content')
  <table>
    <th>Titolo</th>
    <th>Prezzo</th>
    <th>Collezione</th>
    <th>Data di vendita</th>
    <th>tipo</th>
    @foreach($comics as $comic)
      <tr>
        <td> {{$comic['title']}} </td>
        <td> {{$comic['price']}} </td>
        <td> {{$comic['series']}} </td>
        <td> {{$comic['sale_date']}} </td>
        <td> {{$comic['type']}} </td>
        <td> <a href="{{route('comics.show', $comic->id)}}">Visualizza</a> </td>
      </tr>
    @endforeach
  </table>
  <a href="{{route('comics.create')}}">Create new Comics</a>
@endsection