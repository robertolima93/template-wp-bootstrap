

<!--                  INICIO DO SLIDER                         -->


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php
            $posts_slides = new WP_Query(array(
                'category_name' => 'destaque',
                'posts_per_page' => 3
            ));
            $i = 1;
            while($posts_slides->have_posts()):$posts_slides->the_post();
        ?>
        <div class="item <?php if($i == 1) echo'active'?>">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large'); ?></a>
            <div class="carousel-caption visible-lg">
                <h3><?php the_title(); ?></h3>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">
                    <?php //the_title(); 

echo rwmb_meta( 'Subtitulo');

                    ?></a>
                <p><?php 

/*echo rwmb_meta( 'Subtitulo');*/

                the_excerpt(); ?></p>

            </div>
        </div>
        <?php $i++; endwhile; wp_reset_postdata();?>
        

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

<!--                  FIM DO SLIDER                         -->