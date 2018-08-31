<?php include('../parts/header.php'); ?>

<body class="sitemap">
	<header>
	<?php include('../parts/nav.php'); ?>

	</header>
	<div class="container large-content">
		<h1 class="page-title">Site Map</h1>
		<ul>
            <li><a href="<?php echo $home_url ?>">Home</a></li>
            <li>
                <a href="<?php echo $home_url ?>">Portfolio</a>
                <ul>
                    <li>Jobs Near Me</li>
                    <li><a href="<?php echo $home_url ?>portfolio/regions/san-luis-obispo-painting">San Luis Obispo</a></li>
                    <li><a href="<?php echo $home_url ?>portfolio/regions/avila-beach-painting">Avila Beach</a></li>
                    <li><a href="<?php echo $home_url ?>portfolio/regions/pismo-beach-painting">Pismo Beach</a></li>
                    <li><a href="<?php echo $home_url ?>portfolio/regions/arroyo-grande-painting">Arroyo Grande</a></li>
                    <li><a href="<?php echo $home_url ?>portfolio/regions/solvang-painting">Solvang</a></li>
                    <li><a href="<?php echo $home_url ?>portfolio/regions/santa-ynez-painting">Santa Ynez</a></li>

                    <li>Jobs By Type</li>
                    <li><a href="<?php echo $home_url ?>portfolio/services/san-luis-obispo-painting">Residential</a></li>
                    <li><a href="<?php echo $home_url ?>portfolio/services/avila-beach-painting">Commercial</a></li>
                    <li><a href="<?php echo $home_url ?>portfolio/services/pismo-beach-painting">New Construction</a></li>
                    <li><a href="<?php echo $home_url ?>portfolio/services/arroyo-grande-painting">Cabinetry</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $home_url ?>services">Services</a></li>
            <li><a href="<?php echo $home_url ?>about">About</a></li>
            <li><a href="<?php echo $home_url ?>contact">Contact</a></li>
            <li><a href="<?php echo $home_url ?>privacy-policy">Privacy Policy</a></li>
        </ul>	
	</div><!-- container -->

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php include('../parts/footer.php'); ?>

