<?php 
$text = $_POST['text'];
$text_length = strlen($text);
$censored = $_POST['censored'];
$text_censored = str_replace($censored,'***', $text);
$text_censored_length = strlen($text_censored);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>destination</title>
</head>
<body>
  <div class="container">
    <h3>testo in entrata</h3>
    <p><?php echo ucfirst($text) ?> <br> lungo <?php echo $text_length ?> lettere</p>

    <h3>testo censurato</h3>
    <p><?php echo ucfirst($text_censored)  ?> <br> lungo <?php echo $text_censored_length ?> lettere</p>
  </div>
</body>
</html>