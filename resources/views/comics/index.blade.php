@extends('layout.app')

@section('content')
<div class="container">
  <h1 class="text-center">All Comics</h1>
</div>
<main class="container">
  <table class="my-3">
    <th class="px-2">Titolo</th>
    <th class="px-2">Prezzo</th>
    <th class="px-2">Collezione</th>
    <th class="px-2">Data di vendita</th>
    <th class="px-2">tipo</th>
    @foreach($comics as $comic)
      <tr class="">
        <td class="px-2 border"> {{$comic['title']}} </td>
        <td class="px-2 border"> {{$comic['price']}} </td>
        <td class="px-2 border"> {{$comic['series']}} </td>
        <td class="px-2 border"> {{$comic['sale_date']}} </td>
        <td class="px-2 border"> {{$comic['type']}} </td>
        <td class="px-2 border"> <a href="{{route('comics.show', $comic->id)}}">Visualizza</a> </td>
        <td class="px-2 border"> <a href="{{route('comics.edit', $comic->id)}}">Modifica</a> </td>
        <td class="px-2 border">
          <form action="{{route('comics.destroy', $comic->id)}}" method='POST'>
              @csrf
              @method('DELETE')
              <button type='submit' class="rounded btn-dark">
                  Delete
              </button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
  <a href="{{route('comics.create')}}" id="create" class="btn-secondary p-2 border rounded">Create new Comic</a>
</main>
@endsection