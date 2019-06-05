<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 5</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid bg-info">
      <div class="container">
        <h1 class="display-3">Exercices-05</h1>
        <p class="lead">PHP-Pt4</p>

      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center mb-3">
    <?php
         // Définition de la fonction
         function test($age, $gender) {
           if ($gender == 'femme') {
             if ($age < 18) {
               return 'Vous êtes une femme et vous êtes mineur (Age = '.$age.', Genre = '.$gender.')';
             } else {
               return 'Vous êtes une femme et vous êtes majeur (Age = '.$age.', Genre = '.$gender.')';
             }
           } else {
             if (condition) {
               if ($age < 18) {
                 return 'Vous êtes un homme et vous êtes mineur (Age = '.$age.', Genre = '.$gender.')';
               } else {
                 return 'Vous êtes un homme et vous êtes majeur (Age = '.$age.', Genre = '.$gender.')';
               }
             }
           }
         }
         // Appel de la fonction
         $res = test(17,'homme');
         echo '<p>Premier paramètre = "17", deuxième paramètre = "homme"</p>';
         echo '<p>Résultat : '.$res.'</p>';
       ?>
</div>
</body>
</html>
