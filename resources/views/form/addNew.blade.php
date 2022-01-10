@extends('app')

@section('header')

<h1>Add new item</h1>

@if ($errors->any())
  <div class="notification red">
    <h3>Error</h3>
    <div>
      @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
    </div>
  </div>
@endif

@section('content')

  <form action="/items" method="POST">
    {{ csrf_field() }}

    <div class="form">
      <label for="name">Name <span>of the item</span></label>
      <div class="container">
        <input type="text" name="name" id="name">
      </div>
      

      <label for="diameter">Diameter <span>in meters</span></label>
      <div class="container">
        <input type="number" min='0' name="diameter" id="diameter">
      </div>

      <label for="description">Description <span>of what is its purpose</span></label>
      <div class="container">
        <textarea type="text" name="description" id="description"></textarea>
      </div>
    </div>

    <div>
      <button type="submit">
        Add item
      </button>
    </div>
  </form>

@endsection