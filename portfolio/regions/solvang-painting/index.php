<?php
$page_title = "Solvang Painter | Spectrum Painting & Fine Finishes";
include('../../../parts/header.php'); 
?>

<body class="portfolio portfolio-region solvang">
	<header>
		<?php include('../../../parts/nav.php'); ?>
	</header>

	<div id="tabs" class="container">
		<?php include('../../../parts/nav-portfolio.php'); ?>
		<div class="med-content">
			<div id="commercial">
				<h1 class="page-title">Solvang Painter</h1>
				<p>Spectrum Painting has painted many of the most recognizable buildings in downtown Solvang, and has also painted lots of homes in the surrounding neighborhood. Interior and Exterior paint work provided on both residential and commercial projects in Solvang is covered by a 1 year warranty on paint and materials.</p>

				<h2>Stand out in Solvang</h2>
				<p>Painting homes and businesses in Solvang requires an experience and a trained eye. Choosing the right color and materials to maintain Solvang’s signature look requires more care than other locations. Spectrum Painting brings over 25 years of color consulting to the table and can help determine the right color and finish to help Solvang homeowners and businesses fit in and still stand out in their community.</p>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/solvang/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/solvang/1.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/solvang/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/solvang/2.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/solvang/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/solvang/3.jpg"></a>
				
				<aside class="testimonial">
					"We are grateful for Doug Marohn, owner of Spectrum Painting &amp; Fine Finishes for quickly getting to our painting project. The crew was one of the most pleasant groups of men to work with. They couldn’t do enough for us and were so flexible."
					<span>—Tinker Andrews, Director, Solvang Senior Center</span>
				</aside>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/solvang/full_size/4.jpg"><img src="<?php echo $home_url ?>images/portfolio/solvang/4.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/solvang/full_size/5.jpg"><img src="<?php echo $home_url ?>images/portfolio/solvang/5.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/solvang/full_size/6.jpg"><img src="<?php echo $home_url ?>images/portfolio/solvang/6.jpg"></a>

				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/solvang/full_size/100_1659.jpg"><img src="<?php echo $home_url ?>images/portfolio/solvang/100_1659.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/solvang/full_size/100_24113.jpg"><img src="i<?php echo $home_url ?>mages/portfolio/solvang/100_24113.jpg"></a>
				<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/solvang/full_size/100_0108.jpg"><img src="<?php echo $home_url ?>images/portfolio/solvang/100_0108.jpg"></a>

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