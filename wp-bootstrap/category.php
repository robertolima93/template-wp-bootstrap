<?php get_header(); ?>


<div class="container conteudo-category">
    <div class="row">
    <div class="row">
    	<h4><?php single_cat_title('Navegando na categoria')?></h4>
	</div>
        <div class="col-md-8" id="posts-games">

            <!-- ********************************************************************** -->
            <?php if (have_posts()): while(have_posts()) : the_post();?>  

                <div class="media">
                    <div class="media-left">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('post-img-our', array('class' => 'media-object img-responsive img-thumbnail')); ?></a>
                    </div>
                    <div class="media-body">
                        <h1 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><?php
                            echo rwmb_meta('Subtitulo');
                            ?></a>
                        <p class="visible-lg"><?php
                            echo wp_trim_words(get_the_excerpt(), 40);
                            ?></p>
                    </div>
                </div>
                <?php endwhile; 
		else:
		endif
	?>


        </div>
        <?php get_sidebar();?>

    </div>

</div>
<?php get_footer(); ?>
