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

        echo "<li><strong>" . $squadraCasa . " - " . $tappeStagione[$i] . " | " . $punteggioPartita . "</strong></li>";
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
    <li><strong><?php echo strtoupper($access) ?></strong></li>
    <li>Nome utente: <?php echo $userEmail ?></li>
    <li>Età utente: <?php echo $userAge ?></li>
    <li>Mail utente: <?php echo $userName ?></li>
</ul>

<?php

## Snack 3
/*Creare un array di array. Ogni array figlio avrà come chiave una data in questo 
formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.*/

$posts = [
    "10/01/2015" => [
        [
            "title" => "Post 1",
            "author" => "Paolo",
            "text" => "lorem"
        ]
    ],

    "11/01/2015" => [
        [
            "title" => "Post 1",
            "author" => "Paolo",
            "text" => "lorem"
        ],

        [
            "title" => "Post 2",
            "author" => "Marco",
            "text" => "lorem ipsum"
        ]
    ],

    "12/01/2015" => [
        [
            "title" => "Post 1",
            "author" => "Paolo",
            "text" => "lorem"
        ],

        [
            "title" => "Post 2",
            "author" => "Marco",
            "text" => "lorem ipsum"
        ],

        [
            "title" => "Post 3",
            "author" => "Matteo",
            "text" => "lorem ipsum dolor"
        ],
    ]

]
?>

<h1>Snack #3</h1>
<?php
$texts_dates = array_keys($posts);

?>

<ul>
    <?php

    for ($i = 0; $i < count($texts_dates); $i++) {
        $texts = $texts_dates[$i];
        $currentElement = $posts[$texts];
        
        for ($j = 0; $j < count($currentElement); $j++) {
            $texts_content = $currentElement[$j]
            
            ?>
            <li><strong><?php echo $texts?></strong>
                <ul>
                    <li><?php echo $texts_content["title"] ?></li>
                    <li><?php echo $texts_content["author"] ?></li>
                    <li><?php echo $texts_content["text"] ?></li>
                </ul>
            </li>
    <?php
        }
    }
    ?>
</ul>



<?php
## Snack 4
/*Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo
stesso numero più di una volta*/
?>
<h1>Snack #4</h1>

<?php
$array = [];

for ($i = 0; $i < 15; $i++) {
    $randomNumber = rand(0, 100);

    if (!in_array($randomNumber, $array)) {
        array_push($array, $randomNumber);
    } else {
        $i--;
    }
}

$comma_separated = implode(", ", $array);

?>

<p><strong>Number Array: </strong><?php echo $comma_separated ?></p>
<p><strong>Number Array Length: </strong><?php echo count($array) ?> numeri.</p>