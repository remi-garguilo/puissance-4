<header>
    <nav>
    <h1>Puissance 4</h1>
        <?php
        if(isset($_SESSION['user'])){?>
            <ul>
                <a href="../index.php"><li>Accueil</li></a>
                <a href="puissance4.php"><li>Puissance 4</li></a>
                <a href="classement.php"><li>Classement</li></a>
                <a href="disconnect.php"><li>Deconnexion</li></a>
            </ul>
        <?php } ?>
    </nav>
</header>
<link rel="stylesheet" type="text/css" href="../public/css/header.css">