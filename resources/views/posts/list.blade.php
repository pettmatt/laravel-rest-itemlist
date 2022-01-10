@extends('app')

@section('header')

<h1>List</h1>

@if (session('notification'))
  <div class="notification">
    <h3>Notification</h3>
    <p>{{ session('notification') }}</p>
  </div>
@endif

@if (session('removed'))
  <div class="notification red">
    <h3>Notification</h3>
    <p>{{ session('removed') }}</p>
  </div>
@endif

@if (session('added'))
  <div class="notification green">
    <h3>Notification</h3>
    <p>{{ session('added') }}</p>
  </div>
@endif

@if (session('update'))
  <div class="notification blue">
    <h3>Notification</h3>
    <p>{{ session('update') }}</p>
  </div>
@endif

@section('content')

  @if (count($items) > 1)
    <div>
      <p>List of {{ count($items) }} random items</p>
    </div>
  @endif
  
  @if (count($items) > 0)
    <ul class="list">

      <div class="grid list-header">
        <p>Name</p>
        <p>Diameter</p>
        <p>Description</p>
      </div>

      @foreach ($items as $item)
      
      <div class="item">
        <a href="/items/{{ $item->id }}">
          <div class="grid">
            <p class="name">{{ $item->name }}</p>
            <p>{{ $item->diameter }}m</p>
            <p>{{ substr($item->description, 0, 50) . '...' }}</p>
          </div>
        </a>
        <a class="delete red" href="delete/{{ $item->id }}">Delete</a>
      </div>

      @endforeach
    </ul>

  @else
    <p>No items found. Please <a class="yellow" href="/new">add</a> items.</p>

  @endif

@endsection