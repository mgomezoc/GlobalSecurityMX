<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "noreply@globalsecuritymx.mx";
//$to = "0013zkr@gmail.com";
$to = "globalsecuritymx@gmail.com,administracion@globalsecuritymx.mx";
$subject = "Nuevo mensaje de contacto! ✍";
$message = "
			<html>
			<head>
			<title>Contacto</title>
			</head>
			<body>
			<div style='background:#eee;display:block;padding:15px;border:2px solid #ccc;margin:15px;font-family:Segoe UI;max-width:600px'>
			<h1 style='background:#fff;color:#333;padding:15px;border-radius:3px;margin:0;border-bottom:5px solid #ccc'>Contacto</h1>
			<div style='background:#fff;padding:15px'>
			<p>
				<b>Nombre:</b> $_POST[nombre]
			</p>
			<p>
				<b>Email:</b> $_POST[correo]
            </p>
            <p>
				<b>Telefono:</b> $_POST[telefono]
			</p>
            <p>
				<b>Asunto:</b> $_POST[asunto]
			</p>
            <p>
				<b>Comentario:</b> $_POST[comentario]
			</p>
			</div>
			</div>
			</body>
			</html>
            ";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:" . $from;

mail($to,$subject,$message, $headers);

header("Location: contacto.php");
die();

?>
