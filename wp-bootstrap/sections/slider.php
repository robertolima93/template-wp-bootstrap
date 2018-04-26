<style type="text/css">

    #myCarousel{
        position: relative;
        /*margin: 0px;*/
        z-index: -1;
        /*margin-top: -252px;*/
        height: 100%;
        /*float: left;*/

    }
    .carousel-inner{
        height: 100%;
        width: 100%;
        /*float: left;*/

    }
    .carousel-inner .item{
        height: 100%;
        margin: 0;
    }


</style>
</style>
<?php
$slider01 = get_theme_mod('slider01');    // Slider
$slider02 = get_theme_mod('slider02');    // Slider
$slider03 = get_theme_mod('slider03');    // Slider
$slider04 = get_theme_mod('slider04');    // Slider

$tslid01 = get_theme_mod('texto01');    // Input do tipo "text"
$tslid02 = get_theme_mod('texto02');    // Input do tipo "text"
$tslid03 = get_theme_mod('texto03');    // Input do tipo "text"
$tslid04 = get_theme_mod('texto04');    // Input do tipo "text"

$link01 = get_theme_mod('link01'); // Recebe link da postagem  --> incrementar no customizer.php
$link02 = get_theme_mod('link02'); // Recebe link da postagem  --> incrementar no customizer.php
$link03 = get_theme_mod('link03'); // Recebe link da postagem  --> incrementar no customizer.php
$link04 = get_theme_mod('link04'); // Recebe link da postagem  --> incrementar no customizer.php

$titulo01 = get_theme_mod('titulo01'); // Recebe titulo da postagem  --> incrementar no customizer.php
$titulo02 = get_theme_mod('titulo02'); // Recebe titulo da postagem  --> incrementar no customizer.php
$titulo03 = get_theme_mod('titulo03'); // Recebe titulo da postagem  --> incrementar no customizer.php
$titulo04 = get_theme_mod('titulo04'); // Recebe titulo da postagem  --> incrementar no customizer.php
?>


<?php // echo $slider01; ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
        <div class="item active">
            <img class="d-block w-100" src="<?php echo $slider01; ?>" alt="<?php echo $titulo01; ?>" style="width:100%;">
        </div>

        <div class="item">
            <img class="d-block w-100" src="<?php echo $slider02; ?>" alt="<?php echo $titulo02; ?>" style="width:100%;">
        </div>

        <div class="item">
            <img class="d-block w-100" src="<?php echo $slider03; ?>" alt="<?php echo $titulo03; ?>" style="width:100%;">
        </div>
    </div>
<!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--        