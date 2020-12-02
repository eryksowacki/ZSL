<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wynik</title>
  </head>
  <body>
    <h4> Kalkulator </h4>
<?php
    $x = ($_GET['value1']);
    $y = ($_GET['value2']);
    $z = ($_GET['z']);
    $wynik;

    if($z=="+")
    {
      $wynik=$x+$y;
      echo<<<OKI
        <form>
        <input type="text" name="value1" value="$x"  required pattern="[1-9]{1,20}">
        <select name="z">
          <option name="z" value="+"> + </option>
        </select>
        <input type="text" name="value2" value="$y"  required pattern="[1-9]{1,20}">
        <input type="submit" value="=">
        <input type="text" disabled value="$wynik">
OKI;
    }
    else if ($z=="-")
    {
      $wynik=$x-$y;
      echo<<<OKI
        <form>
        <input type="text" name="value1" value="$x"  required pattern="[1-9]{1,20}">
        <select name="z">
          <option name="z" value="-"> - </option>
        </select>
        <input type="text" name="value2" value="$y"  required pattern="[1-9]{1,20}">
        <input type="submit" value="=">
        <input type="text" disabled value="$wynik">
OKI;
    }
    else if ($z=="*")
    {
      $wynik=$x*$y;
      echo<<<OKI
        <form>
        <input type="text" name="value1" value="$x"  required pattern="[1-9]{1,20}">
        <select name="z">
          <option name="z" value="*"> * </option>
        </select>
        <input type="text" name="value2" value="$y"  required pattern="[1-9]{1,20}">
        <input type="submit" value="=">
        <input type="text" disabled value="$wynik">
OKI;
    }

    if ($z=="/")
    {
      if($y==0)
      {
        echo "Nie dzielimy przez 0";
      } else
      {
        $wynik=$x/$y;
        echo<<<OKI
          <form>
          <input type="text" name="value1" value="$x"  required pattern="[1-9]{1,20}">
          <select name="z">
            <option name="z" value="/"> / </option>
          </select>
          <input type="text" name="value2" value="$y"  required pattern="[1-9]{1,20}">
          <input type="submit" value="=">
          <input type="text" disabled value="$wynik">
OKI;
      }
    }

?>
  </body>
</html>
