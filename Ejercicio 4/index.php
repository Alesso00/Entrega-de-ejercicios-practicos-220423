<!-- Ejercicio 4-->
<!-- Desarrolle en html una vista para un juego de azar, puede decorar la vista como usted desee,
primero se debe de colocar un numero y un costo con el cual compra los números, los
números deben ser de 0 a 100 y el costo con el que se pueden comprar es de $1 hasta $10.
La tabla de precios por la compra de número y lo que se gana es el siguiente:

• $1=$70
• $2=$140
• $3=$210
• $4=$280
• $5=$350
• $6=$420
• $7=$490
• $8=$560
• $9=$630
• $10=$700

Al mostrar el numero ganador, si el jugador gana mostrar un mensaje de que el jugador gano y
cuanto $ dinero gano.
Si el jugador no gano nada, mostrar el mensaje de que el usuario no gano, suerte para la próxima.
Considerar que cuando se presione el botón de jugar se debe de bloquear el control donde se coloca
el numero y activarse y limpiarse cuando se presione otro botón de jugar nuevamente

.-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .box {
            display: inline-block;
            text-align: center;
            margin-left: 120px;
            margin-bottom: 9px;
        }
    </style>
    <title>Loteriaaa!!</title>
</head>

<body>
    <h1> </h1>
    <div class="card" style="width: 28rem;">
        <img src="./img/img1.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> ¿Que precio de ticket desea comprar?</h5>
            <h6> • Ticket #1, Valor= $1 posibilidad de ganar $70.00</h6>
            <h6> • Ticket #2, Valor= $2 posibilidad de ganar $140.00</h6>
            <h6> • Ticket #3, Valor= $3 posibilidad de ganar $210.00</h6>
            <h6> • Ticket #4, Valor= $4 posibilidad de ganar $280.00</h6>
            <h6> • Ticket #5, Valor= $5 posibilidad de ganar $350.00</h6>
            <h6> • Ticket #6, Valor= $6 posibilidad de ganar $420.00</h6>
            <h6> • Ticket #7, Valor= $7 posibilidad de ganar $490.00</h6>
            <h6> • Ticket #8, Valor= $8 posibilidad de ganar $560.00</h6>
            <h6> • Ticket #9, Valor= $9 posibilidad de ganar $630.00</h6>
            <h6> • Ticket #10, Valor= $10 posibilidad de ganar $700.00</h6>
            <form method="POST" action="suerte.php">
                <label>Comprar Suerte</label><br><br>
                <input type="number" name="numero" class="form-control"  required placeholder="Numero a comprar" min="1" max="100"> <br>
                <input type="number" name="valor" class="form-control"  required placeholder="Valor del ticket" min="1" max="10"><br>
                <input type="submit" value="Jugar" class="btn btn-primary btn-lg btn-block"> 
             
          
</body>

</html>