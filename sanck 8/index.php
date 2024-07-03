<?php 

include __DIR__ . "/array.php"

?>


<div> <?php foreach($animali as $speci){?>

    <div> <?php foreach($speci as $elementi){ ?>

        <p> <?php echo  $elementi["nome"] ?>  </p>
    
    </div>

    <?php } ?>
<?php } ?>

</div>