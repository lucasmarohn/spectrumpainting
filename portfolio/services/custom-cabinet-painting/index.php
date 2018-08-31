<?php
$page_type = "portfolio-service";
$page_title = "Custom Cabinet Painter | Spectrum Painting & Fine Finishes";
include('../../../parts/header.php'); 
?>

<body class="portfolio portfolio-service cabinetry">
	<header>
		<?php include('../../../parts/nav.php'); ?>
	</header>

<div id="tabs" class="container">
	<?php include('../../../parts/nav-portfolio.php'); ?>

	<div class="med-content">
		<div id="cabinetry">
			<h1 class="page-title">Custom Cabinetry</h1>
			<p>Spectrum Painting can expertly paint or finish cabinetry using the highest quality materials and techniques. Spectrum Painting has its own cabinet refinishing shop located in San Luis Obispo county and can conveniently paint and finish the work off-site to avoid the stress of displacement from ones home, kitchen or garage space.</p>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/1.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/1.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/2.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/2.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/3.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/3.jpg"></a>
			<aside class="testimonial">
				"Thanks again for the professional job you did. You have the greatest staff. The work is perfect. Your painters treated my house as if it was theirs. Much appreciated."
				<span>—Mary Miles, Homeowner</span>
			</aside>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/4.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/4.JPG"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/5.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/5.JPG"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/6.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/6.JPG"></a>

			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/12.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/12.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/13.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/13.jpg"></a>
			<a class="fancybox" rel="group" href="<?php echo $home_url ?>images/portfolio/cabinetry/full_size/14.jpg"><img src="<?php echo $home_url ?>images/portfolio/cabinetry/14.jpg"></a>

			<aside class="testimonial">
				"Thank you very much for your services and personal attention. We love the work that was done and we were really happy with how quickly everything was completed. We’ll be happy to recommend your services!"
				<span>—Gina Danley, Homeowner</span>
			</aside>
		</div><!-- cabinetry -->
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