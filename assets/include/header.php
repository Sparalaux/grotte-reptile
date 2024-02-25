<?php
if (isset($_SESSION["mail"])) {
    echo "<header>
    <link
        rel='shortcut icon'
        type='image/png'
        href='./assets/images/gecko.png'/>
    <ul class='menu'>
            <li><a href='./index.php'>Acceuil</a></li>
            <li><a href='./creation.php'>Creation</a></li>
            <li><a href='./aventure.php'>Aventure</a></li>
            <li><a href='./profil.php'>Profil</a></li>
            <li><a href='./deconnexion.php'>Deconnexion</a></li>
        </ul>
    </header>";
} else {
    echo "<header>
    <link
        rel='shortcut icon'
        type='image/png'
        href='./assets/images/gecko.png'/>
    <ul class='menu'>
            <li><a href='./index.php'>Acceuil</a></li>
            <li><a href='./creation.php'>Creation</a></li>
            <li><a href='./aventure.php'>Aventure</a></li>
            <li><a href='./connexion.php'>Connexion</a></li>
            <li><a href='./inscription.php'>Inscription</a></li>
        </ul>
    </header>";
}
