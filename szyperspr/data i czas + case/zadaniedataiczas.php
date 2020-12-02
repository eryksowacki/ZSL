<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data i czas</title>
  </head>
  <body>
    <h2> <b> Data i czas </b> </h2>
    <form>
      <input class="form1" type="text" name="data" value="<?php echo date('d/m/y'); ?>" > <br><br>
      <input id="2" type="text" value="<?php echo date('G:iA') ?>"> <br><br>
      <input id="3" type="text" value="<?php
        $day = date('w');
          switch($day)
          {
            case 0: echo "Niedziela";
              break;
            case 1: echo "Poniedziałek";
              break;
            case 2: echo "Wtorek";
              break;
            case 3: echo "Środa";
              break;
            case 4: echo "Czwartek";
              break;
            case 5: echo "Piątek";
              break;
            case 6: echo "Sobota";
              break;
          }
      ?>">

      <br><br>

      <input id="4" type="text"
        value="<?php echo strftime('%d %B %Y');
            echo ", ";
            echo date('G:i:s');
            echo " | ";
              $day = date('w');
                switch($day)
                {
                  case 0: echo "Niedziela";
                    break;
                  case 1: echo "Poniedziałek";
                    break;
                  case 2: echo "Wtorek";
                    break;
                  case 3: echo "Środa";
                    break;
                  case 4: echo "Czwartek";
                    break;
                  case 5: echo "Piątek";
                    break;
                  case 6: echo "Sobota";
                    break;
                }
                ?>">

      </form>
        <?php
          $daysinyear = date('L');
            if(date('L'))
            {
                $daysinyear = 366;
            }
            else
            {
                $daysinyear = 365;
            }

          $noofday = date('z');

          $noofweek = ceil(date('z')/7);

          $daystonewyear = $daysinyear - $noofday;
        ?>
          <ul>
              <li> <?php echo $daysinyear ?> </li>
              <li> <?php echo $noofday ?> </li>
              <li> <?php echo $noofweek ?> </li>
              <li> <?php echo $daystonewyear ?> </li>
          </ul>
  </body>
</html>
