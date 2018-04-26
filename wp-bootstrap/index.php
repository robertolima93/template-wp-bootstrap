<?php get_header(); ?>


<!--                  INICIO DO SLIDER                         -->

<?php
/* SLIDER SECTION */

$checkbox_slider = get_theme_mod('checkboxslider');  //recebe checkbox do slider true or false

if (isset($checkbox_slider) && $checkbox_slider != 1):

    get_template_part('sections/slider');

endif;

/* END SLIDER SECTION */
/* SLIDER SECTION */

$checkbox_slider_interactive = get_theme_mod('checkbox_slider_interactive');  //recebe checkbox do slider true or false

if (isset($checkbox_slider_interactive) && $checkbox_slider_interactive != 1):

    get_template_part('sections/slider_interactive');

endif;

/* END SLIDER SECTION */
?>
<!--                  INICIO DA SEÇÃO DE DESTAQUE                         -->

<?php require get_template_directory() . '/sections/destaques.php'; ?>
<!--                  INICIO DA width-full-box                         -->
<?php require get_template_directory() . '/sections/postagens.php'; ?>

<!--                  FIM DA SEÇÃO DE DESTAQUE                         -->



<?php get_footer(); ?>