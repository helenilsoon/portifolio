<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html >
<head>
		<title>mail</title>
</head>
<body>

	<h2>Olá my lord tenho uma mensagem pra vc ;)</h2>
	<p><strong>Nome: </strong><?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
	<p><strong>Email: </strong><?php echo htmlspecialchars( $email, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
	<p><strong>WhatsApp:</strong><?php echo htmlspecialchars( $whatsApp, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
	
	
	<p><?php echo htmlspecialchars( $descrition, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>



</body>
</html>