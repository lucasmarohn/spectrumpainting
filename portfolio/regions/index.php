<?php
$page_type = "portfolio-regions";
$page_title = "Service Areas | Spectrum Painting & Fine Finishes";
include('../../parts/header.php'); 
?>

<body class="portfolio portfolio-region">
	<header>
		<?php include('../../parts/nav.php'); ?>
	</header>

	<div id="tabs" class="container">
		<?php include('../../parts/nav-portfolio.php'); ?>
		<div class="med-content">
			<div id="commercial">
				<h1 class="page-title">Has Spectrum Painted Near Me?</h1>
				<p>For homeowners looking for house painting in Pismo Beach, Spectrum Painting brings over 25 years of experience painting in Pismo’s unique coastal climate. </p>

				<h2>Expert Painting Service</h2>
				<p>Pismo Beach requires extra attention to detail during the exterior painting process, homes in close proximity to the beach demand expert knowledge of weather resistant paints and materials. Proper weather sealing is also incredibly important to lock out sand and other particulate that can be found in the air in Pismo Beach. Spectrum Painting includes a 1 Year Warranty on paint work performed in Pismo Beach.</p>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/pismo-beach/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/pismo-beach/1.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/pismo-beach/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/pismo-beach/2.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/pismo-beach/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/pismo-beach/3.jpg"></a>
				<aside class="testimonial">
					"We are grateful for Doug Marohn, owner of Spectrum Painting &amp; Fine Finishes for quickly getting to our painting project. The crew was one of the most pleasant groups of men to work with. They couldn’t do enough for us and were so flexible."
					<span>—Tinker Andrews, Director, Solvang Senior Center</span>
				</aside>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/pismo-beach/full_size/4.jpg"><img src="<?php echo $home_url ?>images/portfolio/pismo-beach/4.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/pismo-beach/full_size/5.jpg"><img src="<?php echo $home_url ?>images/portfolio/pismo-beach/5.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/pismo-beach/full_size/6.jpg"><img src="<?php echo $home_url ?>images/portfolio/pismo-beach/6.jpg"></a>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/pismo-beach/full_size/7.jpg"><img src="<?php echo $home_url ?>images/portfolio/pismo-beach/7.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/pismo-beach/full_size/8.jpg"><img src="i<?php echo $home_url ?>mages/portfolio/pismo-beach/8.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/pismo-beach/full_size/9.jpg"><img src="<?php echo $home_url ?>images/portfolio/pismo-beach/9.jpg"></a>

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


<?php include('../../parts/footer.php'); ?>