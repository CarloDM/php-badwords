<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>
<body>
  <div class="container" style="font-family: monospace; text-align:center;width:75%;margin:60px auto;">

  <form action="destination.php" method="post">
      <label for="text">scrivi il testo</label><br>
      <input  style="width:60%;padding:10px;text-align:start;border-radius:10px;margin-bottom:10px;"
      type="text" name="text" value='scrivi testo'><br>

      <label for="censored">scrivi parola da censurare</label><br>
      <input style="width:40%;padding:5px;text-align:start;border-radius:5px;margin-bottom:10px;"
      type="text" name="censored" value='ciao'><br>

      <input type="submit" value="invia">

  </form>
  </div>
</body>
</html>