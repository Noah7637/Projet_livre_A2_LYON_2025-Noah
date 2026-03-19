<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>— Livres —</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <h1><a href="/">Mes Livres</a></h1>
        <a href="/">Voir Livres</a>        
    </header>

    <main>
        <?php echo $content; ?>
        <?php
    
?>
        
    </main>
</body>
</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['old']);
