<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Atividade 10 PHP</title>
</head>
<style>
body {
   display: flex;
   justify-content: center;
   flex-direction: column;
   align-items: center;
   background-color: cornflowerblue;
   margin-top: 50px;
}

p {
   margin: 0;
   padding: 0;
}

.corverde {
   color: green;
}

.cormarrom {
   color: maroon;
}

.corwhite {
   color: white;
}
</style>

<body>
   <?php
      $Pinheiro = 
        "<p class=corwhite>X</p>
         <p class=corverde>XXX</p>
         <p class=corverde>XXXXX</p>
         <p class=corverde>XXXXXXX</p>
         <p class=corverde>XXXXXXXXX</p>
         <p class=corverde>XXXXXXXXXXX</p>
         <p class=corverde>XXXXXXXXXXXXX</p>
         <p class=corverde>XXXXXXXXXXXXXXX</p>
         <p class=cormarrom>XX</p>
         <p class=cormarrom>XX</p>
         <p class=corwhite>XXXX</p>";
      //--------------------
      echo $Pinheiro;
   ?>
</body>

</html>