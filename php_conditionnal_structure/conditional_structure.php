<html>
  <head><title>Conditionnal structure</title></head>
  <body>
  	<?php
    $temperature = 20;

    if( $temperature >= 15 ) {
        // code to execute if the condition results TRUE
        $clothes = "T-shirt";
        $should_i_wear_a_scarf = false;
    } else {
        // code to execute if the condition results FALSE
        $clothes = "Pull-over";
        $should_i_wear_a_scarf = true;
    }
    ?>

    <p>You should wear a <?php echo $clothes; ?></p>

  </body>
</html>