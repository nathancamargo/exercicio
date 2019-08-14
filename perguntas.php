<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<title>pergunta 1</title>
<head>
	<?php

  if (isset($_POST['resposta1'])){
  	$_SESSION['resposta1'] = $_POST['resposta1'];
  	header('location: pergunta2.php');
  }
?>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
</head>
	<style type="text/css">
	input{
		margin-left: 950px;
		border-bottom-color: grey;
	}
	h3{
		font-size: 40px;
		font-family: times;
	}
	.panel-default {
		margin-top: 50px;
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
				<br><h1>PERGUNTA 1 </h1>

				<div class="panel panel-default">
					<div class="panel-body" style="background-color: #c0c0c0">
						<div class="answers">
						<form name="pergunta1" method="post">
						
						<h3> Quantas vezes o Amauri dormiu durante as provas?</h3>
						<br>
						<input type="radio" name="resposta1" value="3" required> 	3<br>
						<input type="radio" name="resposta1" value="5" required> 	5<br>
						<input type="radio" name="resposta1" value="20" required>	20<br>
						<input type="radio" name="resposta1" value="100" required>	100<br>		
						<input type="radio" name="resposta1" value="Incontaveis vezes" required> Incontaveis vezes<br>	
						
						</div>
						
					</div>
					
				</div>
			</div>
			
		</div>
		
	</div>
	<input type="submit" name="enviar" value="Proxima" >
	</form>
</div>

</body>
</html>