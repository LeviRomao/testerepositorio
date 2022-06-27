<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolar Rosário</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
        background-color: crimson;
        display: flex;
        flex-direction: column;
        height: 100vh;
        align-items: center;
        justify-content: center;
        gap: 35px;
    }
        h2{color: aqua;}
     form{
        gap: 14px;
        display: flex;
        flex-direction: column;
    }
    </style>
</head>
<body>
    <form method="get" action="index.php">
        <label for="nota1"></label>
        <input type="number" name="nota1" placeholder="A primeira nota">
        <label for="nota2"></label>
        <input type="number" name="nota2"  placeholder="A segunda nota">
        <input type="submit" value="Enviar">  
    </form>
    <?php 
        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:000;
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]:000; 
        $media = ($n2 + $n1) / 2;
        if($media >= 7) {
            echo "<h2> Aluno ficou com $media na média";
            echo "<h2> Aluno passou de ano, parabéns!!";
        }elseif($media >=5 && $media < 7){
            echo"<h2> Aluno ficou com $media na média";
            echo"<h2> Aluno está de recuperação";
        }else{
            echo "<h2> Aluno ficou com $media na média";
            echo "<h2>Aluno está reprovado";
        }
    ?>
</body>
</html>