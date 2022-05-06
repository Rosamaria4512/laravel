<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Ejercicio 5</title>
</head>

<body>
    <h2>digite los siguientes datos: </h2>
    <form action="{{Route('resultadoejercicio5')}}" method="POST">
        {{csrf_field() }}
        <label>Numero 1 </label>
        <input type="number" name="numero1"><br>
        <label>caracter </label>
        <input type="text" name="caracter"><br>
        <label>Numero 2</label>
        <input type="number" name="numero2"><br>
        <input type="submit" name="btn_enviar" value="Enviar">
        
        
        

        


    </form>
</body>

</html>