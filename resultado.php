<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    body{
      background-image: url(https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg);
      background-size: 100%;
    }
    #painel{
      text-align: center;

    }
    #imgm{
      width: 300px;
      border:solid;
      border-radius: 10%;
    }
    #imgmw{
       width: 300px;
      border:solid;
      border-radius: 10%;
    }
  </style>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title></title>
</head>
<body>

</body>
</html>
<?php
$pontos=0;
echo '<br>';
echo'<div class="container">';
    echo '<div class="row">';
    echo '<div class= "col-sm-4"></div>';
        echo' <div class="col-sm-4">';
            echo '<div class="panel panel-default">';
               echo '<div class="panel-body" id=painel>';


   echo "<legend><h3>INFORMAÇÕES DO USUARIO </h3></legend>";
   echo "<h4>Usuario: </h4>".$_SESSION['name'];
   echo "<br>";
  
   echo "<h4>Avatar: </h4>".$_SESSION['avatar'];


   echo "<h4>Resposta1: </h4>".$_SESSION['resposta1'];
    
    if(isset($_SESSION['resposta1'])){
      if($_SESSION['resposta1'] == 'Incontaveis vezes'){
        echo '<h4 style="color:green">Certo</h4>';
        $pontos++;
      }
      else{
        echo '<h4 style="color:red">Errado</h4>';
      }
    }
    
    echo "<h4>Resposta2: </h4>".$_SESSION['resposta2'];
     if(isset($_SESSION['resposta2'])){
      if($_SESSION['resposta2'] == 'Incontaveis vezes'){
      echo '<h4 style="color:green">Certo</h4>';
      $pontos++;
    }
      else{
         echo '<h4 style="color:red">Errado</h4>';
      }
    }
    
     
     echo "<h4>Resposta3: </h4>".$_SESSION['resposta3'];
      if(isset($_SESSION['resposta3'])){
      if($_SESSION['resposta3'] == 'Incontaveis vezes'){
         echo '<h4 style="color:green">Certo</h4>';
         $pontos++;
      }
      else{
        
         echo '<h4 style="color:red">Errado</h4>';
      }
    }
    
      echo "<h4>Resposta4: </h4>".$_SESSION['resposta4'];
      if(isset($_SESSION['resposta4'])){
      if($_SESSION['resposta4'] == 'Pegou fogo'){
        
        echo '<h4 style="color:green">Certo</h4>';
        $pontos++;
      }
      else{
        
        echo '<h4 style="color:red">Errado</h4>';
      }
    }
         echo "<h4>Resposta5: </h4>".$_SESSION['resposta5'];
        if(isset($_SESSION['resposta5'])){
      if($_SESSION['resposta5'] == 'Incontaveis vezes'){
        
        echo '<h4 style="color:green">Certo</h4>';
        $pontos++;
      }
      else{
        echo '<h4 style="color:red">Errado</h4>';
      }
    }
   echo "<br>";
   echo "PONTOS: ".$pontos;
   echo "<br>";
   echo "NOTA: ";
   if ($pontos==5) {
    echo "MB";
     # code...
   }
   elseif($pontos==4){
echo "B";
   }
   elseif($pontos==3){
echo "R";
   }
   elseif($pontos==2){
echo "I";
   }
   elseif($pontos==1){
echo "I";
   }
     echo "<br>";
      echo '</div>';
   echo '</div>';
   echo '</div>';
   echo '<div class= "col-sm-2"></div>';
   echo '</div>';

   ?>