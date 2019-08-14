<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head><?php
		if (isset($_POST['name']) && isset($_POST['avatar'])) {
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['avatar'] = $_POST['avatar'];
			header('location: perguntas.php');
			# code...
		}
	?>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>LOGIN</title>
</head>
<style type="text/css">
	
#quiz{
	margin-left: 480px;
	width: 400px;
	height: 400px;
}
#top{
	color: white;
	text-align: center;
	font-family: impact;
	font-size: 100px
}
	#painel{
		background-color: darkgrey;
		border-color: violet;
		border-radius: 3%;
		background-image: url(https://cdn.pixabay.com/photo/2017/09/11/23/09/milky-way-2740777_960_720.jpg);

	}

	#user{
  font-family: impact;
  width: 200px;
  text-align: center;
  margin-left: 155px;
  border-radius: 5%;
  border-color: darkblue;
	}

	#nome{
		text-align: center;
		color: white;
	    font-family: impact;
	    font-size: 40px;
	}

	#painell{
		border-radius: 3%;
		border-color: darkviolet;
	}

	#imgm{
		border-radius: 10%;
		border-color: white;
	}
	#fig{
		margin-left: 115px;
	}

	#boto{
		margin-left: 140px;
		border-radius: 10%;
		background-color:darkgrey ;
		color: white;
	}
	
	#botao{
		margin-left: 170px;
		border-radius: 10%;
		background-color: 				#8B008B;
		color: white;
		border-color: 			#8B008B;
		width: 200px;
		height: 50px;
		font-size: 30px;
		font-family: impact;
	}
	#imgmw{
		width: 300px;
		height: 300px;
		border-radius: 10%
	}
	#w10{
		margin-left: 95px;
		color: white;
		font-family: impact;
		font-size: 25px;
	}
	#surf{
		margin-left: 75px;
		color: white;
		font-family: impact;
		font-size: 25px;
	}
	#wlgtn{
		margin-left: 75px;
		color: white;
		font-family: impact;
		font-size: 25px;
	}
	#gado{
		margin-left: 75px;
		color: white;
		font-family: impact;
		font-size: 25px;
	}
	body{
		background-image: url(https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg);
		background-size: 100%;
	}
</style>
<body><br><br><br>
	
<img src="quiz.png" id="quiz">
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6" >
				<div class="panel panel-default" id="painell">
					<div class="panel-body" id="painel">
						<form name="pergunta1" method="post">
				
				<h1 id="nome">NOME:</h1>
				<input type="text" name="name" id="user" required><br><br>
				<h3 id="nome">ESCOLHA SEU AVATAR:</h3>
				 <div class="figura" id="fig"><img src="https://static.wixstatic.com/media/f07add_9786258e66cca0fbccad8d5286f3b9f4.jpg/v1/fill/w_297,h_233,al_c,q_80,usm_0.66_1.00_0.01/f07add_9786258e66cca0fbccad8d5286f3b9f4.webp" id="imgm" alt="Ferraz do Mal">
				 	<br>
				 	<p id="surf">Ferraz El Fodão</p>
				 	<input type="radio"  value='<img src="https://static.wixstatic.com/media/f07add_9786258e66cca0fbccad8d5286f3b9f4.jpg/v1/fill/w_297,h_233,al_c,q_80,usm_0.66_1.00_0.01/f07add_9786258e66cca0fbccad8d5286f3b9f4.webp" id="imgm" alt="Ferraz do Mal">' name="avatar" id="boto"></div>
				 <div class="figura" id="fig"><img src="https://static.wixstatic.com/media/f07add_e2b82d6e1b34c39a2e1a69189c1aa628.jpg/v1/fill/w_297,h_233,al_c,q_80,usm_0.66_1.00_0.01/f07add_e2b82d6e1b34c39a2e1a69189c1aa628.webp" id="imgm" alt="Amauri dos Gado"><br>
				 	<p id="gado">Amauri dos Gado</p>
                   <input type="radio" value='<img src="https://static.wixstatic.com/media/f07add_e2b82d6e1b34c39a2e1a69189c1aa628.jpg/v1/fill/w_297,h_233,al_c,q_80,usm_0.66_1.00_0.01/f07add_e2b82d6e1b34c39a2e1a69189c1aa628.webp" id="imgm" alt="Amauri dos Gado">' name="avatar" id="boto">
				 </div>
				 <div class="figura" id="fig"><img src="https://scontent.fssz2-1.fna.fbcdn.net/v/t1.0-9/46347678_2000239206736476_5304498633075326976_n.jpg?_nc_cat=105&_nc_oc=AQkNgMOelVvD__Jx9_X36wBr_6NC3W7_UzElvYkVuzReiQtkPu-8-8mlg88kcB4V0NOJKBbJ7BDHEhENJLuGgS59&_nc_ht=scontent.fssz2-1.fna&oh=74dc011eb3fea1ded7e6c3b54721614f&oe=5DD29BBA" id="imgmw" alt="Willians10">
				 	<br>
				 	<p id="w10">Willians10</p>
				 	<input type="radio" value='<img src="https://scontent.fssz2-1.fna.fbcdn.net/v/t1.0-9/46347678_2000239206736476_5304498633075326976_n.jpg?_nc_cat=105&_nc_oc=AQkNgMOelVvD__Jx9_X36wBr_6NC3W7_UzElvYkVuzReiQtkPu-8-8mlg88kcB4V0NOJKBbJ7BDHEhENJLuGgS59&_nc_ht=scontent.fssz2-1.fna&oh=74dc011eb3fea1ded7e6c3b54721614f&oe=5DD29BBA" id="imgmw" alt="Willians10">' name="avatar" id="boto"></div>
				 	<div class="figura" id="fig"><img src="https://scontent.fssz2-1.fna.fbcdn.net/v/t1.0-9/10557226_626930200760448_6348200269338792457_n.jpg?_nc_cat=100&_nc_oc=AQkw3pVLfvfZWIZrgb58Mx5Qf1mn_wO_3zvHY_nl8BrggVsvvYxpDk6dPhnwojoke1KbveqpvZZLUBufz4REvtjl&_nc_ht=scontent.fssz2-1.fna&oh=f1c60caf3368a404cbab382a4296d05e&oe=5DE53D97" id="imgmw" alt="O Hipnotizador">
				 	<br>
				 	<p id="wlgtn">O Hipnotizador</p>
				 	<input type="radio" value='' name="avatar" id="boto"></div><br><br>

				<input type="submit" name="enviar" value="COMEÇAR" id="botao">
				</form>
			</div>
			</div>
			<div class="col-sm-2"></div>
			</div>
		</div>
	</div>
	
</body>
</html>
