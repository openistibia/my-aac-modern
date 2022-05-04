<?php
defined('MYAAC') or die('Direct access not allowed!');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo template_place_holder('head_start'); ?>
		<!-- Icons -->
		<link rel="shortcut icon" href="<?php echo $template_path; ?>/images/favicon.gif" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/style.css">
		<!-- rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/bootstrap.css"-->
		<!--script type="text/javascript" src="<?php echo $template_path; ?>/js/misc.js"></script-->
	<?php echo template_place_holder('head_end'); ?>
	</head>
	<body>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Ankrahmun Global</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Pagina inicial <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Informações do servidor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Doaçãoes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Gerenciador de conta</a>
            <a class="dropdown-item" href="#">Criar uma conta</a>
            <a class="dropdown-item" href="#">Entrar em sua conta</a>
            <a class="dropdown-item" href="#">Recuperar senha</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search character" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="nav-scroller bg-white box-shadow">
    <nav class="nav nav-underline">
      <a class="nav-link active" href="#">Comunidade</a>
      <a class="nav-link" href="#">Procurar personagem</a>
      <a class="nav-link" href="#">Ranks</a>
      <a class="nav-link" href="#">Ultimas mortes</a>
      <a class="nav-link" href="#">Casas</a>
      <a class="nav-link" href="#">Casas de guildas</a>
      <a class="nav-link" href="#">Guildas</a>
    </nav>
  </div>

  <main role="main" class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded box-shadow">
      <img class="mr-3" src="https://static.tibia.com/images/news/tibiaobserver_icon_news09.png" alt="" width="48" height="48">
      <div class="lh-100">
        <h6 class="mb-0 text-white lh-100"><i class="fa fa-server" aria-hidden="true"></i>Sever Status </h6>
        <small>Endereço do servidor : <?php echo $_SERVER['SERVER_NAME']; ?></small>
        <br>
        <small>Versão do servidor <?php echo ($config['client'] / 100); ?></small>
        <br>
        <small > 
        <?php
					if(!$status['online']) {
								echo '<span class="badge badge-danger">Offline</span>';
										}
										else {
											echo '<td colspan=2>Status: <span class="label label-success pull-right">Online!</span></td>';
										}
									?>
								<?php if ($status['online']) { ?>
									<a href="<?php echo $template['link_online']; ?>">
                  <span class="badge badge-pill bg-light align-text-bottom"><?php echo $status['players']; ?> players online</a>  
                <?php } ?>  
        
        </small>
      </div>
    </div>

    <div class="my-3 p-3 bg-white rounded box-shadow">
    <div class="media text-muted pt-3">
      <p>
         <?php echo template_place_holder('center_top') . $content; ?>
                </p>
         </div>
</div>
<?php echo tickers() . template_place_holder('center_top') ?>

  </main> 
  <!-- JS LINK -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!--script type="text/javascript" src="<?php echo $template_path; ?>/js/function.js"></script-->

</body>

</html>
