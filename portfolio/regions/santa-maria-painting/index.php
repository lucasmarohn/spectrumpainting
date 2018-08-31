<?php
$page_title = "Santa Maria Painter | Spectrum Painting & Fine Finishes";
include('../../../parts/header.php'); 
?>

<body class="portfolio portfolio-region santa-maria">
	<header>
		<?php include('../../../parts/nav.php'); ?>
	</header>

	<div id="tabs" class="container">
		<?php include('../../../parts/nav-portfolio.php'); ?>
		<div class="med-content">
			<div id="santa-maria">
				<h1 class="page-title">Santa Maria Painter</h1>
				<p>Spectrum Painting has painted hundreds of houses in Santa Maria and Orcutt over it’s 25+ years in business. All work is carefully performed by trained and experienced professionals who are dedicated to providing the best possible interior and exterior painting results.</p>

				<h2>Expert Santa Maria Painting Service</h2>
				<p>Only quality and cost effective materials are used for Spectrum Painting’s house painting service to ensure lasting results that look great year after year. A standard warranty of 1 year is included on all paint work and materials completed in Santa Maria. </p>


				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/santa-maria/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/santa-maria/1.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/santa-maria/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/santa-maria/2.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/santa-maria/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/santa-maria/3.jpg"></a>
				<aside class="testimonial">
					"We are grateful for Doug Marohn, owner of Spectrum Painting &amp; Fine Finishes for quickly getting to our painting project. The crew was one of the most pleasant groups of men to work with. They couldn’t do enough for us and were so flexible."
					<span>—Tinker Andrews, Director, Solvang Senior Center</span>
				</aside>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/santa-maria/full_size/4.jpg"><img src="<?php echo $home_url ?>images/portfolio/santa-maria/4.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/santa-maria/full_size/5.jpg"><img src="<?php echo $home_url ?>images/portfolio/santa-maria/5.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/santa-maria/full_size/6.jpg"><img src="<?php echo $home_url ?>images/portfolio/santa-maria/6.jpg"></a>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/santa-maria/full_size/7.jpg"><img src="<?php echo $home_url ?>images/portfolio/santa-maria/7.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/santa-maria/full_size/8.jpg"><img src="i<?php echo $home_url ?>mages/portfolio/santa-maria/8.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/santa-maria/full_size/9.jpg"><img src="<?php echo $home_url ?>images/portfolio/santa-maria/9.jpg"></a>

				<aside class="testimonial">
					"I want to thank you for the great job you did. You were a treat to work with and hopefully I will have an opportunity to refer you."
					<span>—Cruz Ann Duarte, Realtor</span>
				</aside>
			</div><!-- commercial -->
		</div><!-- med-content -->
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