<?php get_header(); ?>
<div id="publicacoes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="font-roboto red">Publicações</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="header-categories">
                    <ul class="list-inline list-categories">
                        <li class="categories-master">
                            <a href="#" class="categorie-link">Todas</a>
                        </li>
                        <li class="categories-master">
                            <a href="#" class="categorie-link">100-1</a> <span class="text-muted fontsize-sm">(Descrescente)</span>
                        </li>
                        <li class="dropdown categories-master">
                            <a href="#" class="categorie-link" id="menu-autores" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Autores <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="menu-autores">
                                <li class="categories-master">
                                    <a href="#" class="categorie-link">Fulano Silva</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown categories-master">
                            <a href="#" class="categorie-link active-box" id="menu-temas" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Temas <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="menu-temas">
                                <li class="categories-master">
                                    <a href="#" class="categorie-link">Marco Civil da Internet</a>
                                </li>
                            </ul>
                        </li>
                        <li class="categories-master">
                            <a href="#" class="categorie-link">Índice</a>
                        </li>
                        <li class="dropdown categories-master">
                            <a href="#" class="categorie-link" id="menu-mais" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Mais <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="menu-mais">
                                <li class="categories-master">
                                    <a href="#" class="categorie-link">Por data</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row text-right fontsize-sm">
            <div class="col-sm-6 col-sm-offset-2 mt-sm">
                <div class="btn-group" role="group" aria-label="publicacoes">
                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            Publicações de 40 a 49
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Publicações de 30 a 39</a></li>
                            <li><a href="#">Publicações de 20 a 29</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="col-md-4 mt-sm">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Texto ou número desejado">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                      </span>
                </div>
            </div>
        </div>
        <div class="publicacoes-box mt-md">
            <div class="col-md-8">
                <h3><span class="red font-roboto">Última publicação</span>
                    <small class="ml-lg fontsize-sm"><a href="#" class="blue">Todas as publicações</a></small>
                </h3>
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
                <!--<div class="well publicacoes-oquee">

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

                </div>-->
                <!-- imagem do autor -->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/publicacoes/autor.jpg" class="img-adptive img-thumbnail autor" alt="Autor">
            </div>
        </div>
        <div class="row mt-lg">
            <div class="col-lg-12">
                <h2 class="font-roboto red">Publicações anteriores</h2>
            </div>
        </div>
        <div class="row mt-lg">
            <div class="col-md-12">
                <ul class="list-unstyled publicacoes-list">
                    <li>
                        <div class="row">
                            <div class="col-sm-2 col-xs-12">
                                <div class="capa">
                                    <p class="fontsize-lg">Volume <br/>
                                        <span class="volume">52</span></p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="descricao">
                                    <h4 class="red"><strong><a href="#" title="Download desta publicação">Violência
                                                contra a Mulher e as Práticas
                                                Institucionais</a></strong></h4>

                                    <p><a data-toggle="collapse" href="#resumo" aria-expanded="false"
                                          aria-controls="resumo"> Resumo <i class="fa fa-caret-down"></i></a>
                                    </p>

                                    <p class="collapse" id="resumo">A Lei Maria da Penha é considerada um marco
                                        legislativo na proteção à
                                        mulher vítima de violência doméstica e familiar, seja pela ampla
                                        definição de violência</p>

                                    <p>
                                        <small class="text-muted"> Publicado em: 24 de julho de 2015<br/>
                                            Coordenação: <a href="#">Ana Gabriela Mendes Braga</a> e <a
                                                href="#">Bruna Angotti</a></small>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <p><a href="#" class="btn btn-default"><i class="fa fa-download"></i> Download
                                        desta publicação </a></p>

                                <ul class="list-inline social-icons text-muted mt-0">
                                    <li class="social-icons-rounded">
                                        <a href="https://www.facebook.com/projetopd"
                                           target="_blank"
                                           class="btn btn-rounded text-muted"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Compartilhe no Facebook"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-icons-rounded">
                                        <a href="https://twitter.com/projetopd"
                                           target="_blank"
                                           class="btn btn-rounded text-muted"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Compartilhe no Twitter"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons-rounded">
                                        <a
                                            href="https://www.youtube.com/user/pensandoodireito"
                                            target="_blank" class="btn btn-rounded text-muted"
                                            data-toggle="tooltip"
                                            data-placement="top" title="Compartilhe no YouTube"><i
                                                class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-2 col-xs-12">
                                <div class="capa">
                                    <p class="fontsize-lg">Volume <br/>
                                        <span class="volume">52</span></p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="descricao">
                                    <h4 class="red"><strong><a href="#" title="Download desta publicação">Violência
                                                contra a Mulher e as Práticas
                                                Institucionais</a></strong></h4>

                                    <p><a data-toggle="collapse" href="#resumo" aria-expanded="false"
                                          aria-controls="resumo"> Resumo <i class="fa fa-caret-down"></i></a>
                                    </p>

                                    <p class="collapse" id="resumo">A Lei Maria da Penha é considerada um marco
                                        legislativo na proteção à
                                        mulher vítima de violência doméstica e familiar, seja pela ampla
                                        definição de violência</p>

                                    <p>
                                        <small class="text-muted"> Publicado em: 24 de julho de 2015<br/>
                                            Coordenação: <a href="#">Ana Gabriela Mendes Braga</a> e <a
                                                href="#">Bruna Angotti</a></small>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <p><a href="#" class="btn btn-default"><i class="fa fa-download"></i> Download
                                        desta publicação </a></p>

                                <ul class="list-inline social-icons text-muted mt-0">
                                    <li class="social-icons-rounded">
                                        <a href="https://www.facebook.com/projetopd"
                                           target="_blank"
                                           class="btn btn-rounded text-muted"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Compartilhe no Facebook"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-icons-rounded">
                                        <a href="https://twitter.com/projetopd"
                                           target="_blank"
                                           class="btn btn-rounded text-muted"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Compartilhe no Twitter"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons-rounded">
                                        <a
                                            href="https://www.youtube.com/user/pensandoodireito"
                                            target="_blank" class="btn btn-rounded text-muted"
                                            data-toggle="tooltip"
                                            data-placement="top" title="Compartilhe no YouTube"><i
                                                class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-2 col-xs-12">
                                <div class="capa">
                                    <p class="fontsize-lg">Volume <br/>
                                        <span class="volume">52</span></p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="descricao">
                                    <h4 class="red"><strong><a href="#" title="Download desta publicação">Violência
                                                contra a Mulher e as Práticas
                                                Institucionais</a></strong></h4>

                                    <p><a data-toggle="collapse" href="#resumo" aria-expanded="false"
                                          aria-controls="resumo"> Resumo <i class="fa fa-caret-down"></i></a>
                                    </p>

                                    <p class="collapse" id="resumo">A Lei Maria da Penha é considerada um marco
                                        legislativo na proteção à
                                        mulher vítima de violência doméstica e familiar, seja pela ampla
                                        definição de violência</p>

                                    <p>
                                        <small class="text-muted"> Publicado em: 24 de julho de 2015<br/>
                                            Coordenação: <a href="#">Ana Gabriela Mendes Braga</a> e <a
                                                href="#">Bruna Angotti</a></small>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <p><a href="#" class="btn btn-default"><i class="fa fa-download"></i> Download
                                        desta publicação </a></p>

                                <ul class="list-inline social-icons text-muted mt-0">
                                    <li class="social-icons-rounded">
                                        <a href="https://www.facebook.com/projetopd"
                                           target="_blank"
                                           class="btn btn-rounded text-muted"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Compartilhe no Facebook"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-icons-rounded">
                                        <a href="https://twitter.com/projetopd"
                                           target="_blank"
                                           class="btn btn-rounded text-muted"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Compartilhe no Twitter"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons-rounded">
                                        <a
                                            href="https://www.youtube.com/user/pensandoodireito"
                                            target="_blank" class="btn btn-rounded text-muted"
                                            data-toggle="tooltip"
                                            data-placement="top" title="Compartilhe no YouTube"><i
                                                class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-2 col-xs-12">
                                <div class="capa">
                                    <p class="fontsize-lg">Volume <br/>
                                        <span class="volume">52</span></p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="descricao">
                                    <h4 class="red"><strong><a href="#" title="Download desta publicação">Violência
                                                contra a Mulher e as Práticas
                                                Institucionais</a></strong></h4>

                                    <p><a data-toggle="collapse" href="#resumo" aria-expanded="false"
                                          aria-controls="resumo"> Resumo <i class="fa fa-caret-down"></i></a>
                                    </p>

                                    <p class="collapse" id="resumo">A Lei Maria da Penha é considerada um marco
                                        legislativo na proteção à
                                        mulher vítima de violência doméstica e familiar, seja pela ampla
                                        definição de violência</p>

                                    <p>
                                        <small class="text-muted"> Publicado em: 24 de julho de 2015<br/>
                                            Coordenação: <a href="#">Ana Gabriela Mendes Braga</a> e <a
                                                href="#">Bruna Angotti</a></small>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <p><a href="#" class="btn btn-default"><i class="fa fa-download"></i> Download
                                        desta publicação </a></p>

                                <ul class="list-inline social-icons text-muted mt-0">
                                    <li class="social-icons-rounded">
                                        <a href="https://www.facebook.com/projetopd"
                                           target="_blank"
                                           class="btn btn-rounded text-muted"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Compartilhe no Facebook"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-icons-rounded">
                                        <a href="https://twitter.com/projetopd"
                                           target="_blank"
                                           class="btn btn-rounded text-muted"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Compartilhe no Twitter"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons-rounded">
                                        <a
                                            href="https://www.youtube.com/user/pensandoodireito"
                                            target="_blank" class="btn btn-rounded text-muted"
                                            data-toggle="tooltip"
                                            data-placement="top" title="Compartilhe no YouTube"><i
                                                class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
