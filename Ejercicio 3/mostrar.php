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
$tipoOperacion = $_POST['Mostrar'];
class Operacion {

public $veces;

public function __construct ($veces)
{


    $this ->veces = $veces;
   
}
public function mostrar_imagen() {


    for ($i = 1; $i <$this ->veces+1 ; $i++) {
        echo "     <p>$i</p>\n";
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="x-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width-device-width, initial-scale-1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <style>
                .box {
                    display: inline-block;
                    text-align: center;
                    margin-left: 120px;
                    margin-bottom: 9px;
                }
            </style>
        </head>
        <body>   
            <div class="jumbotron">
                    <div class="box">
                        <div class="card" style="width: 14rem; height:12rem;">
                            <img class="card-img-top" src="./img/img2.jpg" alt="Card image cap" style="width: 13rem; height:11rem;">
                            <div class="card-body">
                                <h5 class="card-title"> <?php  echo " <p>$i</p>\n"; ?></h5>
                            </div>
                        </div>
                    </div>
                    </form>
</body>
</html>
                    <?php
    }
}

}
$operando = new operacion ($_POST['numero']);
   
     $operando->mostrar_imagen();

?>
