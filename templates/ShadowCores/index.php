<?php
defined('MYAAC') or die('Direct access not allowed!');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo template_place_holder('head_start'); ?>
		<!-- Icons -->
		<link rel="shortcut icon" href="<?php echo $template_path; ?>/images/favicon.gif" />
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/bootstrap.css">
        <script src="./js/bootstrap.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!--script type="text/javascript" src="<?php echo $template_path; ?>/js/misc.js"></script-->
		<?php echo template_place_holder('head_end'); ?>
	</head>
	<body>
        <header>
            <nav>
                <div class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="<?php echo $config['url']; ?>/">
                        <img src="<?php echo $template_path; ?>/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        <?php echo $config['server']['serverName']; ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $config['url']; ?>/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $config['url']; ?>/news">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $config['url']; ?>/download">Download</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $config['url']; ?>/forum">Forum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $config['url']; ?>/register">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $config['url']; ?>/login">Login</a>
                            </li>               
            </nav>

	</body>
</html>
