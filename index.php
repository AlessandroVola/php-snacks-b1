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

<h2>Snack 2</h2>

<?php
    

    
?>






<hr>
<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
<h2>Snack 3</h2>

<?php

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];


    for ($i = 0;$i< count($posts);$i++){

        $date = $posts[$i];

        ?>
            <h4><?= $date ?></h4>
            <p><?= $date['title'] ?></p>
            <p><?= $date['author'] ?></p> 
            <p><?= $date['text'] ?></p>  
        <?php
    }
?>

