<?php
ob_start();

?>
 <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

<section class="homepage">
    
        <h1>Tout les livres</h1>
        <a id='creer' href="/create">Créer</a>
</section>

<section>
    <div class="container">
<?php

    foreach ($livres as $livre) {
        ?>
    <div class='card'>
        <h2><?= $livre->getTitle()?></h2>  
        <p><?= $livre->getDescription() ?></p><br>
        <p>Sorti le : <?= $livre->getDate() ?></p>
        <a href="/affiche/<?= $livre->getId()?>"><i class="ri-eye-line"></i></a>
    </div>     
        

        <?php
    }
?>
</div>
</section>



<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
