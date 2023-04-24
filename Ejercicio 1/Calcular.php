<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        .box {
            display: inline-block;
            text-align: center;
            margin-left: 120px;
            margin-bottom: 9px;
        }
    </style>
  </head>
  <ul>
        <li><a href="./">Menu Principal</a></li>
    </ul>
  <body>
    
  </body>
  </html>
<?php
$tipoOperacion = $_POST['tipoOperacion'];
class Operacion {
public $grados;

public function __construct ($grados)
{
    $this ->grados = $grados;  
}
public function Centigrados_a_Fahrenheit() {
    $total =  ($this -> grados * 9/5) +32;
    echo    "".$this ->grados ."°C son " .$total ."°F";
}
public function Fahrenheit_a_centigrados() {
    $total =  ($this -> grados -32) * 5/9; 
    echo    "".$this ->grados ."°F son " .$total ."°C";
}
}
$operando = new operacion ($_POST['grados']);
if ($tipoOperacion == "1"){
    ?>
    <div class="card" style="width: 18rem;">
        <img src="./img/f.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Conversion de Centigrados a Fahrenheit</h5>
          <p class="card-text">
          <?php      
     $operando->Centigrados_a_Fahrenheit();
    ?>
    <div class="card" style="width: 18rem;">
        <img src="./img/c.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Conversion de Fahrenheit a Cetigrados</h5>
          <p class="card-text">
          <?php    
     $operando->Fahrenheit_a_centigrados();
}

?>
