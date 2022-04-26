@extends('layout.app')

@section('content')
<div class="container">
  <h2>Crea nuovo Comic</h2>
</div>
<div class="container">
  <form action="{{route('comics.store')}}" method="POST">
    <div>
      <label for="title">titolo</label>
      <input type="text" name="title" id="title" placeholder="Titolo new Comic">
    </div>
    <div>
      <label for="type">Tipo</label>
      <select name="type" id="type">
        <option value="">Seleziona il tipo</option>
        <option value="book">Comic Book</option>
        <option value="novel">Graphic Novel</option>
      </select>
    </div>
    <div>
      <label for="thumb">Immagine</label>
      <input type="text" name="thumb" id="thumb" placeholder="url immagine"> 
    </div>
    <div>
      <label for="price">Prezzo</label>
      <input type="text" name="price" id="price" placeholder="Prezzo Comic"> 
    </div>
    <div>
      <label for="series">Series</label>
      <input type="text" name="series" id="series" placeholder="Series Comic"> 
    </div>
    <div>
      <label for="sale_date">Sale Date</label>
      <input type="text" name="sale_date" id="sale_date" placeholder="Sale Date"> 
    </div>
    <div>
      <textarea name="description" id="description" placeholder="Write a Description" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">
      Create It!
    </button>
  </form>
</div>

@endsection