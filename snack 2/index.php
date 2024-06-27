<?php

$ok="";

if (strlen($_GET["name"]) < 3 && $_GET["mail"] / "@" && is_numeric($_GET["age"])){
    $ok="tutto corretto";

}else{
    $ok="non corretto";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./index.php" method="GET">

<input type="text" name="name" id="name" placeholder="nome">
<input type="mail" name="mail" id="mail"  placeholder="email">
<input type="text" name="age" id="age"  placeholder="age">
<button type="submit">invia</button>


</form>

<p> <?php echo $ok ?> </p>
</body>
</html>

