<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Atividade 8 PHP</title>
</head>
<style>
body {
   display: flex;
   justify-content: center;
   flex-direction: column;
   align-items: center;
   background-color: cornflowerblue;
   margin-top: 100px;
}

p {
   margin: 0;
   padding: 0;
   color: black;
   font-family: 'Courier New', Courier, monospace;
}

.linha1,
.linha3 {
   letter-spacing: 1px;
}

.linha2 {
   letter-spacing: 17px;
}
</style>

<body>
   <?php
      $Letra  = 
        "
        <div>
        <p class=linha1>P P P</p>
        <p class=linha2>P P</p>
        <p class=linha3>P P P</p>
        <p class=linha4>P</p>
        <p class=linha4>P</p>
        </div>
        ";
      //--------------------
      echo $Letra;
   ?>
</body>

</html>