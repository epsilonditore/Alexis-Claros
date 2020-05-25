<!DOCTYPE html>
<html>
<head>
 <title>Calculadora</title>
</head>
<body>
<h2>CALCULADORA PHP</h2>
<form Method="POST" action="calculadora.php">
 <table>
  <tr>
   <td>
    <input type="number" name="N1" class="N1" placeholder="Ingrese Numero" />
   </td>
   <td>
    <select name="O">
     <option value="+">+</option>
     <option value="-">-</option>
     <option value="*">*</option>
     <option value="/">/</option>
    </select>
   </td>
   <td>
    <input type="number" name="N2" class="N2" placeholder="Ingrese otro Numero" />
   </td>
   <td>
    <input type="submit" name="Siguiente" Value="Calcular" />
   </td>
   <td>
    <a href="calculadora.php">BORRAR</a>
   </td>
  </tr>
  
   <tr>
    <td>
     <h3>
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
     </h3>
    </td>
   </tr>
 </table>
</form>
</body>
</html>