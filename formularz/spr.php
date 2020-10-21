<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <div id="container">
      <div class="big">
          <h3> Dane z formularza </h3>
              <?php
                  $surename = ucwords(strtolower($_POST['surename']));
                  $name = ucwords(strtolower($_POST['name']));
echo<<<DATA
                      Nazwisko: $surename<br>
                      Imię: $name <br><br>
                      Czy dane są poprawne?<br><br>
DATA;
              ?>
              <form action="./zaloguj.php" method="post">
                <input type="submit" name="button" value="Tak">
                <input type="submit" name="button" value="Nie">
              </form>
      </div>
      <div class="small">
        <hr>
        Eryk Sowacki 21.10.2020r.
        <hr>
      </div>
    </div>
  </body>
</html>