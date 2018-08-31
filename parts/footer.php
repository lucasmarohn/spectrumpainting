<footer>
	<nav class="container">
		<a class="logo" href="index.php"><img src="<?php echo $home_url ?>images/logo.png" alt="spectrum painting and fine finishes"></a>
		<section class="navigation">
			<a href="<?php echo $home_url ?>" class="home">Home</a>
			<a href="<?php echo $home_url ?>portfolio/services" class="portfolio">Portfolio</a>
			<a href="<?php echo $home_url ?>services" class="services">Services</a>
			<a href="<?php echo $home_url ?>about" class="about">About</a>
			<a href="<?php echo $home_url ?>contact" class="contact">Contact</a>
		</section>

		<aside class="phone">
			<?php echo ('<a href="tel:1'. $phoneLink . '">' . $phonePrint . '</a>'); ?>
		</aside>
	</nav>
	<div class="container">
		<p class="footer-meta">Spectrum Painting is a professional paint company that performs residential painting, new construction painting and commercial painting services. Spectrum Painting provides expert interior painting, exterior painting, bathroom painting, kitchen painting, wallpaper removal, and weatherproofing. Spectrum Painting is dedicated to delivering high quality painting services to homeowners and business owners in San Luis Obispo and Santa Barbara Counties, including Avila Beach, Pismo Beach, Arroyo Grande, Nipomo, Santa Maria, Solvang, Santa Ynez, and their surrounding areas.</p>
		<p class="footer-meta">All Content Copyright &copy; Spectrum Painting | All Rights Reserved. | <a href="<?php echo $home_url; ?>site-map">Sitemap</a> | <a href="<?php echo $home_url; ?>privacy-policy">Privacy Policy</a></p>
	</div>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-68397024-1', 'auto');
  ga('send', 'pageview');
</script>
</footer>
</body>
</html>