<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php

    $name='Janusz';
    $surname='Nowak';
      echo 'imię: $name<br>';
      echo "imię: $name<br>";
      //konkatenacja.
      echo "Nazwisko: $surname".'<hr>';
      //typy danych
      //boolean
      $prawda = true;
      $fałsz = false;

      echo $prawda; //1
      echo $fałsz; //nic nie wyświetli

      // integer
      $całkowita = 20;
      $binarna = 0b1011; //11
      $oct = 10; //8
      $hex = 0xA; //10
      echo "<hr>$hex<hr>";


      //składnia heredoc
      $text = <<< ETYKIETA
      test
ETYKIETA;
  echo $text;

  $surname='Kowal';
  echo <<< E
  Nazwisko: $surname<hr>
E;
// składnia nowdoc
echo <<< 'E'
Nazwisko: $surname<hr>
E;

$city='Poznań';
echo "Nazwa zmiennej: \$city, wartość zmiennej: $city";



      ?>
  </body>
</html>
