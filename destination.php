<?php 
$text =                  $_POST['text'];
$text_length =          strlen($text);
$censored =              $_POST['censored'];
$text_censored =        str_replace($censored,'***', $text);
$text_censored_length = strlen($text_censored);
$text_shuffled =        str_shuffle($text);
$text_words =           str_word_count($text, 1, 'àáãç3')
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
  <div class="container" style="font-family: monospace;">

    <h3>testo in entrata</h3>
    <p>
      <?php echo ucfirst($text)?> <br> lungo 
      <?php echo $text_length ?> lettere
    </p>

    <h3>testo censurato</h3>
    <p>
      <?php echo ucfirst($text_censored)?> <br> lungo 
      <?php echo $text_censored_length ?> lettere
    </p>

    <h3>testo shuffled</h3>
    <p>
      <?php echo ucfirst($text_shuffled)?> <br> lungo 
      <?php echo strlen($text_shuffled)?> lettere
    </p>

    <h3>parole in array</h3>
    <p>
      <?php echo var_dump($text_words)?>
    </p>

  </div>
</body>
</html>