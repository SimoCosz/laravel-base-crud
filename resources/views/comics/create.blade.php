@extends('layout.app')

@section('content')
<div class="container">
  <h2>Crea nuovo Comic</h2>
</div>
<div class="container">
  <form action="{{route('comics.store')}}" method="POST">
    @csrf

    <div class="d-flex flex-column mb-2 justify-content-around form-group">
      <label class="m-0 form-lable" for="title">titolo:</label>
      <input class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" type="text" name="title" id="title" placeholder="Title new Comic">
      @error('title')
          <div class="alert alert-danger"> {{$message}} </div>
      @enderror
    </div>

    <div class="d-flex form-group flex-column mb-2 justify-content-around">
      <label class="m-0 form-lable" for="type">Tipo:</label>
      <select class="form-control" name="type" id="type">
        <option value="">Selecte type</option>
        <option value="book" {{ old('type') == 'book'? 'selected' : '' }}>Comic Book</option>
        <option value="novel" {{ old('type') == 'novel'? 'selected' : '' }}>Graphic Novel</option>
      </select>
      @error('type')
          <div class="alert alert-danger"> {{$message}} </div>
      @enderror
    </div>

    <div class="d-flex form-group flex-column mb-2 justify-content-around">
      <label class="m-0 form-lable" for="thumb">Immagine:</label>
      <input class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')}}" type="text" name="thumb" id="thumb" placeholder="url image"> 
      @error('thumb')
        <div class="alert alert-danger"> {{$message}} </div>
      @enderror
    </div>

    <div class="d-flex form-group flex-column mb-2 justify-content-around">
      <label class="m-0 form-lable" for="price">Prezzo:</label>
      <input class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" type="text" name="price" id="price" placeholder="Comic Price"> 
    </div>

    <div class="d-flex form-group flex-column mb-2 justify-content-around">
      <label class="m-0 form-lable" for="series">Series:</label>
      <input class="form-control @error('series') is-invalid @enderror" value="{{old('series')}}" type="text" name="series" id="series" placeholder="Series Comic"> 
       @error('series')
        <div class="alert alert-danger"> {{$message}} </div>
      @enderror
    </div>

    <div class="d-flex form-group flex-column mb-2 justify-content-around">
      <label class="m-0 form-lable" for="sale_date">Sale Date:</label>
      <input class="form-control @error('sale_date') is-invalid @enderror" value="{{old('sale_date')}}" type="date" name="sale_date" id="sale_date" placeholder="Sale Date"> 
       @error('sale_date')
        <div class="alert alert-danger"> {{$message}} </div>
      @enderror
    </div>

    <div class="d-flex form-group flex-column mb-2 justify-content-around">
      <p class="m-0 form-lable">Description:</p> 
      <textarea class="form-control" name="description" id="description" placeholder="Write a Description" cols="30" rows="10"></textarea>
    </div>

    <button class="btn-secondary rounded mt-3 col-12" type="submit">
      Create It!
    </button>
  </form>

</div>

@endsection