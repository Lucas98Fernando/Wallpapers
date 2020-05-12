<!DOCTYPE html>
<html>
<head>
  	<meta charset= "UTF-8";>	
  	<title> Wallpapers FULL HD</title>
  	<!--Libraries of Bootstrap-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--Font-->
      <link href="https://fonts.googleapis.com/css?family=Amarante&display=swap" rel="stylesheet">
    <!--Favicon-->
      <link rel="shortcut icon" type="image/png" href="https://www.freepnglogos.com/uploads/games-png/games-file-video-game-controller-icon-svg-wikimedia-commons-27.png"/>
    <!--CSS External-->
    	<link href="css/style.css" rel="stylesheet">
    <!--Libraries icons-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!--Navbar-->
  <?php include './header.php'; ?>
<!--End Navbar-->

<!-- Header -->
  <div class="header">
    <h1>Contato</h1>
    <p>Você pode entrar em contato conosco por aqui, para tirar dúvidas, sugerir mudanças, entre outros.</p>
  </div>
  
<!--Form-->
<div id="formcontact" class="container">
  <form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="uname"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;Nome de usuário:</label>
      <input type="text" class="form-control" id="username" placeholder="Informe o seu nome de usuário." name="userame" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor, preencha esse campo para prosseguir.</div>
    </div>
    <div class="form-group">
      <label for="pwd"><i class="fa fa-at" aria-hidden="true"></i>&nbsp;E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Informe o seu e-mail." name="email" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor, preencha esse campo para prosseguir.</div>
    </div>
    <div class="form-group">
      <label for="pwd"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>&nbsp;Mensagem:</label>
      <textarea rows="3" maxlength="500" class="form-control" id="message" placeholder="Descreva nesse campo as suas dúvias, questionamentos, sugestões, entre outros..." name="pswd" required></textarea>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor, preencha esse campo para prosseguir.</div>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>
</div>

<br>

<!--Footer-->
<?php include './footer.php'; ?>
<!--End Footer-->

</body>
</html>