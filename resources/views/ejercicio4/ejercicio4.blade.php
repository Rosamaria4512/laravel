<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Ejercicio 4</title>
</head>

<body>
    <form action="{{Route('resultadoejercicio4')}}" method="POST">
        {{csrf_field() }}
    <h2>Digite valor de x: </h2>
        <label>valorx: </label>
        <input type="number" name="x" placeholder="digite valor"><br>
        <input type="submit"  name="btn_enviar" value="enviar">
    </form>
    
         
   