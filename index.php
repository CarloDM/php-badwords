<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>
<body>
  <div class="container">

  <form action="destination.php" method="post">
    <label for="text">scrivi il testo</label><br>
    <input type="text" name="text" value='scrivi testo' style="width:400px;  text-align:start; overflow: hidden"><br>
    <label for="censored">scrivi parola da censurare</label><br>
    <input type="text" name="censored" value='ciao'><br>

    <input type="submit" value="invia">
  </form>
  </div>
</body>
</html>