@extends('app')

@section('header')

<h1>Edit item</h1>

@section('notification')

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

    @if (isset($item))

    <form action="/items/{{ $item->id }}" method="POST">
        {{ csrf_field() }}

        <div class="form">
            <label for="name">Name <span>of the item</span></label>
            <div class="container">
                <input type="text" name="name" id="name" value="{{ $item->name }}">
            </div>

            <label for="diameter">Diameter <span>in meters</span></label>
            <div class="container">
                <input type="number" min='0' name="diameter" id="diameter" value="{{ $item->diameter }}">
            </div>

            <label for="description">Description <span>of what is its purpose</span></label>
            <div class="container">
                <textarea type="text" name="description" id="description">{{ $item->description }}</textarea>
            </div>
        </div>

        <div>
            <button type="submit">
                Update item
            </button>
        </div>
    </form>
        
    @endif

@endsection