<div class="nav-bg">
    <nav class="container">
        <a class="logo" href="<?php echo $home_url; ?>"><img src="<?php echo $home_url; ?>images/logo.png" alt="Spectrum Painting and Fine Finishes"></a>

        <section class="navigation">
            <a href="<?php echo $home_url; ?>" class="home">Home</a>
            <a href="<?php echo $home_url; ?>portfolio/services" class="portfolio">Portfolio</a>
            <a href="<?php echo $home_url; ?>services" class="services">Services</a>
            <a href="<?php echo $home_url; ?>about" class="about">About</a>
            <a href="<?php echo $home_url; ?>contact" class="contact">Contact</a>
        </section>

        <aside class="phone" id="phone">
            <?php echo ('<a href="tel://1'. $phoneLink . '">' . $phonePrint . '</a>'); ?>
        </aside>

    </nav>
</div><!-- nav-bg -->