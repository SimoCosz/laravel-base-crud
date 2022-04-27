@extends('layout.app')

@section('content')
<div class="container">
  <h2>Crea nuovo Comic</h2>
</div>
<div class="container">
  <form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="d-flex flex-column mb-2 justify-content-around">
      <label class="m-0" for="title">titolo:</label>
      <input class="align-self-start" type="text" name="title" id="title" placeholder="Title new Comic">
    </div>
    <div class="d-flex flex-column mb-2 justify-content-around">
      <label class="m-0" for="type">Tipo:</label>
      <select class="align-self-start" name="type" id="type">
        <option value="">Selecte type</option>
        <option value="book">Comic Book</option>
        <option value="novel">Graphic Novel</option>
      </select>
    </div>
    <div class="d-flex flex-column mb-2 justify-content-around">
      <label class="m-0" for="thumb">Immagine:</label>
      <input class="align-self-start" type="text" name="thumb" id="thumb" placeholder="url image"> 
    </div>
    <div class="d-flex flex-column mb-2 justify-content-around">
      <label class="m-0" for="price">Prezzo:</label>
      <input class="align-self-start" type="text" name="price" id="price" placeholder="Comic Price"> 
    </div>
    <div class="d-flex flex-column mb-2 justify-content-around">
      <label class="m-0" for="series">Series:</label>
      <input class="align-self-start" type="text" name="series" id="series" placeholder="Series Comic"> 
    </div>
    <div class="d-flex flex-column mb-2 justify-content-around">
      <label class="m-0" for="sale_date">Sale Date:</label>
      <input class="align-self-start" type="text" name="sale_date" id="sale_date" placeholder="Sale Date"> 
    </div>
    <div class="d-flex flex-column mb-2 justify-content-around">
      <p class="m-0">Description:</p> 
      <textarea class="align-self-start" name="description" id="description" placeholder="Write a Description" cols="30" rows="10"></textarea>
    </div>
    <button class="btn-secondary rounded mt-3 col-12" type="submit">
      Create It!
    </button>
  </form>
</div>

@endsection