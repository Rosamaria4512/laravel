<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Practica 1</title>
</head>

<body>
    <h2>Crear la serie de un numero</h2>

    <form action="{{Route('resultado_pr1')}}" method="POST">
        {{csrf_field() }}
        <label>digite un numero entero para la serie </label>
        <input type="number" name="numero1" placeholder="numero naturales">
        <input type="submit" name="btn_enviar" value="Presionar">

    </form>
</body>

</html>