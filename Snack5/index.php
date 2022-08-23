<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 3000</title>
</head>

<body>
    <h1>Class 3000 Grades</h1>
    <?php
    $classStudents = [
        [
            'name' => 'Gianni',
            'lastName' => 'Rombi',
            'grades' => [
                'italiano' => 8,
                'geografia' => 6,
                'storia' => 7,
                'matematica' => 4,
                'latino' => 5,
                'greco' => 9,
                'scienze' => 6,
            ]
        ],
        [
            'name' => 'Martina',
            'lastName' => 'Lolli',
            'grades' => [
                'italiano' => 5,
                'geografia' => 3,
                'storia' => 6,
                'matematica' => 2,
                'latino' => 9,
                'greco' => 8,
                'scienze' => 4,
            ]
        ],
        [
            'name' => 'Mauro',
            'lastName' => 'Aroldi',
            'grades' => [
                'italiano' => 6,
                'geografia' => 7,
                'storia' => 6,
                'matematica' => 9,
                'latino' => 4,
                'greco' => 3,
                'scienze' => 7,
            ]
        ],
        [
            'name' => 'Ezio',
            'lastName' => 'Vero',
            'grades' => [
                'italiano' => 8,
                'geografia' => 6,
                'storia' => 5,
                'matematica' => 4,
                'latino' => 5,
                'greco' => 8,
                'scienze' => 5,
            ]
        ],
        [
            'name' => 'Marina',
            'lastName' => 'Chiesa',
            'grades' => [
                'italiano' => 8,
                'geografia' => 6,
                'storia' => 3,
                'matematica' => 4,
                'latino' => 5,
                'greco' => 9,
                'scienze' => 6,
            ]
        ],
        [
            'name' => 'Vasco',
            'lastName' => 'De Gama',
            'grades' => [
                'italiano' => 5,
                'geografia' => 6,
                'storia' => 9,
                'matematica' => 4,
                'latino' => 5,
                'greco' => 6,
                'scienze' => 6,
            ]
        ],
        [
            'name' => 'Valeria',
            'lastName' => 'Piazza',
            'grades' => [
                'italiano' => 8,
                'geografia' => 6,
                'storia' => 4,
                'matematica' => 4,
                'latino' => 8,
                'greco' => 6,
                'scienze' => 6,
            ]
        ],
        [
            'name' => 'Marta',
            'lastName' => 'Ribboni',
            'grades' => [
                'italiano' => 8,
                'geografia' => 5,
                'storia' => 7,
                'matematica' => 8,
                'latino' => 5,
                'greco' => 3,
                'scienze' => 6,
            ]
        ],
        [
            'name' => 'Alessio',
            'lastName' => 'Storni',
            'grades' => [
                'italiano' => 8,
                'geografia' => 6,
                'storia' => 7,
                'matematica' => 4,
                'latino' => 5,
                'greco' => 9,
                'scienze' => 6,
            ]
        ],
        [
            'name' => 'Carolina',
            'lastName' => 'Frezzani',
            'grades' => [
                'italiano' => 8,
                'geografia' => 6,
                'storia' => 6,
                'matematica' => 4,
                'latino' => 5,
                'greco' => 6,
                'scienze' => 6,
            ]
        ],
    ];

    

    ?>

    <?php for ($i = 0; $i < count($classStudents); $i++) { ?>
        <h2>
            <?php

                $averageGrade = ceil(array_sum($classStudents[$i]['grades']) / count($classStudents[$i]['grades']));

                echo $classStudents[$i]['name'] . ' ' . $classStudents[$i]['lastName'] . ' ' . '|' . ' '. $averageGrade;
            ?>
        </h2>

    <?php } ?>

</body>

</html>