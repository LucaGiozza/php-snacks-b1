<!-- Snack 2
Passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo
 di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

// name



if(empty($_GET['name'])){

    $nome = 'la casella nome è vuota';

}else{

    $name = $_GET['name'];

    if(strlen($name) > 3 ){
        $nome = 'Il nome inserito è valido';
    }else{
        $nome = 'Il nome inserito non è valido';

    }
}


// mail

if(empty($_GET['mail'])){

    $stringa = 'la casella mail è vuota';

}else{

    $mail = $_GET['mail'];

    if(strpos($mail, '@') !== false && strpos($mail, '.') !== false){
        $stringa = 'La mail inserita è valida';
    }else{
        $stringa = 'La mail inserita non  è valida';

    }
}

// age


if(empty($_GET['age'])){

    $eta = 'la casella età è vuota';

}else{

    $age = $_GET['age'];

    if(is_numeric($age)){
        $eta = 'inserimento valido';
    }else{
        $eta = 'inserimento non valido, è richiesto un numero';

    }
}

$age = $_GET['age'];
$mail = $_GET['mail'];
$name = $_GET['name'];


if(is_numeric($age) && strpos($mail, '@') !== false && strpos($mail, '.') !== false && strlen($name) > 3  ){
    $successo = 'campi inseriti correttamente';

}else{
    $successo = 'campi non inseriti correttamente';
}





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

  <p> 
      <?php

      echo $stringa;
      

?>
</p>
<p> 
      <?php

      echo $nome;
      

?>
</p>

<p> 
      <?php

      echo $eta;
      

?>
</p>
<p> 
      <?php

      echo $successo;
      

?>
</p>



 
      
  </body>
  </html>