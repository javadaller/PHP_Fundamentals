<html>
  <head><title>Variables types</title></head>
  <body>
  	<?php 
    $firstName = "Arnaud";
    $age = 42;
    $eyeColor = "grey, green and blue";

    $MyFamily = ['Soline','Violette','Michel','etc...'];
    ?>

    <p>Hi my name is <?php echo $firstName; ?></p>
    <p>I am <?php echo $age; ?> years old.</p>
    <p>My eyes are <?php echo $eyeColor; ?></p>
    <p>The first person in my family is <?php echo $MyFamily[0]; ?></p>
  </body>
</html>