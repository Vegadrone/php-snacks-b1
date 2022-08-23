<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite</title>
</head>

<body>

<h1>Match Results</h1>
    <?php
        $matchesResults = [
            [
                'firstTeam' => 'Lakers',
                'secondTeam' => 'Bulls',
                'scoreFirstTeam' => 51,
                'scoreSecondTeam' => 35,
            ],

            [
                'firstTeam' => 'Celtics',
                'secondTeam' => 'Raptors',
                'scoreFirstTeam' => 23,
                'scoreSecondTeam' => 25,
            ],
            [
                'firstTeam' => 'Warriors',
                'secondTeam' => 'Heat',
                'scoreFirstTeam' => 50,
                'scoreSecondTeam' => 79,
            ],

            [
                'firstTeam' => 'Cavaliers',
                'secondTeam' => 'Bucks',
                'scoreFirstTeam' => 52,
                'scoreSecondTeam' => 25,
            ],

            [
                'firstTeam' => 'Mavericks',
                'secondTeam' => 'Pelicans',
                'scoreFirstTeam' => 120,
                'scoreSecondTeam' => 145,
            ],
        ];
    ?>

    <?php for ($i = 0; $i < count($matchesResults); $i++){ ?>
        <h5>
            <?php 
                echo $matchesResults[$i]['firstTeam'] . ' - ' . $matchesResults[$i]['secondTeam'] 
                . ' ' . '|' . ' ' . $matchesResults[$i]['scoreFirstTeam']. ' - ' . $matchesResults[$i]['scoreSecondTeam'];
            ?>
        </h5>
    <?php } ?>


</body>

</html>