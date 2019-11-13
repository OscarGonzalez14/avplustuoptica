<?php
include '../config/conn.php';

   $nombre = $_POST["nombre"];
   $dui = $_POST["dui"];
   $celular = $_POST["celular"];
   $telefono = "";
   $correo = $_POST["correo"];
   $tipo_tarjeta = $_POST["tipo_tarjeta"];
   $fecha_pagos = "periodo_pago";
  // $password2=$_POST["password2"];
   $n_tarjeta = $_POST["numero_tarjeta"];
   $vencimiento_tar = $_POST["fecha_vec"];
   $codigo = "";
   $direccion = "";
   $forma_pago = "Cargo Automatico Planes";
   $lugar_trabajo = "";
   $cuota_mensal = $_POST["cuota"];
   $tipo_plan = $_POST["plan-definitivo"];
   $forma =$_POST["forma-definitivo"];
   $marca =$_POST["marca-definitivo"];
   $lente =$_POST["lente-definitivo"];
  

$conexion = new Conexion();
$cnn = $conexion->getConexion();
$sql = "INSERT INTO pacientes_afiliados (nombre,codigo,direccion,dui,tarjeta_n,fecha_vencimiento_tarjeta,tipo_tarjeta,telefono,celular,fecha_pago,forma_pago,lugar_trabajo,tipo_plan,couta_mensual,correo,forma,marca,lente) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

$statement = $cnn->prepare( $sql );
	//Enlazar los parámetros de la consulta con los valores del formulario

 
$statement->bindParam(1,$nombre, PDO::PARAM_STR );
$statement->bindParam(2,$codigo, PDO::PARAM_STR);
$statement->bindParam(3,$direccion, PDO::PARAM_INT); 
$statement->bindParam(4,$dui, PDO::PARAM_INT);
$statement->bindParam(5,$n_tarjeta, PDO::PARAM_STR );    
$statement->bindParam(6,$vencimiento_tar,PDO::PARAM_STR );   
$statement->bindParam(7,$tipo_tarjeta, PDO::PARAM_STR );       
$statement->bindParam(8,$telefono, PDO::PARAM_STR );
$statement->bindParam(9,$celular, PDO::PARAM_STR );    
$statement->bindParam(10,$fecha_pagos, PDO::PARAM_STR );   
$statement->bindParam(11,$forma_pago, PDO::PARAM_STR );       
$statement->bindParam(12,$lugar_trabajo, PDO::PARAM_STR );     
$statement->bindParam(13,$tipo_plan,PDO::PARAM_STR );     
$statement->bindParam(14,$cuota_mensual, PDO::PARAM_STR );    
$statement->bindParam(15,$correo, PDO::PARAM_STR ); 
$statement->bindParam(16,$forma, PDO::PARAM_STR );    
$statement->bindParam(17,$marca, PDO::PARAM_STR );
$statement->bindParam(18,$lente, PDO::PARAM_STR );     


echo $statement->execute() ? header('Location: ../asistente/index.php')
:"Afiliacion registrada Exitosamente"  ;


	//vaciar memoria
	$statement->closeCursor();
	$conexion = null;



