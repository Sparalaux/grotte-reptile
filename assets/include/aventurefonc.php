<?php
include "./assets/include/connexionbdd.php";
if ($_SESSION["personnage"] != "none") {
    $personnage = $_SESSION["personnage"];
    $sql = "SELECT * FROM personnages WHERE nompersonnage='$personnage'";
    $requete = $connexion->query($sql);
    $personnages = $requete->fetch();
    switch ($personnages["genre"]) {
        case "homme":
            switch ($personnages["race"]) {
                case "humain":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_guerrier_humain.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_archer_humain.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_mage_humain.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_dompteur_humain.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_pretre_humain.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_voleur_humain.jpg'>";
                            break;
                    }
                    break;
                case "elfe":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_guerrier_elfe.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_archer_elfe.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_mage_elfe.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_dompteur_elfe.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_pretre_elfe.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_voleur_elfe.jpg'>";
                            break;
                    }
                    break;
                case "nain":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_guerrier_nain.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_archer_nain.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_mage_nain.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_dompteur_nain.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_pretre_nain.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_voleur_nain.jpg'>";
                            break;
                    }
                    break;
                case "demi-animal":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_guerrier_demi-animal.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_archer_demi-animal.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_mage_demi-animal.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_dompteur_demi-animal.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_pretre_demi-animal.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_voleur_demi-animal.jpg'>";
                            break;
                    }
                    break;
                case "demi-orc":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_guerrier_orc.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_archer_orc.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_mage_orc.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_dompteur_orc.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_pretre_orc.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_voleur_orc.jpg'>";
                            break;
                    }
                    break;
                case "demi-demon":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_guerrier_demon.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_archer_demon.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_mage_demon.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_dompteur_demon.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_pretre_demon.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_voleur_demon.jpg'>";
                            break;
                    }
                    break;
            }
            break;
        case "femme":
            switch ($personnages["race"]) {
                case "humain":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_guerrier_humain.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_archer_humain.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_mage_humain.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_dompteur_humain.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_pretre_humain.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_voleur_humain.jpg'>";
                            break;
                    }
                    break;
                case "elfe":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_guerrier_elfe.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_archer_elfe.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_mage_elfe.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_dompteur_elfe.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_pretre_elfe.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_voleur_elfe.jpg'>";
                            break;
                    }
                    break;
                case "nain":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_guerrier_nain.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_archer_nain.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_mage_nain.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_dompteur_nain.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_pretre_nain.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_voleur_nain.jpg'>";
                            break;
                    }
                    break;
                case "demi-animal":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_guerrier_demi-animal.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_archer_demi-animal.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_mage_demi-animal.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_dompteur_demi-animal.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_pretre_demi-animal.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_voleur_demi-animal.jpg'>";
                            break;
                    }
                    break;
                case "demi-orc":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_guerrier_orc.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_archer_orc.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_mage_orc.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_dompteur_orc.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_pretre_orc.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_voleur_orc.jpg'>";
                            break;
                    }
                    break;
                case "demi-demon":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_guerrier_demon.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_archer_demon.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_mage_demon.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_dompteur_demon.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_pretre_demon.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_voleur_demon.jpg'>";
                            break;
                    }
                    break;
            }
            break;
    };
}
$aleatest = rand(1, 2);

if (!empty($_POST['commencer'])) {
    if ($_POST['persochoix'] != "none") {
        insert();
    }
}
if (!empty($_POST['test'])) {
    if ($aleatest == 1) {
        test1();
    } else {
        test2();
    }
}
function insert()
{
    echo "Bienvenue a toi " . $_SESSION["personnage"] . "<br>";
    echo "Tu t'apprete à démarrer ton aventure dans se monde fantastique!<br>";
    echo "Affronte ses péripéthie afin d'aquerir honneur, gloire et fortune.<br><br>";
    echo $_SESSION["imgperso"] . "<br>";
    echo "<form action='' method='POST'>";
    echo "<input type='submit' class='btn' name='test' value='test'>";
    echo "</form>";
    exit;
}
function test1()
{
    echo "je suis le test1";
    exit;
}

function test2()
{
    echo "je suis le test2";
    exit;
}
