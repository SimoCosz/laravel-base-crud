@extends('layout.app')

@section('content')
<div class="container">
  <h2>Modifica Comic</h2>
</div>
<div class="container d-flex">
  <div>
    <img src="{{$comic->thumb}}" alt="">
  </div>
  <div class="container">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf
      @method('PUT')
        <div  class="d-flex flex-column mb-2 justify-content-around">
          <label class="m-0" for="title">titolo:</label>
          <input type="text" name="title" id="title" value="{{$comic->title}}" placeholder="Titolo new Comic">
        </div>
        <div  class="d-flex flex-column mb-2 justify-content-around">
          <label class="m-0" for="type">Tipo:</label>
          <select name="type" id="type">
            <option value="">Seleziona il tipo</option>
            <option value="book"  {{$comic->type == 'book'? 'selected' : ''}}>Comic Book</option>
            <option value="novel" {{$comic->type == 'novel'? 'selected' : ''}}>Graphic Novel</option>
          </select>
        </div>
        <div  class="d-flex flex-column mb-2 justify-content-around">
          <label class="m-0" for="thumb">Immagine:</label>
          <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}" placeholder="url immagine"> 
        </div>
        <div  class="d-flex flex-column mb-2 justify-content-around">
          <label class="m-0" for="price">Prezzo:</label>
          <input type="text" name="price" id="price" value="{{$comic->price}}" placeholder="Prezzo Comic"> 
        </div>
        <div  class="d-flex flex-column mb-2 justify-content-around">
          <label class="m-0" for="series">Series:</label>
          <input type="text" name="series" id="series" value="{{$comic->series}}" placeholder="Series Comic"> 
        </div>
        <div  class="d-flex flex-column mb-2 justify-content-around">
          <label class="m-0" for="sale_date">Sale Date:</label>
          <input type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}" placeholder="Sale Date"> 
        </div>
      <div  class="d-flex flex-column mb-2 justify-content-around">
        <p class="m-0">Description:</p> 
        <textarea name="description" id="description" placeholder="Write a Description" cols="30" rows="10">
          {{$comic->description}}
        </textarea>
      </div>
      <button type="submit" class="btn-secondary rounded col-12 my-3">
        Edit
      </button>
    </form>
  </div>
</div>

@endsection