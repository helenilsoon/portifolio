<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<title>mail</title>
</head>
<body>

	<h2>Ola <?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
	<p><strong>Email: </strong><?php echo htmlspecialchars( $email, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
	<p><strong>WhatsApp:</strong><?php echo htmlspecialchars( $whatsApp, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
	
	
	<p><?php echo htmlspecialchars( $descrition, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>



</body>
</html>