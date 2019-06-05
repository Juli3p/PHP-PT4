<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 4</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid bg-info">
      <div class="container">
        <h1 class="display-3">Exercices-04</h1>
        <p class="lead">PHP-Pt4</p>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center mb-3">
<?php
  function number($num1, $num2){
    if ($num1>$num2){
      echo 'Le premier nombre est plus grand ';
    }
    elseif($num1<$num2){
      echo 'Le premier nombre est plus petit ';
    }
    else{
      echo 'Les deux nombres sont identiques ';
    }
  }
  $num1=rand(20,40);
  $num2=rand(20,40);
  $res=number($num1, $num2);
  echo 'Le premier est '.$num1.' Le deuxième est '.$num2;
  echo $res;
?>
</div>
</body>
</html>
