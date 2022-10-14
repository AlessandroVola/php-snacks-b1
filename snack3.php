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


    $postDates = array_keys($posts);

    

    for ($i = 0; $i< count($postDates); $i++){

        $currentDate = $postDates[$i];

        echo ('<h2>'. $currentDate . '</h2>' );

        $currentPosts = $posts[$currentDate];

        for($postCounter = 0; $postCounter < count($currentPosts); $postCounter++){
            $post = $currentPosts[$postCounter];
            ?>
                <div>
                    <h3> <?=$post['title'] ?> </h3>
                    <h4> <?=$post['author'] ?> </h4>
                    <p> <?=$post['text'] ?> </p>
                </div>
            <?php

        }
    }
?>