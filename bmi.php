<?php
  //gets user 'weight' input from previous page and converts it into a variable named '$bmiweight'.
  $bmiweight = $_POST['weight']; 

  //gets user 'height' input from previous page and converts it into a variable named '$bmiheight'.
  $bmiheight = $_POST['height'];

  //calculates the bmi based on what is inputted and gives the result the variable name '$bmi'.
  $bmi = $bmiweight/($bmiheight*$bmiheight);

  //feedback messages are given variable names.
  $underweight_msg = "underweight."; 
  $normal_msg = "normal."
  $overweight_msg = "overweight.";
  $obese_msg = "obese.";

  echo '<p>The result is:</p>';
  echo $bmi;

  if ($bmi < 18.5) {
    echo $underweight_msg;
  } elseif ($bmi > 30) {
    echo $obese_msg;
  } else {
    echo $normal_msg;
  }
  

?>
