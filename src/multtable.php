<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <?php
    $MinMultiplicand = $_GET['minmultiplicand'];
    $MaxMultiplicand = $_GET['maxmultiplicand'];
    $MinMultiplier = $_GET['minmultiplier'];
    $MaxMultiplier = $_GET['maxmultiplier'];
    $InpCheck = 1;
    $Zero = 0;

//Check that all inputs are integers
    if(! ctype_digit($MinMultiplicand)){
      echo "Min-Multiplicand is not an integer." . "<br>";
      $InpCheck = 0;
    } 
    if(! ctype_digit($MaxMultiplicand)){
      echo "Max-Multiplicand is not an integer." . "<br>";
      $InpCheck = 0;
    } 
    if(! ctype_digit($MinMultiplier)){
      echo "Min-Multiplier is not an integer." . "<br>";
      $InpCheck = 0;
    } 
    if(! ctype_digit($MaxMultiplier)){
      echo "Max-Multiplier is not an integer." . "<br>";
      $InpCheck = 0;
    }

//Check that all minimum inputs are lower than maximum inputs.
//Note: To get to this section of code, all inputs must be integers.
    if($InpCheck != 0){    

      if($MinMultiplicand > $MaxMultiplicand){
        echo "The min-multiplicand cannot be greater than the max-multiplicand.<br>";
        $InpCheck = 0;
      }

      if($MinMultiplier > $MaxMultiplier){
        echo "The min-multiplier cannot be greater than the max-multiplier.<br>";
        $InpCheck = 0;
      }
    
    }


//Now that all inputs have been validated, print the multiplication table.

    if($InpCheck !=0){

      echo "<table border = \"1\">";

      for($i = $MinMultiplicand-1; $i<=$MaxMultiplicand +2; $i++){
        echo '<tr>';

        for($j=$MinMultiplier-1; $j<=$MaxMultiplier +2; $j++){

          if ($i==$MinMultiplicand-1 && $j==$MinMultiplier-1){
            echo '<td></td>';
          }

          else if ($i == $MinMultiplicand-1){
            echo '<td>' .$j . '</td>';
          }

          else if ($j == $MinMultiplier-1){
            echo '<td>' .$i . '</td>';
          }

          else{	
            echo '<td>' . ($i)*($j) . '</td>';
          }

        }	
        echo '</tr>';
      }
      echo "</table>";
    }

 ?>
 </body>
</html>


