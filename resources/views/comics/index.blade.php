@extends('layout.app');

@section('content')
  <table>
    <th>Titolo</th>
    <th>Prezzo</th>
    <th>Collezione</th>
    <th>Data di vendita</th>
    <th>tipo</th>
    @foreach($comics as $el)
      <tr>
        <td> {{$el['title']}} </td>
        <td> {{$el['price']}} </td>
        <td> {{$el['series']}} </td>
        <td> {{$el['sale_date']}} </td>
        <td> {{$el['type']}} </td>
      </tr>
    @endforeach
  </table>
@endsection