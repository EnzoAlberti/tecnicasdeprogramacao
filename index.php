<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Jogo</title>
</head>
<body>
    <h1>Acerte o número!</h1>
    <form action="index.php" method="post">
        <label>Digite um número: </label>
        <input type="number" name="txtnum">
    </form>
    <?php
        $num = get_POST['txtnum'];
        $na = random_int(1,50);
        $r = false;

        while($r != true){
            if($num > $na){
                echo "<p>O número $num, é maior que o número aleatorio.</p>";
            }elseif($num < $na){
                echo "<p> o número $num, é menor que o número aleatorio</p>";
            }else{
                echo "<p>pabens! Você acertou o número.";
                $r = true;
            }
            echo "<form action='index.php' method='post'>";
            echo    "<label>Digite um número: </label>";
            echo    "<input type='number' name='txtnum'>";
            echo "</form>"; 
        }
    ?>
</body>
</html>