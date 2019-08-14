<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php

  if (isset($_POST['resposta3'])){
  	$_SESSION['resposta3'] = $_POST['resposta3'];
  	header('location: pergunta4.php');
  }
?>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>pergunta 3</title>
</head>
		<style type="text/css">
	input{
		margin-top: 10px;
		margin-left: 950px;
		border-bottom-color: grey;
	}
	h3{
		font-size: 30px;
		font-family: times;
	}
	.panel-default {
		margin-top: 30px;
	}
	h1{
		color: white;
	}
	.panel-body{
		border-radius: 20px;
	}

	</style>
<body style="background-image: url(https://i0.wp.com/multarte.com.br/wp-content/uploads/2016/03/ceu-estrelado.png?fit=1920%2C1080&ssl=1);">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1>PERGUNTA 3</h1>
				<br>
				<div class="panel-default">
					<div class="panel-body" style="background-color: #c0c0c0">
						<form name="pergunta1" method="post" >
						
						<h3>Quantas vezes os meninos da sala(Justino,Marcelo,Nathan,Pote)ja venceram o mam no fut?</h3>
						<input type="radio" name="resposta3" value="15" required>15<br>
						<input type="radio" name="resposta3" value="100000" required> 100000<br>
							<input type="radio" name="resposta3" value="205" required>205<br>
						<input type="radio" name="resposta3" value="600" required>600<br>
						<input type="radio" name="resposta3" value="Incontaveis vezes" required> Incontaveis vezes<br>	
					</div>	
				</div>
			</div>
			
		</div>	
	</div>
	<input type="submit" name="enviar" value="Próxima" >
	</form>

</body>
</html>