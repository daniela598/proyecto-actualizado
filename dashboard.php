<?php 
session_start();

if (isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
</html>
<body>
<script>alert('inicio sesion con exito');</script>

</body>
<?php
/* De lo contrario si el usuario intenta acceder al sistema después de un tiempo
se le pedira que inicie sesión de nuevo. */
} else {
    echo "<script>alert('Debe iniciar sesion');</script>";
    echo "<script>window.location='inicio.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Adopt your friend</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Chewy'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i'><link rel="stylesheet" href="./style3.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!--Anil Cole-John Project 1: GDES-220-001 10/17/2017
+++++++++++++++=========== ==============++++++++++=====================++++++++++++++++-->

 <!--header-->
<header>
  <nav>
    <ul class="nav">
      <li><a href="">donar</a></li>
       <li><a href="page2.html">mascotas</a></li>
      <li ><a href="#why">adopta</a></li>
      <li><a href="index.html">Volver al inicio</a></li>
    </ul>
  </nav>
  
  <h1>adopt your friend!</h1>
  
  <h2>forma parte del cambio</h2>
  
  <div class="wrapper">
   <a href="#contactus" class="button">Voluntarios</a></div>
</header>

<!--"why-->
<section class="why">
  <h5 id="why">con que fin?</h5>
<p>adopta tu amigo se creo con el fin de disminuir los animales en situacion de abandono tales como perros y gatos, ya que son mas vulnerables y se ven mucho mas en situaciones precarias</p>
</section>
<!--"why"-->

<!--"quote"-->
<section class=quote>
  <p> ""no vamos a cambiar el mundo ayudando a un animal, pero al menos el mundo habra cambiado para él...""</p>
  <h4>-Adopt your friend</h4> </section>
<!--"quote-->

<!--"where"-->
<section class="where"> 
  <h5 id="where">buscador</h5>
  <p>A continuación se muestra un mapa donde podemos encontrar la dirección donde se encuentra la mascota que queremos ubicar, cuando es en tiempo real se ubica vía whatsapp que se encuentra en la pagina principal.</p> 
  <iframe class= "map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15864.781575831075!2d-75.56260345!3d6.2379578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1648013713817!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<!--"where"-->

</html>