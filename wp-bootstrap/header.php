<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
        <title><?php
            bloginfo('names');
            wp_title();
            ?></title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>


        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php wp_head() ?>
    </head>
    <!--                  FIM DO HEAD                         -->


    <body>

        <!--                  INICIO DO HEADER                         -->


        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 logo" ><a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_theme_mod('bwp_logo'); ?>" class="img-responsive center-block" alt="nomedosite" title="nomedosite"></a></div>
                    <div class="col-md-6">


                        <!--                  INICIO DO NAVBAR                         -->

                        <!--<div class="col-md-9" style="background: #ccc">-->
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand visible-xs" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">Navegação do site</a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->



                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'depth' => 2,
                                    'container' => 'div',
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id' => 'bs-example-navbar-collapse-1',
                                    'menu_class' => 'nav navbar-nav',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker' => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>
                                <!--/.navbar-collapse -->
                            </div><!--/.container-fluid -->
                        </nav>
                        <!--</div> -->
                        <!--FIN DO NAVBAR -->
                    </div>
                    <div class = "col-md-4 navbar navbar-default">

                        <form class = "navbar-form navbar-left">
                            <div class = "form-group">
                                <input type = "text" class = "form-control" placeholder = "Search">
                            </div>
                            <button type = "submit" class = "btn btn-default">Submit</button>
                        </form>
                        <ul class = "nav navbar-nav navbar-right">
                            <li><a href = "#" data-toggle = "modal" data-target = ".bs-example-modal-sm"><span class = "glyphicon glyphicon glyphicon-user"></span></a></li>

                            <!--Small modal -->

                            <div class = "modal fade bs-example-modal-sm" tabindex = "-1" role = "dialog" aria-labelledby = "mySmallModalLabel">
                                <div class = "modal-dialog modal-sm" role = "document">
                                    <div class = "modal-content">
                                        <div class = "modal-header">
                                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;
                                                </span></button>
                                            <h4 class = "modal-title" id = "gridSystemModalLabel">Minha conta</h4>

                                            <div class = "modal-body">

                                                <!--Nav tabs -->
                                                <ul class = "nav nav-tabs" role = "tablist">
                                                    <li role = "presentation" class = "active"><a href = "#logar" aria-controls = "logar" role = "tab" data-toggle = "tab">Logar</a></li>
                                                    <li role = "presentation"><a href = "#cadastro" aria-controls = "cadastro" role = "tab" data-toggle = "tab">Cadastrar</a></li>

                                                </ul>

                                                <!--Tab panes -->
                                                <div class = "tab-content log-co">
                                                    <div role = "tabpanel" class = "tab-pane active" id = "logar">
                                                        <?php
                                                        if (is_active_sidebar('login_widgets')) {
                                                            dynamic_sidebar('login_widgets');
                                                        }
                                                        ?>
                                                    </div>
                                                    <div role = "tabpanel" class = "tab-pane" id = "cadastro">

                                                         <?php
                                                        if (is_active_sidebar('login_widgets')) {
                                                            dynamic_sidebar('login_widgets');
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>

                    </div>

                </div>
            </div>
        </header>
        <!--FIM DO HEADER -->