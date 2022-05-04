<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Ejercicio 3</title>
</head>

<body>
    <h2>datos de empleado </h2>
    <form action="{{Route('resultadoejercicio3')}}" method="POST">
        {{csrf_field() }}
        <label>Nombres y apellidos</label>
        <input type="tex" name="nombresyapellidos" placeholder="nombres y apellidos"><br>
        <label>horas de trabajo mensual </label>
        <input type="number" name="horasdetrabajomensual" placeholder="horas de trabajo mensual"><br>
        <label>Valor por hora </label>
        <input type="number" name="valorporhora" placeholder="valor por hora"><br>
        <label>Bonificacion </label>
        <input type="number" name="bonificacion" placeholder="bonificacion"><br>
        <label>auxilio de transporte </label>
        <input type="number" name="auxiliodetransporte" placeholder="auxilio de transporte"><br>
        <label>credito </label>
        <input type="number" name="credito" placeholder="credito"><br>
        <input type="submit" name="btn_enviar" value="Enviar">
        
        
        

        


    </form>
</body>

</html>