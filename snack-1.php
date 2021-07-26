<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica 
tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
 punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a 
 schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php

$partite = [

    [

        "Casa" => "Lakers - ",
        "Ospiti"  => "Dallas |",
        "Punto" => "95 -",
        "Punti" => "70",



    ],
    [

        "Casa" => "Bucks - ",
        "Ospiti"  => "Raptors |",
        "Punto" => "55 -",
        "Punti" => "80",



    ],
    [

        "Casa" => "Chicago Bulls - ",
        "Ospiti"  => "Boston |",
        "Punto" => "65 -",
        "Punti" => "30",



    ]





];

$lunghezza = count($partite);
//  echo $lunghezza;

// for($i = 0; $i < $lunghezza; $i++ ){

// echo $partite [$i]["Casa"];

// }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php for($i = 0; $i < $lunghezza; $i++ ){ ?>

    <div>

   

        <span><?php echo $partite [$i]["Casa"];?></span>
        <span><?php echo $partite [$i]["Ospiti"];?></span>

        <span><?php echo $partite [$i]["Punto"];?></span>
        <span><?php echo $partite [$i]["Punti"];?></span>


        </div>
        
             
               
                

    

    



    <?php } ?>



    
</body>
</html>
