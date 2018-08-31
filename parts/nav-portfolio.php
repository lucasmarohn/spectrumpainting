<div class="sidebar">
<ul class="tab-sort sort-content">
    <p class="sort-meta">View our Portfolio of Paint Work</p>
    <!-- <li><a class="tab-portfolio-region" href="<?php echo $home_url ?>portfolio/regions">Jobs Near Me</a></li> -->
    <li><a class="tab-portfolio-service" href="<?php echo $home_url ?>portfolio/services/">Jobs by Type</a></li>
</ul>

<?php
if(//isset($page_type) && $page_type == "portfolio-service"
    true) {
    echo ('
    <ul class="tab-service sort-content">
        <li><a class="tab-residential" href="' . $home_url . 'portfolio/services/residential-house-painting">Residential</a></li>
        <li><a class="tab-commercial" href="' . $home_url . 'portfolio/services/commercial-painting">Commercial</a></li>
        <li><a class="tab-new-construction" href="' . $home_url . 'portfolio/services/new-construction-painting">New Construction</a></li>
        <li><a class="tab-cabinetry" href="' . $home_url . 'portfolio/services/custom-cabinet-painting">Cabinetry</a></li>
    </ul>');
}
else {
 echo ('
    <ul class="tab-region sort-content">
        <li><a class="tab-slo" href="' . $home_url . 'portfolio/regions/san-luis-obispo-painting">San Luis Obispo</a></li>
        <li><a class="tab-avila-beach" href="' . $home_url . 'portfolio/regions/avila-beach-painting">Avila Beach</a></li>
        <li><a class="tab-pismo-beach" href="' . $home_url . 'portfolio/regions/pismo-beach-painting">Pismo Beach</a></li>
        <li><a class="tab-arroyo-grande" href="' . $home_url . 'portfolio/regions/arroyo-grande-painting">Arroyo Grande</a></li>
        <li><a class="tab-solvang" href="' . $home_url . 'portfolio/regions/solvang-painting">Solvang</a></li>
        <li><a class="tab-santa-ynez" href="' . $home_url . 'portfolio/regions/santa-ynez-painting">Santa Ynez</a></li>
    </ul>');
}
?>
</div>