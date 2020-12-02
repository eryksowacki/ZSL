<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Podsumowanie</title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <div id="formularz">
<?php
  $konto = ($_POST['Account']);
  $name = ($_POST['FirstName']);
  $name = ucwords(strtolower($name));
  $lastname = ($_POST['LastName']);
  $lastname = ucwords(strtolower($lastname));
  $country = ($_POST['CountryRegion']);
  $adress = ($_POST['StreetAdress']);
  $postal = ($_POST['ZIPPostalCode']);
  $code = ($_POST['ZIPPostalCodee']);
  $city = ($_POST['City']);
  $state = ($_POST['StateProvince']);
  $phonenumber = ($_POST['PhoneNumber']);
  echo<<<DOCC
  Konto: $konto<br>
  Imię i nazwisko: $name $lastname.<br>
  Kraj: $country.<br>
  Adres 1: $adress<br>
  DOCC;
  $secondadress = ($_POST['StreetAdress2']);
  if(empty($secondadress))
  {
    echo " ";
  }
  else
  {
    echo "Adres 2: $secondadress<br>";
  }
echo<<<DOC
  Kod pocztowy i miasto: $postal-$code, $city.<br>
  Województwo: $state.<br>
  Numer telefonu: $phonenumber.<br>
DOC;
?>
</div>

  </body>
</html>
