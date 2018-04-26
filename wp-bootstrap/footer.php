
        <!--                  INICIO DO FOOTER                         -->

        <div class="container footer">
            <div class="row">
                <div class="col-md-4 sobre-rodape">
                    <div class="title-box">
                        <h4>lorem ipsum</h4>
                    </div>
                    
                    <?php                    
                    if (is_active_sidebar('rodape')) {
                        dynamic_sidebar('rodape');}
                    ?>
                
                </div>

                <div class="col-md-4 instagram">
                    <div class="title-box">
                        <h4>lorem ipsum</h4>
                    </div>
                     <?php
                    
                    if (is_active_sidebar('instagram_slider')) {
                        dynamic_sidebar('instagram_slider');
                    }
                    ?>

                </div>

                <div class="col-md-4">
                    <div class="title-box">
                        <h4>lorem ipsum</h4>
                    </div>
                    <?php
                    wp_nav_menu(array(
                    'theme_location' => 'links-utes',
                    'container' => '',
                    'menu_class' => 'list-unstyled'

                    ));
                    ?>
                </div>
            </div>
        </div>

        <div class="footer-copy">
            <div class="container">
                <div class="row">

                    <div class="col-md-12"><p class="text-center">@ copyright | Desenvolvido por Paulo Roberto</p> </div>
                </div>
            </div>
        </div>

        <!--                  FIM DO FOOTER                         -->


        <?php wp_footer() ?>

    </body>
</html>