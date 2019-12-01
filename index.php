<?php
//controlar a que submit le doy:
//poner el mismo nombre a todos y distinto value y hacer un swtich case
switch ($_POST['calc']) {
// recibe el valor del sumbit que recibe el evento(el que pretamos)
    case '+':
        echo "<br/>Vas a sumar";
        break;
    case '-':
        echo "<br/>Vas a restar";
        break;
    case '*':
        echo "<br/>Vas a multiplicar";
        break;
    case ':':
        echo "<br/>Vas a dividir";
        break;
}

?>

<!DOCTYPE html>
<!--
FORMULARIO
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action="index.php" method="POST">
            <input type="submit" value="+" name="calc" />
            <input type="submit" value="-" name="calc" />
            <input type="submit" value="*" name="calc" />
            <input type="submit" value=":" name="calc" />
        </form>
    </body>
</html>
