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
$tipoOperacion = $_POST['Evaluar'];
class Operacion {

public $grados;

public function __construct ($grados)
{

    $this ->grados = $grados;
   
}
public function Evaluar_temperatura() {
if($this ->grados <=0) {
    echo "<font color='blue'>". "".$this ->grados ."°C es temperatura maximamente FRIA"."</font>";
    }
else if($this ->grados>0 && $this ->grados <=30) {
    echo "<font color='yellow'>". "".$this ->grados ."°C es temperatura estable"."</font>";
        }
else if($this ->grados>31) {
    echo "<font color='red'>". "".$this ->grados ."°C es temperatura máximamente CALIENTE"."</font>";
        }
}

}
$operando = new operacion ($_POST['grados']);
   
     $operando->Evaluar_temperatura();

?>
