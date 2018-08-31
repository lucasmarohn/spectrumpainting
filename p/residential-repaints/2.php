<?php require('../mail-landing.php'); ?>

<?php include('../../parts/header.php'); ?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<body class="landing">
<div class="nav-bg">
    <nav class="container"> 
      <span class="logo"> 
        <img src="<?php echo $home_url ?>images/logo.png" alt="spectrum painting and fine finishes" > 
      </span> 
    </nav>
  </div>

<div class="container landing-top">
<section class="landing-quote">

  <?php if(isset($_GET['FormSubmit'])){ ?>
    <span style="background:#558134;border-radius:5px;display:block;padding:10px;text-align:center;margin-bottom:30px;color:white;text-shadow: 1px 1px 2px rgba(0,0,0,.3);">
    Thank you for your inquiry, we will be contacting you shortly.
    </span>
  <?php } if(isset($_GET['FormFail'])){ ?>
    <span style="background:#ce304a;color:white;border-radius:5px;display:block;padding:10px;text-align:center;margin-bottom:30px;">
    The contact form did not send! Make sure you filled out the captcha and try again, or give us a call.
    </span>
  <?php	} ?>

  <form method="POST" id="repaints-form">
    <h1 class="t-white">Claim Your Senior Discount!</h1>
    <p class="t-white">For a limited time, <br/>seniors get a <strong>15%</strong> discount.<br/><br/>Don't miss out! <br/>Request your consultation today.</p>

    <label for="name">Your Name: *</label>
    <input required="required" name="name" type="text" autocomplete="on"></input>

    <label for="email">Your Email: *</label>
    <input required="required" name="email" type="email" autocomplete="on"></input>

    <label for="phone">Phone Number: *</label>
    <input name="phone" type="tel" class="phone_us" maxlength="14"></input>

    <input type="hidden" name="source" value="2: Senior Discount"></input>
    <div class="g-recaptcha" data-sitekey="6LcrAh4UAAAAAHBO6gWOV5jG29uNCTxm-V_ykcMn" style="display:inline-block;margin-right: 20px;margin-bottom:20px;"></div>

    <input type="submit" name="ContactButton" class="button secondary t-white big" value="Request a Consultation" id="ContactButton"></input>
  </form>
</section><!-- home-quote -->

<section class=" landing-intro">
  <div class="yelp-reviews">
    <img src="../../images/star-rating.svg" class="star-icon"><br/>
    <span class="on-yelp">4.5 Star Average Over 30+ Reviews on Yelp!</span>
  </div>

  <img src="<?php echo $home_url ?>images/home-image.png">
  <h1>Spectrum Painting and Fine Finishes has been serving homeowners on the central coast for over 20 years.</h1>

  <aside class="testimonial">
  "We are grateful for Doug Marohn, owner of Spectrum Painting &amp; Fine Finishes for quickly getting to our painting project. The crew was one of the most pleasant groups of men to work with. They couldn’t do enough for us and were so flexible."
  <span>—Tinker Andrews, Director, Solvang Senior Center</span>
  </aside>
</section>

</div><!-- container -->



<div class="white-bg">
<section class="container">
  <section class="gallery"> 
    <img src="<?php echo $home_url ?>images/portfolio/residential/14.jpg"> 
    <img src="<?php echo $home_url ?>images/portfolio/residential/13.jpg"> 
    <aside class="testimonial">"Doug and his crew finished painting our house today.  The paint Job looks great.  I have to say Doug and crew were very professional and completed the job on time and on budget.  I will definitely be using and recommending Spectrum Painting in the future.
Thank you Spectrum!!"<span>—Erik S. on Yelp</span></aside> 
    <img src="<?php echo $home_url ?>images/portfolio/residential/12.jpg"> 
    <img src="<?php echo $home_url ?>images/portfolio/residential/11.jpg"> 
    <img src="<?php echo $home_url ?>images/portfolio/residential/7.jpg"> 
    <img src="<?php echo $home_url ?>images/portfolio/residential/2.jpg">
  </section>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-68397024-1', 'auto');
  ga('send', 'pageview');
</script>

  <div class="nav-bg">
    <nav class="container"> 
      <span class="logo"> 
        <img src="<?php echo $home_url ?>images/logo.png" alt="spectrum painting and fine finishes" > 
      </span> 
      
      <a href="tel:+18055444195 " class="phone">Call Us: (805) 544-4195 </a>
    </nav>
  </div>
</body>

</html>