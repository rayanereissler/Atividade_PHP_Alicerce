<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Atividade 6 PHP</title>
</head>
<style>
body {
   display: flex;
   justify-content: center;
   flex-direction: column;
   align-items: center;
   background-color: cornflowerblue;
   margin: 100px;
}

p {
   margin: 0;
   padding: 0;
}

.contorno {
   letter-spacing: 5px;
}

.superior,
.interior,
.inferior {
   display: flex;
   align-self: center;
   letter-spacing: 55px;
   margin-left: 50px;
}
</style>

<body>
   <?php
      $Quadrado = 
        "
        <p class=contorno>XXXXX</p>
        <p class=superior>XX</p>
        <p class=interior>XX</p>
        <p class=inferior>XX</p>
        <p class=contorno>XXXXX</p>
        ";
      //--------------------
      echo $Quadrado;
   ?>
</body>
</html>