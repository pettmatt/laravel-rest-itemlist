@extends('app')

@section('header')

<h1>Single</h1>

@section('content')

<ul>
  <li><a class="yellow" href="{{ $_SERVER['REQUEST_URI'] }}/update">Update</a></li>
  <li><a class="red" href="/delete/{{ $item->id }}">Delete</a></li>
</ul>

<div>
  <h2>{{ $item->name }}</h2>

  <div>
    <h4>Diameter</h4>
    <p>{{ $item->diameter }}m</p>
  </div>
  
  <div>
    <h4>Description</h4>
    <p>{{ $item->description }}</p>
  </div>
</div>

@endsection