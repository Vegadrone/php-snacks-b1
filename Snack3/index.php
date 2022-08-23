<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Numbers</title>
</head>
<body>
    <h1>Random Numbers</h1>
    <?php

        $arrayOfUniqueNumbers = [];

        while(count($arrayOfUniqueNumbers) < 15){
            $randomNumber = rand(1,30);
            if(!in_array($randomNumber, $arrayOfUniqueNumbers)){
                $arrayOfUniqueNumbers[] = $randomNumber;
            }
        }
    
        var_dump($arrayOfUniqueNumbers);

    ?>
</body>
</html>