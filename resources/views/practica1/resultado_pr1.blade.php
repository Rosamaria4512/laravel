<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usted digito el numero: {{$numero1}}</h1>
    {{$a=1;}}
    @while ($a <= $numero1) <br>
    {{$a+=1;}}
        
        {{$numero1 . "X".$a."=".$numero1*$a;}}
       
    @endwhile
</body>
</html>