<?php 

include __DIR__ . "/array.php"

?>


<div> <?php foreach($alunni as $nomi){?>


<p> <?php echo $nomi["nome"] . " " . $nomi["cognome"] ?> </p>


<?php }?> 

  <div> <?php foreach($alunni["voti"] as $voti=> $voto){?>

    <p> <?php echo $voto . $voti ?></p>
    <?php }?> 
    </div>
</div>