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
  <div class="container" style="font-family: monospace; text-align:justify;width:75%;margin:60px auto;">

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

    <h3>parole in array ciclato</h3>
    <ul>
      <!-- <?php [0 => $parola] = $text_words; echo $parola ?> -->
      <?php $count = 0;
        foreach ($text_words as $key => $value) {
          $count ++;
          [$key => $parola] = $text_words; 
          echo "<li>" .  "chiave " . $key . " contatore " . $count . " " . $parola . "</li>";
        }
        echo  '________ parole totali:' . $count ;
        ?>
    </ul>
    
    <?php var_dump($text_words)?>
  </div>
</body>
</html>