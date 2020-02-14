<?php
 class Libro {
 public $titulo = "Titulo por defecto";
 public $autor = "Autor por defecto";
 public $aniopublicacion = "Anio por defecto";
 public $numerohojas = "Hojas por defecto";
 public $editorial = "Editorial por defecto";
 }
 
?>
 
<html>
<head>
<title>Ejercicio php_objetos_01</title>
</head>
 
<body>
 <?php
 $libro1 = new Libro();
 $libro1->titulo="Python para todos";
 $libro1->autor="Raúl Gonzalez Duque";
 $libro1->aniopublicacion="2006";
 $libro1->numerohojas="800";
 $libro1->editorial="Elliott Hauser, Sue Blumenberg.";
 ?>
 
 <h1> Titulo: <?php echo $libro1->titulo; ?>
 </h1>
 <h3> Autor: <?php echo $libro1->autor; ?>
 </h3>
 <h3> Anio: <?php echo $libro1->aniopublicacion; ?>
 </h3>
 <h3> Hojas: <?php echo $libro1->numerohojas; ?>
 </h3>
 <h3> Editorial: <?php echo $libro1->editorial; ?>
 </h3>
</body>
</html>