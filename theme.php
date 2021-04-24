<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title><?= $Wcms->page('title')?> - <?= $Wcms->get('config', 'siteTitle') ?> </title>
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta property="og:url" content="<?= $this->url() ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
	<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
	<meta name="twitter:site" content="<?= $this->url() ?>" />
	<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
	<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?= $Wcms->css()?>

	<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css')?>">
</head>
<body class="is-preload">
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>
	
			<!-- Wrapper -->
			<div id="wrapper" class="fade-in">
				
					<!-- Intro -->
					<div id="intro">
						<h1>Wicca.Today</h1>
						<p>Comunicando ideas sobre el estilo de vida m&aacute;gico y la pr&aacute;ctica del camino Wicca; un sendero espiritual de la Madre Tierra. <br />Hablemos de la Magia, en espa&ntilde;ol. </p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>
					
					<!-- Header -->
					<header id="header">
						<a href="<?= $Wcms->url() ?>"> class="logo">WICCA&#8226;TODAY</a>
					</header>
					
					<!-- Nav -->
					<nav id="nav">
						<ul class="links">
						<?= $Wcms->menu() ?>
						</ul>
						<ul class="icons">
							<li><a href="http://unitedtheological.com" style="text-decoration:none;"><span class="label material-icons">school</span></a></li>
							<li><a href="http://mail.unitedtheological.com"><span class="label material-icons">email</span></a></li>
							<li><a href="http://calendar.unitedtheological.com"><span class="label material-icons">today</span></a></li>
							<li><a href="http://ordendelaverdad.com" ><span class="label material-icons">landscape</span></a></li>
						</ul>
					</nav>
					
					<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
						<!--			<span class="date">April 4, 2021</span> -->
														<a class="image align-center"><img src="images/wiccatoday.webp" style="max-width:400px" alt="Wicca.Today official logo" /></a>
									<p>Hablemos de la magia en el siglo XXI, en tu idioma hispano.</p>
								</header>

							<!--	<ul class="actions special">
									<li><a href="#" class="button large">Full Story</a></li>
								</ul> -->
							</article>


						<!-- Posts -->
							<section class="posts">
						
						<?= $Wcms->page('content') ?>
							<!--
								<article>
									<header>
										<span class="date">available on April 22 2021</span>
										<h2><a >Honors &<br />
										Recognitions</a></h2>
									</header>
									<a href="honors.html" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
									<p>Some of the Honors bestowed by the Council of Minerva.</p>
									
									<ul class="actions special">
										<li><a href="honors.html" class="button">Read More</a></li>
									</ul>
								</article>
							-->	
								
								
							</section>
							
							
				<!-- Footer -->
							<footer>
								Wicca.Today Footer
							</footer>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Postal Address</h3>
								<p>PO Box 507<br />
								Dorado, PR 00646-0507</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(202) 830-3530</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@ordominerva.com</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<?= $Wcms->footer() ?>
					</div>			
			</div>
			
				<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
				<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<?= $Wcms->js() ?>
	
	</body>
</html>
					