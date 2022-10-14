<!-- Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $class = [
        [
            'name' => 'Luca';
            'surname' => 'Tedioli',
            'votes' => [7,5,6,4,8],
        ],
        [
            'name' => 'Luca';
            'surname' => 'Tedioli',
            'votes' => [7,5,6,4,8],
        ],
        [
            'name' => 'Luca';
            'surname' => 'Tedioli',
            'votes' => [7,5,6,4,8],
        ],
    ];

    for ($i = 0; $i < count($class); $i++){

        $student = $class[$i];

        $voteAverge = array_sum($student['votes']) / count($student['votes']);
        ?>
            <h3> <?=$student['name'] ?>   </h3>
            <p> <?=$voteAverage ?> </p>
        <?php
    }



?>