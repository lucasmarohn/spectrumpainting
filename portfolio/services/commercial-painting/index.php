<?php
$page_type = "portfolio-service";
$page_title = "Commercial Painter | Spectrum Painting & Fine Finishes";
include('../../../parts/header.php'); 
?>

<body class="portfolio portfolio-service commercial">
	<header>
		<?php include('../../../parts/nav.php'); ?>
	</header>



	<div id="tabs" class="container">
		<?php include('../../../parts/nav-portfolio.php'); ?>
		<div class="med-content">
			<div id="commercial">
				<h1 class="page-title">Commercial</h1>
				<p>Spectrum Painting has the knowledge and experience to work with the various surfaces, products &amp; equipment needed to perform commercial jobs with skill and ease including office buildings, hotels, churches, shopping centers, warehouses and multi-family rental housing.</p>
				<p>Spectrum Painting is constantly on call for commercial work in the Santa Maria, Solvang, and San Luis Obispo area, with many of the areas most recognizable buildings under our belt.</p>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/1.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/2.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/3.jpg"></a>
				<aside class="testimonial">
					"We are grateful for Doug Marohn, owner of Spectrum Painting &amp; Fine Finishes for quickly getting to our painting project. The crew was one of the most pleasant groups of men to work with. They couldn’t do enough for us and were so flexible."
					<span>—Tinker Andrews, Director, Solvang Senior Center</span>
				</aside>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/4.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/4.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/5.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/5.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/6.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/6.jpg"></a>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/100_1659.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/100_1659.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/100_24113.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/100_24113.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/commercial/full_size/100_0108.jpg"><img src="<?php echo $home_url ?>images/portfolio/commercial/100_0108.jpg"></a>

				<aside class="testimonial">
					"I want to thank you for the great job you did. You were a treat to work with and hopefully I will have an opportunity to refer you."
					<span>—Cruz Ann Duarte, Realtor</span>
				</aside>
			</div><!-- commercial -->
		</div><!-- med content -->
    </div>
    
    <script src="<?php echo $home_url ?>js/jquery-1.10.2.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo $home_url ?>js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo $home_url ?>js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript">
	$(document).ready(function() {

	$(".fancybox").fancybox({
		openEffect : 'elastic',
		closeEffect : 'elastic',
		nextEffect : 'elastic',
		nextEffect : 'elastic',
		helpers : {
			overlay : {
				css : {
					'background' : 'rgba(27, 32, 46, 0.95)'
				}
			}
		}
	});
});
</script>


<?php include('../../../parts/footer.php'); ?>