<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SAM</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<!-- comentário -->
  <?php include 'cabecalho.php';?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <!--<h1 class="header center orange-text">Self Assessment Manikin (SAM) </h1>-->
      <div class="row center">
        <h5 class="header col s12 light">. Avalie o chatterbot TOB-STT em relação à satisfação</h5>
      </div>
      <br><br>
    </div>
  </div>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <div class="icon-block">
		  
    
				<h5 class="center">Preencha o seguinte formulário</h5>

				<form action="enviar.php" method="POST">

				        <div class="input-field col s12">
						<i class="material-icons prefix sKtq-scColor">&#xE87C;</i>
						<input id="icon_prefix" name="Nome" type="text" class="validate sKtq-scColor" required>
						<label for="icon_prefix" class = "sKtq-scColor">Nome</label>
						</div>

						<div class="input-field col s12">
							<i class="material-icons prefix sKtq-scColor">&#xE0BE;</i>
							<input id="icon_prefix" name="Email" type="email" class="validate sKtq-scColor" required>
							<label for="icon_prefix" class = "sKtq-scCo lor">Email</label>
						</div>
				
				<h6 class="center">Observando a escala a seguir (insatisfeito até satisfeito), indique o quão satisfeito você ficou a partir da interação:</h6>
				

				<img src="images/sam3.PNG">
				
					<p align="center">
					  <label>
						<input type="range" name="Sam" min="1" max="9"  style="width:86%" class="validate sKtq-scColor" required>  
						
					  </label>
					</p>

                    
					    <div class = "center-align">

					<button class="btn waves-effect waves-light sKtq-bgScColor" type="submit"> Enviar
						<i class="material-icons right">send</i>
					</button>

				</div>


		

				</form>
	

          </div>
    </div>

      </div>
        </div>
          </div>


		  
		  
		  
</div>
<?php include 'rodape.php';?>
</div>

  


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
