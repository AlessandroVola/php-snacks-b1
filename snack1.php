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











