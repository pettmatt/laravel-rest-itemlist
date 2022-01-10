<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
  <title>Space for items</title>
</head>
<body>

  @yield('header')

  <ul class="own-space">
    <li><a href="/">Frontpage</a></li>
    <li><a href="/items">List</a></li>
    <li><a href="/new">Add new item</a></li>
  </ul>

  @yield('content')

</body>
</html>