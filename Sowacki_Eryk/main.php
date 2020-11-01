<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona Główna </title>
  </head>
  <body>
    <h4> Kalkulator </h4>
    <form action="./function.php" method="$_GET">
      <input type="text" name="value1" placeholder="x"  required pattern="[0-9]{1,20}">
      <select name="z">
        <option name="z" value="+"> + </option>
        <option name="z" value="-"> - </option>
        <option name="z" value="*"> * </option>
        <option name="z" value="/"> / </option>
      </select>
      <input type="text" name="value2" placeholder="y"  required pattern="[0-9]{1,20}">
      <input type="submit" value="=">
      <input type="text" disabled>
  </body>
</html>
