<?php include('../parts/header.php'); ?>

<body class="about">

	<header>

		<?php include('../parts/nav.php'); ?>

	</header>



	<div class="container">

		<div class="med-content">

			<h1 class="page-title">About Spectrum Painting</h1>



			<img src="<?php echo $home_url; ?>images/about-img.jpg">



			<h3>Spectrum Painting and Fine Finishes has been serving homeowners on the central coast for over 20 years.</h3>

			<p>Spectrum Painting is a professional painting company that performs residential and commercial re-paints and custom residential new construction painting. Offering free color consulting, we specialize in designer interiors and custom cabinet refinishing. The estimates are detailed, the painters are professional and must pass a background check and of course, Spectrum Painting is fully insured.</p>

			



			<aside class="testimonial">

				"Thank you for our beautiful paint job. It was a pleasure to have your terrific crew working at our home. They are very professional, clean and highly skilled. Spectrum Painting is the best!"

				<span>—Donna Yaw, Homeowner</span>

			</aside>



			<p>From beginning to end, owner Doug Marohn is personally involved in your job and assures that only the highest quality materials and workmanship are used because your job is important! Spectrum Painting is so confident in its work that it offers a two year warranty on all labor &amp; materials.</p>



			<aside class="bg-accent">

				<a class="button secondary t-white big" href="http://www.yelp.com/biz/spectrum-painting-and-fine-finishes-pismo-beach" target="_blank">Read Reviews on Yelp!</a>

			</aside>

		</div><!-- med-content -->

			

		<aside class="sidebar">

			<section class="team">

				<h1 class="t-white">The Team</h1>

				<a class="team-img fancybox" rel="team" href="<?php echo $home_url; ?>images/full_size/team-photo1.jpg" title=""><img src="<?php echo $home_url; ?>images/team-photo.jpg"></a>

				<a class="team-img fancybox" rel="team" href="<?php echo $home_url; ?>images/full_size/team-photo3.jpg" title="Doug Marohn, owner and operator of SPECTRUM Painting"><img src="<?php echo $home_url; ?>images/team-photo3.jpg"></a>

				<a class="team-img fancybox" rel="team" href="<?php echo $home_url; ?>images/full_size/team-photo2.jpg" title=""><img src="<?php echo $home_url; ?>images/team-photo2.jpg"></a>

				<a class="team-img fancybox" rel="team" href="<?php echo $home_url; ?>images/full_size/team-photo4.jpg" title=""><img src="<?php echo $home_url; ?>images/team-photo4.jpg"></a>

			</section>

			<aside class="testimonial">

				"Doug, I want to take this opportunity to thank you for such a

professional job. There is no question, you are #1. From start

to finish your service was impeccable. There is no question in

my mind, you will be the only person I call next time. I will

recommend your service to anyone who needs painting."

				<span>—Gail West, Homeowner</span>

			</aside>

			<aside class="testimonial">

				"Doug answered all my questions, listened carefully to my instructions, and his crew performed great work. I would definitely hire his company again."

				<span>—Gary H, Homeowner</span>

			</aside>

		</aside><!-- sidebar -->

	</div><!-- container -->



	<script src="<?php echo $home_url; ?>js/jquery-1.10.2.js" type="text/javascript"></script>

	<script src="<?php echo $home_url; ?>js/jquery-ui.js" type="text/javascript"></script>

	<link rel="stylesheet" href="<?php echo $home_url; ?>js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

	<script type="text/javascript" src="<?php echo $home_url; ?>js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

	<script>

	  $(document).ready(function() {

		$(".fancybox").fancybox({

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

<?php include('../parts/footer.php'); ?>