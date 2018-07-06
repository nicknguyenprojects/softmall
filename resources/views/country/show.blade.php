<!DOCTYPE html>
<html>
  <head>
    <title>Country {{ $country->id }}</title>
  </head>
  <body>
    <h1>Country {{ $country->id }}</h1>
    <ul>
      <li>Make: {{ $country->make }}</li>
      <li>Model: {{ $country->model }}</li>
      <li>Produced on: {{ $country->produced_on }}</li>
    </ul>
  </body>
</html>