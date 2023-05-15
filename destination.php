<?php 
$text = $_POST['text'];
$censored = $_POST['censored'];
$text_censored = str_replace($censored,'***', $text);
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
    <p><?php echo $text_censored ?> </p>
  </div>
</body>
</html>