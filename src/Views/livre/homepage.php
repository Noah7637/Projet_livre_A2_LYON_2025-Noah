<?php
ob_start();
?>

<section class="homepage">
    <div id="tout">
        <div>
            <img src="/img/book.png" alt="book"/>
            <h1>Tout les livres</h1>
        </div>
        <button>Créer</button>
    </div>
</section>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
