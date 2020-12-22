<?php 
    $matches = [
        "Partita 1" => [
            'squadra casa' => 'Armani Milano',
            'squadra ospite' => 'Virtus Bologna',
            'punti casa' => 70,
            'punti ospite' => 95
        ],
        "Partita 2" => [
            'squadra casa' => 'Allianz Trieste',
            'squadra ospite' => 'Openjobmetis Varese',
            'punti casa' => 55,
            'punti ospite' => 32
        ],
        "Partita 3" => [
            'squadra casa' => 'DeLonghi Treviso',
            'squadra ospite' => 'Dolomiti Energia Trentino',
            'punti casa' => 86,
            'punti ospite' => 73
        ]
    ]
?>

<h2>Le partite sono terminate con questi punteggi: </h2><br>
<?php 
    foreach($matches as $var) {
        echo $var['squadra casa']. "\n - \n" . $var['squadra ospite']. "\n | \n" . $var['punti casa']. "-". $var['punti ospite'] . "<br>" ;
    }
?>
