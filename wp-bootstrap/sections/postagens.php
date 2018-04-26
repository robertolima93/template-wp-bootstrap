<div class="container">
    <div class="row">
        <div class="title-box">
            <div class="col-md-7">
                <h4>lorem ipsum</h4>
            </div>
            <div class="col-md-5 visible-lg">
                <h4>lorem ipsum</h4>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7" id="posts-games">

            <!-- ********************************************************************** -->
            <?php
            $posts_slides = new WP_Query(array(
                'category_name' => 'destaque',
                'posts_per_page' => 2
            ));

            while ($posts_slides->have_posts()):$posts_slides->the_post();
                ?>  

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
                <?php
            endwhile;
            wp_reset_postdata();
            ?>


        </div>
        <div class="col-md-5" id="video-home">
            <div class="title-box visible-xs"><h4>Video em destaque</h4></div>
            <?php
            $posts_slides = new WP_Query(array(
                'category_name' => 'video',
                'posts_per_page' => 1
            ));

            while ($posts_slides->have_posts()):$posts_slides->the_post();
                ?>  

                <div class="embed-responsive embed-responsive-16by9">
                    <?php
                    echo rwmb_meta('oembed');
                    ?>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div>

    </div>

</div>