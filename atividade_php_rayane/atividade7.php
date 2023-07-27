<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Atividade 7 PHP</title>
</head>
<style>
body {
   display: flex;
   justify-content: center;
   flex-direction: column;
   align-items: flex-start;
   background-color: cornflowerblue;
   margin-left: 40%;
   margin-top: 60px;
}

p {
   margin: 0;
   padding: 0;
   word-spacing: 20px;
}

#espaco1 {
   word-spacing: 55px;
}

#espaco2 {
   word-spacing: 50px;
}

#espaco3 {
   word-spacing: 47px;
}

#espaco4 {
   word-spacing: 39px;
}
</style>

<body>
   <?php
      $coluna1 = "ALUNO(A)";
      $divisao1 = "=========";
      $aluno1 = "ALINE";
      $aluno2 = "MÁRIO";
      $aluno3 = "SERGIO";
      $aluno4 = "SHIRLEY";

      $coluna2 = "NOTA";
      $divisao2 = "=====";
      $nota1 = 9.0;
      $nota2 = "DEZ";
      $nota3 = 4.5;
      $nota4 = 7.0;
      //--------------------

      echo "<p>$coluna1 $coluna2</p>";
      echo "<p>$divisao1 $divisao2</p>";
      echo "<p id=espaco1>$aluno1  $nota1</p>";
      echo "<p id=espaco2>$aluno2  $nota2</p>";
      echo "<p id=espaco3>$aluno3  $nota3</p>";
      echo "<p id=espaco4>$aluno4  $nota4</p>";

   ?>
</body>
</html>