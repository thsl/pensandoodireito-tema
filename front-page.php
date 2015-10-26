<?php get_header(); ?>

    <div class="conteudo">
        <?php
        $destaque_query_array = array(
            'post_type' => 'destaque',
            'meta_query' => array(
                array(
                    'key' => 'destaque_ativo',
                    'value' => '1',
                    'compare' => '=',
                )
            )
        );
        $destaques = new WP_Query($destaque_query_array);
        ?>

        <div id="destaque-home" class="carousel slide" data-ride="carousel">
            <?php if ($destaques->found_posts > 1) { ?>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $counter = 0;
                    while ($counter < count($destaques->posts)) {
                        echo '<li data-target="#carousel-destaques-home" data-slide-to="' . $counter . '"';
                        if ($counter == 0) {
                            echo ' class="active"';
                        }
                        echo '">';
                        $counter++;
                    }
                    ?>
                </ol>
            <?php } ?>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $first_item = true;
                while ($destaques->have_posts()) {
                echo '<div class="item';
                if ($first_item) {
                    echo ' active';
                    $first_item = false;
                }
                echo '">';

                $destaques->the_post();
                $modelo_destaque = get_post_meta(get_the_ID(), 'modelo_destaque', true);
                $isVideo = ($modelo_destaque == 'video_texto' || $modelo_destaque == 'video_full');

                if ($isVideo) { ?>
                    <div class="fill">
                        <?php echo do_shortcode('<iframe src="http://www.youtube.com/embed/' . getYoutubeIdFromUrl(get_post_meta(get_the_ID(), 'midia_destaque', true)) . '" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>'); ?>
                    </div>
                    <?php
                } else { //is image :)

                    $background_img_url = get_post_meta(get_the_ID(), 'background_img_url', true);
                    $texto_destaque = get_post_meta(get_the_ID(), 'destaque_texto', true);
                    if ($background_img_url) { ?>
                        <div class="fill has-background" style="background-image:url(<?= $background_img_url ?>)">
                            <a href=" <?= get_post_meta(get_the_ID(), 'destaque_link', true) ?>">
                                <?php the_post_thumbnail('post-thumbnail', array(
                                    'class' => 'img-adptive',
                                    'alt' => 'destaque'
                                )); ?>
                            </a>
                        </div>
                        <?php
                    } else {
                        $bgImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'post-thumbnail');

                        if ($bgImage) {
                            list($src, $width, $height) = $bgImage; ?>

                            <div class="fill has-background" style="background-image:url(<?= $src ?>)">
                                <a href="<?= get_post_meta(get_the_ID(), 'destaque_link', true) ?>"><span></span></a>
                            </div>
                            <?php
                        }
                    }
                    if ($texto_destaque) { ?>
                        <div class="carousel-caption">
                            <p> <?= $texto_destaque ?> </p>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        <? } ?>
        </div>

        <?php if ($destaques->found_posts > 1) { ?>
            <!-- Controls -->
            <a class="left carousel-control" href="#destaque-home" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#destaque-home" data-slide="next">
                <span class="icon-next"></span>
            </a>
        <?php } ?>
    </div>


<?php get_template_part('front', 'noticias'); ?>
<?php get_template_part('destaque', 'debates'); ?>
    <section id="publicacoes">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-roboto red">Série Pensando o Direito: <a href="#">Publicações</a></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="publicacoes-box mt-md">
                        <div class="col-md-8">
                            <h3><span class="red font-roboto">Última publicação</span> <small class="ml-lg fontsize-sm"><a href="#" class="blue">Todas as publicações</a> </small></h3>

                            <div class="row mt-md">
                                <div class="col-sm-4">
                                    <div class="capa-principal">
                                        <p class="fontsize-lg"><strong>Série Pensando o Direito</strong></p>

                                        <p class="fontsize-lg">Volume <br/> <span class="volume">52</span></p>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="descricao">
                                        <h4><strong><a href="#" class="red">Violência contra a Mulher e as Práticas
                                                    Institucionais</a></strong></h4>

                                        <p>A Lei Maria da Penha é considerada um marco legislativo na proteção à
                                            mulher vítima de violência doméstica e familiar, seja pela ampla
                                            definição de violência</p>

                                        <p>
                                            <small class="text-muted">
                                                Publicado em: 24 de julho de 2015<br/>
                                                Coordenação: <a href="#">Ana Gabriela Mendes Braga</a> e <a
                                                    href="#">Bruna Angotti</a>
                                            </small>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-default"><i class="fa fa-download"></i>
                                                Download
                                                desta publicação
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-inline social-icons text-muted mt-0">
                                                <li class="social-icons-rounded">
                                                    <a href="https://www.facebook.com/projetopd" target="_blank"
                                                       class="btn btn-rounded text-muted" data-toggle="tooltip"
                                                       data-placement="top" title="Compartilhe no Facebook"><i
                                                            class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="social-icons-rounded">
                                                    <a href="https://twitter.com/projetopd" target="_blank"
                                                       class="btn btn-rounded text-muted" data-toggle="tooltip"
                                                       data-placement="top" title="Compartilhe no Twitter"><i
                                                            class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="social-icons-rounded">
                                                    <a href="https://www.youtube.com/user/pensandoodireito"
                                                       target="_blank" class="btn btn-rounded text-muted"
                                                       data-toggle="tooltip"
                                                       data-placement="top" title="Compartilhe no YouTube"><i
                                                            class="fa fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="well publicacoes-oquee">

                                <h4 class="font-roboto red">
                                    <strong>
                                        Série Pensando o Direito:<br/>
                                        O que são as Publicações?
                                    </strong>
                                </h4>

                                <p>
                                    Desde a criação do Projeto Pensando o Direito, as pesquisas desenvolvidas
                                    pelas
                                    equipes contratadas resultam em relatórios completos e em publicações
                                    resumidas
                                    que sintetizam os principais dados levantados a partir dos processos de
                                    investigação desenvolvidos.
                                </p>

                                <p>
                                    <strong><a href="#">Todas as publicações</a></strong>
                                </p>

                                <p>
                                    <strong><a href="#">Editais de participacao</a></strong>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>