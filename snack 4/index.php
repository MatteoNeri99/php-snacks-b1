<?php 

$numbers=[];




for ($i=0; $i<15; $i++){

    $controllo= true;

    while($controllo){

        $number=rand(1,100);
        if ( !in_array($number, $numbers) ){

            $numbers[]=$number;
            $controllo=false;
    
        };
    }

 

   


};

var_dump($numbers)
?>

