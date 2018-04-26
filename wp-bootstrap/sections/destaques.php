   
<div class="width-full-box">

   <div class="container">
        <div class="row">
            <div class="title-box">
                <div class="col-md-9">
                    <h4>lorem ipsum</h4>
                </div>
                <div class="col-md-3 visible-lg luta"><h4>lorem ipsum</h4></div>
            </div>
        </div>

        <div class="row">
            <?php
            $posts_slides = new WP_Query(array(
                'category_name' => 'destaque',
                'posts_per_page' => 3
            ));

            while ($posts_slides->have_posts()):$posts_slides->the_post();
                ?>  
                <div class="col-md-3 item-box-3">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('Sizeimg-small', array('class' => 'img-responsive img-thumbnail')); ?></a>
                     <span><?php 

					echo rwmb_meta( 'Subtitulo');

                    ?></span>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>

            <!-- ********************************************************************** -->
            <?php
            $posts_slides = new WP_Query(array(
                'category_name' => 'destaque',
                'posts_per_page' => 1
            ));

            while ($posts_slides->have_posts()):$posts_slides->the_post();
                ?>  
                <div class="col-md-3 item-box-3 item-box-our pull-right">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('Sizeimg-small', array('class' => 'img-responsive img-thumbnail')); ?></a>
                    <span><?php 

					echo rwmb_meta( 'Subtitulo');

                    ?></span>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div>

    </div>

</div>
