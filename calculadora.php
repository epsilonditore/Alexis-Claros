<?php 
     
     if (isset($_POST["Siguiente"])) {
     $N1 = $_POST["N1"];
     $N2 = $_POST["N2"];
     $O = $_POST["O"];
     if ($N1 <> "" && $N2 <> "" ) {
      if ($O == "+") {
       $R = $N1 + $N2;
       echo "Su Resultado es: $R";
      }
      elseif ($O == "-") {
       $R = $N1 - $N2;
       echo "Su Resultado es: $R";
      }
      elseif ($O == "*") {
       $R = $N1 * $N2;
       echo "Su Resultado es: $R";
      }
      else{
       if ($N1 <> 0 && $N2 <> 0) {
        $R = $N1 / $N2;
        echo "Su Resultado es: $R";
       }else{
        echo "No es posible dividir 0.";
       }
      }
     }
     }
      ?>