
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;">ExercieXP 4  </h1>
<div class="container">
<?php

    // Declarer les tableaux
        $array1 = array('a','1','2','3','4');
        $array2 = array('a','3');

        // verification
        if (array_intersect($array2, $array1) === $array2) {
        echo "tous les éléments du sous-tableau ont été trouvés dans le tableau principal";
        } else {
        echo "tous les éléments du sous-tableau n'ont pas été trouvés dans le tableau principal";
        }
?>
</div>

</body>
</html>