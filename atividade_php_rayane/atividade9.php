<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Atividade 9 PHP</title>
</head>
<style>
body {
   display: flex;
   justify-content: center;
   flex-direction: column;
   align-items: flex-start;
   background-color: cornflowerblue;
   margin-left: 45%;
   margin-top: 100px;
}
</style>

<body>
   <?php
      $Fim  = "0 - Fim";
      $Inclui  = "1 - Inclui";
      $Altera  = "2 - Altera";
      $Exclu  = "3 - Exclui";
      $Consulta  = "4 – Consulta";
      //--------------------

      echo $Fim. "</br>"; 
      echo $Inclui. "</br>";
      echo $Altera. "</br>";
      echo $Exclu. "</br>";
      echo $Consulta. "</br>";

   ?>
</body>

</html>