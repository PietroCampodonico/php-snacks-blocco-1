<?php
## Snack 1
/*Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di 
 casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo 
schema.
Olimpia Milano - Cantù | 55-60*/

$squadraCasa = "Olimpia Milano";

$tappeStagione = ["Venezia", "Virtus Bologna", "Brindisi", "Trento", "Dinamo Sassari"];
?>

<h1>Snack #1</h1>

<ul style="list-style: none;">
    <?php
    for ($i = 0; $i < count($tappeStagione); $i++) {

        $punteggioPartita = rand(9, 62) . "-" . rand(9, 62);

        echo "<li><strong>" . $squadraCasa . " - " . $tappeStagione[$i] . " | " . $punteggioPartita . "</li>";
    }
    ?>
</ul>


<?php
## Snack 2
/*Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e
una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato”*/

$userName = $_GET["name"];

$userEmail = $_GET["mail"];

$userAge = $_GET["age"];

$access = "Accesso negato";

?>

<h1>Snack # 2</h1>

<ul style="list-style: none;">
    <?php
    if (strlen($userName) > 3 && strpos($userEmail, "@") && strpos($userEmail, ".") && is_numeric($userAge)) {
        $access = "Accesso consentito";
    }
    ?>
    <li><?php echo strtoupper($access) ?></li>
    <li>Nome utente: <?php echo $userEmail ?></li>
    <li>Età utente: <?php echo $userAge ?></li>
    <li>Mail utente: <?php echo $userName ?></li>
</ul>