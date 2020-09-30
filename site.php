<?php
  $var = 'PHP Tutorial';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $var; ?> - Exercise Three</title>
</head>
<body>

<!-- MY MISUNDERSTOOD FIRST ATTEMPT -->
  <!-- 
  $var = 'PHP Tutorial';
  echo '<h3>$var</h3>';
  echo '<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>'
  echo '<a href="https://www.w3schools.com/php/default.asp">Click here to learn PHP.</a>'; 
  -->
 
<!-- MY SECOND ATTEMPT AFTER LOOKING AT THE SOLUTION -->
<h3><?php echo $var;?></h3>
<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
<p><a href="https://www.w3schools.com/php/default.asp">Go to the <?php echo $var; ?></a></p>
  
</body>
</html>