<?php
ob_start();

?>
 <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <section class="homepage">
    <div id="tout">
        <div>
          
            <h1>Tout les livres</h1>
        </div>
        <a href="/create">Créer</a>
    </div>
</section>
<section class='livres'>
<?php

    foreach ($livres as $livre) {
        ?>
    <div class='livre'>
        <p><?= $livre->getTitle()?></p>  
        <p><?= $livre->getDescription() ?></p>
        <p>Sorti le : <?= $livre->getDate() ?></p>
        <a href="/affiche/<?= $livre->getId()?>"><i class="ri-eye-line"></i></a>
    </div>     
        

        <?php
    }
?>
</section>



<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
