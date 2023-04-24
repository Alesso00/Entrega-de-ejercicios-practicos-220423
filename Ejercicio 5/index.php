<?php ///Me ayude bastante de inter para hacerlo porque no le entendi como :/
class Pistola {
    private $balasCargadas = 0;
    
    public function recargar() {
        if ($this->balasCargadas == 0) {
            $this->balasCargadas = 8;
        }
    }
    
    public function disparar() {
        if ($this->balasCargadas > 0) {
            $this->balasCargadas--;
        }
    }
}


class Revolver {
    private $balasCargadas = 0;
    
    public function recargar() {
        if ($this->balasCargadas == 0) {
            $this->balasCargadas = 8;
        }
    }
    
    public function disparar() {
        if ($this->balasCargadas > 0) {
            $this->balasCargadas--;
        }
    }
}


class Uzi {
    private $balasCargadas = 0;
    
    public function recargar() {
        if ($this->balasCargadas == 0) {
            $this->balasCargadas = 8;
        }
    }
    
    public function disparar() {
        if ($this->balasCargadas > 0) {
            $this->balasCargadas--;
        }
    }
}


class Escopeta {
    private $balasCargadas = 0;
    
    public function recargar() {
        if ($this->balasCargadas == 0) {
            $this->balasCargadas = 8;
        }
    }
    
    public function disparar() {
        if ($this->balasCargadas > 0) {
            $this->balasCargadas--;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Armas</title>
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
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./img/img1.png" width="30" height="30" class="d-inline-block align-top" alt=""> Armas
        </a>
    </nav>
    <div class="jumbotron">
        
            <div class="box">
                <div class="card" style="width: 14rem; height:12rem;">
                    <img class="card-img-top" src="./img/pistola.jpg" alt="Card image cap" style="width: 13rem; height:11rem;">
                    <div class="card-body">
                        <h5 class="card-title">Pistola</h5>
                        <input type="number" id="arma_pistola" value="0" disabled>
                        <br>  <br>
                        <button onclick="recargar('arma_pistola')">Recargar</button>
                        <button onclick="disparar('arma_pistola')">Disparar</button>
                     <input type="text" hidden name="tipoOperacion" value = "pistola">
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="card" style="width: 14rem; height:12rem;">
                    <img class="card-img-top" src="./img/escopeta.png" alt="Card image cap" style="width: 13rem; height:11rem;">
                    <div class="card-body">
                        <h5 class="card-title">Escopeta</h5>
                        <input type="number" id="arma_escopeta" value="0" disabled>
                        <br>  <br>
                        <button onclick="recargar('arma_escopeta')">Recargar</button>
                        <button onclick="disparar('arma_escopeta')">Disparar</button>
                        <input type="text" hidden name="tipoOperacion" value = "escopeta">
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="card" style="width: 14rem; height:12rem;">
                    <img class="card-img-top" src="./img/revolver.jpg" alt="Card image cap" style="width: 13rem; height:11rem;">
                    <div class="card-body">
                        <h5 class="card-title">Revolver</h5>
                        <input type="number" id="arma_revolver" value="0" disabled>
                        <br>  <br>
                        <button onclick="recargar('arma_revolver')">Recargar</button>
                        <button onclick="disparar('arma_revolver')">Disparar</button>
                        <input type="text" hidden name="tipoOperacion" value = "revolver">
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="card" style="width: 15rem; height:12rem;">
                    <img class="card-img-top" src="./img/uzi.jpg" alt="Card image cap" style="width: 13rem; height:11rem;">
                    <div class="card-body">
                        <h5 class="card-title">Uzi</h5>
                        <input type="number" id="arma_uzi" value="0" disabled>
                        <br>  <br>
                        <button onclick="recargar('arma_uzi')">Recargar</button>
                        <button onclick="disparar('arma_uzi')">Disparar</button>
                        
                        
                        
                    </div>
                </div>
            </div>
    </form>

    <script>
    // Función para recargar el arma
    function recargar(id) {
        var arma = document.getElementById(id);
        if (arma.value == 0) {
            arma.value = 8;
        }
    }
    
    // Función para disparar el arma
    function disparar(id) {
        var arma = document.getElementById(id);
        if (arma.value > 0) {
            arma.value--;
        }
    }
</script>
</body>
</html>
<?php


?>