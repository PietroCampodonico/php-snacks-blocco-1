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

       echo "<li><strong>" . $squadraCasa . " - " . $tappeStagione[$i] . " | " . $punteggioPartita. "</li>";
    }
    ?>
</ul>
