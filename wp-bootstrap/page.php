<?php get_header(); ?>

<div class="container page">
	<div class="row">
		<?php if (have_posts()): while(have_posts()) : the_post();?>
		<div class="col-md-8 conteudo-page">
			<h1><?php the_title();?></h1>
			<?php the_content();?>
		</div>
	<?php endwhile;  else: endif ?>
		<?php get_sidebar(); ?>

	</div>


</div>

<?php get_footer(); ?>