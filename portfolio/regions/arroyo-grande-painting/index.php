<?php
$page_title = "Arroyo Grande Painter | Spectrum Painting & Fine Finishes";
include('../../../parts/header.php'); 
?>

<body class="portfolio portfolio-region arroyo-grande">
	<header>
		<?php include('../../../parts/nav.php'); ?>
	</header>

	<div id="tabs" class="container">
		<?php include('../../../parts/nav-portfolio.php'); ?>
		<div class="med-content">
			<div id="commercial">
				<h1 class="page-title">Arroyo Grande Painter</h1>
				<p>Spectrum Painting provides expert painting service to homeowners and businesses in Arroyo Grande. All painters are professionally trained and have years of experience performing the highest quality of work.</p>

				<h2>Giving Back to the Arroyo Grande Community</h2>
				<p>Spectrum Painting prides itself on being an active member of the community, and has adopted a stretch of highway between Arroyo Grande and Nipomo, and has sponsored numerous events independently, through the Rotary Club, and providing service to organizations such as the Paulding History House in Arroyo Grande.</p>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/arroyo-grande/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/arroyo-grande/1.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/arroyo-grande/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/arroyo-grande/2.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/arroyo-grande/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/arroyo-grande/3.jpg"></a>
				<aside class="testimonial">
					"We are grateful for Doug Marohn, owner of Spectrum Painting &amp; Fine Finishes for quickly getting to our painting project. The crew was one of the most pleasant groups of men to work with. They couldn’t do enough for us and were so flexible."
					<span>—Tinker Andrews, Director, Solvang Senior Center</span>
				</aside>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/arroyo-grande/full_size/4.jpg"><img src="<?php echo $home_url ?>images/portfolio/arroyo-grande/4.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/arroyo-grande/full_size/5.jpg"><img src="<?php echo $home_url ?>images/portfolio/arroyo-grande/5.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/arroyo-grande/full_size/6.jpg"><img src="<?php echo $home_url ?>images/portfolio/arroyo-grande/6.jpg"></a>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/arroyo-grande/full_size/7.jpg"><img src="<?php echo $home_url ?>images/portfolio/arroyo-grande/7.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/arroyo-grande/full_size/8.jpg"><img src="i<?php echo $home_url ?>mages/portfolio/arroyo-grande/8.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/arroyo-grande/full_size/9.jpg"><img src="<?php echo $home_url ?>images/portfolio/arroyo-grande/9.jpg"></a>

				<aside class="testimonial">
					"I want to thank you for the great job you did. You were a treat to work with and hopefully I will have an opportunity to refer you."
					<span>—Cruz Ann Duarte, Realtor</span>
				</aside>
			</div><!-- commercial -->
		</div><!-- med-content -->
    </div>
    
    <script src="<?php echo $home_url ?>jquery-1.10.2.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo $home_url ?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo $home_url ?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

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