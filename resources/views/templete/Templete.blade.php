<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <ul class="nav justify-content-center">
      
        <li class="nav-item">
          <a class="nav-link" href="{{route('practica1')}}"> Practica 1</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="{{route('practica2')}}">Pratica 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "href="{{route('ejercicio2')}}">Ejercicio 2</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link "href="{{route('ejercicio3')}}">Ejercicio 3</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link "href="{{route('ejercicio4')}}">Ejercicio 4</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link "href="{{route('ejercicio5')}}">Ejercicio 5</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link "href="{{route('ejercicio6')}}">Ejercicio 6</a>
        </li> 
      </ul>
      <div class="container">
          @yield('plantillaweb')
      </div>
  </body>
</html>