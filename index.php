<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<h2>Snack 1</h2>

<?php
    $matches = [
        [
            'squadraCasa' => 'Olimpia Milano',
            'squadraOspite' => 'Cantu',
            'puntiCasa' => 55,
            'puntiOspite' => 60,
        ],
        [
            'squadraCasa' => 'Olimpia Milano',
            'squadraOspite' => 'Fortitudo',
            'puntiCasa' => 85,
            'puntiOspite' => 100,
        ]
    ];

    
    for ($i = 0;$i < count($matches); $i++){

        $match = $matches[$i];        
        ?>
            <p><?= $match['squadraCasa'] ?> - <?= $match['squadraOspite'] ?> | <?= $match['puntiCasa'] ?> - <?= $match['puntiOspite'] ?></p> 
        <?php
    }
?>

<hr>
<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->






<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

