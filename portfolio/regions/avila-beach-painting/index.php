<?php
$page_title = "Avila Beach Painter | Spectrum Painting & Fine Finishes";
include('../../../parts/header.php'); 
?>

<body class="portfolio portfolio-region avila-beach">
	<header>
		<?php include('../../../parts/nav.php'); ?>
	</header>

	<div id="tabs" class="container">
		<?php include('../../../parts/nav-portfolio.php'); ?>
		<div class="med-content">
			<div id="commercial">
				<h1 class="page-title">Avila Beach Painter</h1>
				<p>Spectrum Painting performs exceptional interior and exterior house painting in Avila Beach. There are special considerations that need to be taken into account when choosing a paint contractor in Avila Beach.</p>

				<h2>What to look for in exterior painting in Avila Beach</h2>
				<p>Ensure that the painter is committed to using only quality weatherproof materials that won’t be easily broken down by Avila’s coastal weather. Expert application is paramount, any paint service should apply all materials with great care, ensuring that there are no weak spots where salty air can begin to break down the paint. A quality paint contractor will use cost-effective materials that will hold up for at least 3-5 years. Spectrum Painting includes a 1 Year Warranty on all paint work completed in Avila Beach.</p>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/avila-beach/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/avila-beach/1.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/avila-beach/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/avila-beach/2.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/avila-beach/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/avila-beach/3.jpg"></a>
				<aside class="testimonial">
					"We are grateful for Doug Marohn, owner of Spectrum Painting &amp; Fine Finishes for quickly getting to our painting project. The crew was one of the most pleasant groups of men to work with. They couldn’t do enough for us and were so flexible."
					<span>—Tinker Andrews, Director, Solvang Senior Center</span>
				</aside>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/avila-beach/full_size/4.jpg"><img src="<?php echo $home_url ?>images/portfolio/avila-beach/4.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/avila-beach/full_size/5.jpg"><img src="<?php echo $home_url ?>images/portfolio/avila-beach/5.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/avila-beach/full_size/6.jpg"><img src="<?php echo $home_url ?>images/portfolio/avila-beach/6.jpg"></a>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/avila-beach/full_size/7.jpg"><img src="<?php echo $home_url ?>images/portfolio/avila-beach/7.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/avila-beach/full_size/8.jpg"><img src="i<?php echo $home_url ?>mages/portfolio/avila-beach/8.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/avila-beach/full_size/9.jpg"><img src="<?php echo $home_url ?>images/portfolio/avila-beach/9.jpg"></a>

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