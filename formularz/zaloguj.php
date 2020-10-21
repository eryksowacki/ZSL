<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <div class="big">
    <?php
      if($_POST['button']=="Tak")
      {
        echo "Poprawne dane. Przejdź dalej.";
      }
      else
      {
        echo '<a href="http://localhost/php/formularz.php"><h1>Powrót na stronę główną</h1></a>';
      }
      ?>
    </div>
  </body>
</html>