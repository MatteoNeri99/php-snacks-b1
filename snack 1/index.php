<?php 

    $partite=[
        [
            "casa" => "milano",
            "fuoriCasa" => "budapest",
            "punteggio" => "33-74"
        ],
        [
            "casa" => "roma",
            "fuoriCasa" => "bari",
            "punteggio" => "44-54"
        ],
        [
            "casa" => "parma",
            "fuoriCasa" => "cagliari",
            "punteggio" => "35-24"
        ],
        [
            "casa" => "ferrara",
            "fuoriCasa" => "torino",
            "punteggio" => "103-54"
        ],
    
    ];

    $squadre="";
    $punteggio="";

    foreach ($partite as $chiave => $valore){

        $squadre = $chiave . $chiave;

        $punteggio= $valore;

    };

        

    

   



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> <?php  echo $squadre ?></p>
    
</body>
</html>