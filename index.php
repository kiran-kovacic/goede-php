<?php
  $date = date("H");
  $page = $_SERVER['PHP_SELF'];
  $sec = "1";

  header("Refresh: $sec; url=$page");

  date_default_timezone_set('Europe/Amsterdam');
  date_default_timezone_get();

  if ($date < "6"){
    $image ="backgrounds/night.png";
    echo "<h1>Good night";
  } elseif ($date < "12") {
    $image ="backgrounds/morning.png";
    echo "<h1>Good morning";
  } elseif ($date < "18") {
    $image ="backgrounds/afternoon.png";
    echo "<h1>Good afternoon";
  } elseif ($date < "0") {
    $image ="backgrounds/evening.png";
    echo "<h1>Good evening";
  }
  echo "<h1>It's " . date("Y-m-d H:i")."</h1>";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tijd</title>
    <style>
      body{ background-image: url("<?php echo $image; ?>");
            background-size: cover;
            padding: 200px;
      }
      h1{ 	text-align: center;
            font-size: 50px;
            color: white;
      }
    </style>
  </head>
  <body>
  </body>
</html>
