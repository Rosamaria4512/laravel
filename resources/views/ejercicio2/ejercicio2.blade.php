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
    <h2>calificacion de parciales </h2>
    <label>calificacion 1: </label>
        <input type="number" name="nota1" placeholder="nota 1"><br>
        <label>calificacion 2: </label>
        <input type="number" name="nota1" placeholder="nota 2"><br>
        <label>calificacion 3: </label>
        <input type="number" name="nota1" placeholder="nota 3"><br>
        <label for="su calificacion final del parcial es" .calfinal></label>

        
    <h2>Resultado de notas</h2>

    <form action="{{Route('resultado_pr')}}" method="POST">
        {{csrf_field() }}
        <label>digite Nota 1: </label>
        <input type="number" name="nota1" placeholder="nota 1"><br>
        <label>digite Nota 2: </label>
        <input type="number" name="nota1" placeholder="nota 2"><br>
        <label>digite Nota 3: </label>
        <input type="number" name="nota1" placeholder="nota 3"><br>

        <input type="submit" name="btn_enviar" value="Enviar">

    </form>
</body>

</html>