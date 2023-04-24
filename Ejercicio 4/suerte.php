<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php
class Operacion {
public $numero;
public $valor;
public $Dinero;
public function __construct ($numero, $valor, ) //constructor
{
    $this ->numero = $numero;  
    $this ->valor = $valor;  
}
public function La_suerte() {
	//$numero_aleatorio = rand(0, 10);
    //echo $numero_aleatorio;	
  
    // Verificar si el número del usuario es igual al número ganador
    if ($this ->numero >=0 && $this ->numero <=5 || $this ->numero >=20 && $this ->numero <= 25 || 
    $this ->numero >=50 && $this ->numero <= 65 || $this ->numero >=80 && $this ->numero <= 85 || 
    $this ->numero >=90 && $this ->numero <= 99) { // si lo hacia con numero aleatorio seria muy dificil que saliera ganador
        if( $this ->valor == 1) {
            $this ->Dinero= 70 ;
          }
        else if( $this ->valor == 2) {
            $this ->Dinero= 140 ;
          }
        else if( $this ->valor == 3) {
            $this ->Dinero= 210 ;
          }
        else if( $this ->valor == 4) {
            $this ->Dinero= 280 ;
          }
        else if( $this ->valor == 5) {
            $this ->Dinero= 350 ;
          }
        else if( $this ->valor == 6) {
            $this ->Dinero= 420 ;
          }
        else if( $this ->valor == 7) {
            $this ->Dinero= 490 ;
          }
        else if( $this ->valor == 8) {
            $this ->Dinero= 560 ;
          }
        else if( $this ->valor == 9) {
            $this ->Dinero= 630 ;
          }
        else if( $this ->valor == 10) {
            $this ->Dinero= 700 ;
          }
        // Mostrar mensaje de que el usuario ganó y el premio obtenido

        ?>
        <div class="card" style="width: 18rem;">
            <img src="./img/gano.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Se ha Jugado la Suerte </h5>
              <p class="card-text">
              <?php 
          echo "El numero que eligio es: ".$this ->numero." es ganador!! felicidades Ha ganado $".$this ->Dinero;
    } else {
        // Mostrar mensaje de que el usuario no ganó
        ?>
        <div class="card" style="width: 18rem;">
            <img src="./img/nogano.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Se ha Jugado la Suerte </h5>
              <p class="card-text">
              <?php 
        echo "El numero que eligio es: ".$this ->numero." No es ganador, siga participando";
    }
}

}
$operando = new operacion ($_POST['numero'], $_POST['valor']);
     
     $operando->La_suerte();
     ?>
     <!DOCTYPE html>
     <html lang="en">
       <title>Resultado</title>
       <form method="POST" action="index.php">
       <input type="submit" value="Volver a jugar" class="btn btn-primary btn-lg btn-block"> 
   
     </html>


