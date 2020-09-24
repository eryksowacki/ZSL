<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,
  initial-scale=1.0">
  <title> dokument </title>
</head>
<body>
  Początek pliku
  <?php
  echo '<br>include';
  include '3_1_file.php';
  include_once './3_1_file.php';
  echo '<br>Require';
  require './3_1_file.php';
  require_once './3_1_file.php';

  ?>

</body>
</html>
