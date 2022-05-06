<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Ejercicio 2</title>
</head>

<body>
    <form action="{{Route('resultadoejercicio2')}}" method="POST">
        {{csrf_field() }}
    <h2>calificacion de parciales </h2>
        <label>calificacion1 : </label>
        <input type="number" name="calificacion1" placeholder="calificacion 1" step="0.1"><br>
        <label>calificacion 2 : </label>
        <input type="number"  name="calificacion2" placeholder="calificacion 2" step="0.1"><br>
        <label>calificacion 3: </label>
        <input type="number" name="calificacion3" placeholder="calificacion 3"step="0.1"><br>
         
    <h2>Resultado de notas</h2>

    {{-- <form action="{{Route('resultadoejercicio2')}}" method="POST">
        {{csrf_field() }} --}}
    
        <label>digite Nota 1: </label>
        <input type="number" name="nota1" placeholder="nota practica" step="0.1"><br>
        <label>digite Nota 2: </label>
        <input type="number" name="nota2" placeholder="examen final" step="0.1"><br>

        <input type="submit" name="btn_enviar" value="Enviar">

    </form>
</body>

</html>