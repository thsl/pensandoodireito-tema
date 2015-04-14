<?php get_header(); ?>
<div id="featured-border-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h4 class="font-roboto">A <strong>Secretaria de Assuntos Legislativos</strong> do Ministério da Justiça quer sua ajuda para democratizar a elaboração de leis no País.</h4>
      </div>
    </div>
  </div>
</div>
<!-- /destaque-border-gray -->
<div id="hello">
  <div class="container text-center">
    <div class="row pt-sm pb-sm">
      <div class="col-md-5">
        <h1 class="h4 font-amatic red"><strong>Proponha também um debate!</strong></h1>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/propor-debate/debates-megafones.png" class="img-adptive" alt="Proteção de Dados Pessoais">
      </div>
      <div class="col-md-7">
        <div class="mt-lg">
          <h3 class="">Você tem algum assunto que possa ser discutido pela sociedade?</h3>
          <div class="row mt-lg">
            <div class="col-sm-5">
              <a href="#" class="btn btn-danger btn-lg font-roboto width-full">QUERO PROPOR</a>
              <p class="mt-sm"><strong>Faça sua ideia de debate ser votada também!</strong></p>
            </div>
            <div class="col-sm-2">
              <p class=" h1 font-roboto"><strong>ou</strong></p>
            </div>
            <div class="col-sm-5">
              <a href="#" class="btn btn-primary btn-lg font-roboto width-full">QUERO VOTAR</a>
              <p class="mt-sm"><strong>Conheça e vote nas propostas já existentes</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-lg mb-lg pb-lg">
  <div class="row">
    <div class="col-lg-10 col-md-offset-1">
      
      <p class="text-center font-roboto"><strong>Conheça mais um pouco sobre os tópicos de debate: </strong></p>
      
      <!--
      <div id="accordion">
        <div class="panel">
          <input type="button" class="btn" data-toggle="collapse" data-target="#direitoconsumidor" value="Direito do Consumidor">
          <input type="button" class="btn" data-toggle="collapse" data-target="#direitotransito" value="Direito de Trânsito">
          <input type="button" class="btn" data-toggle="collapse" data-target="#politicapenitenciaria" value="Política Penitenciária">
          <input type="button" class="btn" data-toggle="collapse" data-target="#segurancapublica" value="Segurança Pública">
          <input type="button" class="btn" data-toggle="collapse" data-target="#sociedadedainfo" value="Sociedade da Informação">
          
          <div id="direitoconsumidor" class="collapse out text-left col-md-12" data-parent="#accordion" class="collapse">
            <h5><strong>Direito do Consumidor</strong></h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
          <div id="direitotransito" class="collapse out text-left col-md-12" data-parent="#accordion" class="collapse">
            <h5><strong>Direito de Trânsito</strong></h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
          <div id="politicapenitenciaria" class="collapse out text-left col-md-12" data-parent="#accordion" class="collapse">
            <h5><strong>Política Penitenciária</strong></h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
          <div id="segurancapublica" class="collapse out text-left col-md-12" data-parent="#accordion" class="collapse">
            <h5><strong>Segurança Pública</strong></h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
          <div id="sociedadedainfo" class="collapse out text-left col-md-12" data-parent="#accordion" class="collapse">
            <h5><strong>Sociedade da Informação</strong></h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
      </div>
      -->
      <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="topicos-debate" class="active"><a href="#direitoconsumidor" aria-controls="direitoconsumidor" role="tab" data-toggle="tab">Direito do Consumidor</a></li>
          <li role="topicos-debate"><a href="#direitotransito" aria-controls="direitotransito" role="tab" data-toggle="tab">Direito de Trânsito</a></li>
          <li role="topicos-debate"><a href="#politicapenitenciaria" aria-controls="politicapenitenciaria" role="tab" data-toggle="tab">Política Penitenciária</a></li>
          <li role="topicos-debate"><a href="#segurancapublica" aria-controls="segurancapublica" role="tab" data-toggle="tab">Segurança Pública</a></li>
          <li role="topicos-debate"><a href="#sociedadedainfo" aria-controls="sociedadedainfo" role="tab" data-toggle="tab">Sociedade da Informação</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content mt-md">
          <div role="tabpanel" class="tab-pane fade in active" id="direitoconsumidor">
            <div class="row">
              <div class="col-sm-2 col-md-offset-1 text-center">
                <i class="fa fa-shopping-cart fa-5x red mt-sm"></i>
              </div>
              <div class="col-sm-6">
                <h5 class="font-roboto"><strong>Direito do Consumidor</strong></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="direitotransito">
            <div class="row">
              <div class="col-sm-2 col-md-offset-1 text-center">
                <i class="fa fa-road fa-5x red mt-sm"></i>
              </div>
              <div class="col-sm-6">
                <h5 class="font-roboto"><strong>Direito de Trânsito</strong></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="politicapenitenciaria">
            <div class="row">
              <div class="col-sm-2 col-md-offset-1 text-center">
                <i class="fa fa-gavel fa-5x red mt-sm"></i>
              </div>
              <div class="col-sm-6">
                <h5 class="font-roboto"><strong>Política Penitenciária</strong></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="segurancapublica">
            <div class="row">
              <div class="col-sm-2 col-md-offset-1 text-center">
                <i class="fa fa-lock fa-5x red mt-sm"></i>
              </div>
              <div class="col-sm-6">
                <h5 class="font-roboto"><strong>Segurança Pública</strong></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="sociedadedainfo">
            <div class="row">
              <div class="col-sm-2 col-md-offset-1 text-center">
                <i class="fa fa-mobile fa-5x red mt-sm"></i>
              </div>
              <div class="col-sm-6">
                <h5 class="font-roboto"><strong>Sociedade da Informação</strong></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="bg-red">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-offset-1 text-left">
        <h3 class="font-roboto">Como funciona?</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="col-lg-3 text-center">
        <i class="fa fa-question-circle"></i>
      </div>
    </div>
  </div>
</div>
<div id="featured-border-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="font-roboto">Participar do processo legislativo nunca foi tão fácil!</h3>
      </div>
    </div>
    <div class="col-sm-7 col-md-offset-1">
      <ul class="list-unstyled">
        <li>1. Proponha um debate</li>
        <li>2. Exponha sua proposta para a sociedade</li>
        <li>3. Acompanhe o processo de votação</li>
        <li>4. Tendo votos suficientes sua proposta vira oficialmente um debate!</li>
        <li>5. Continue acompanhando o debate criado por você na nossa Plataforma</li>
        <li>6. Participe sempre: criando, votando ou expondo seu ponto de vista</li>
      </ul>
    </div>
    <div class="col-sm-4 text-center">
      <i class="fa fa-thumbs-o-up"></i>
    </div>
  </div>
</div>
<div id="bgcolor2">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mb-xl">
        <h3 class="font-roboto">Siga estas regras para um debate legal</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="col-md-4">
        <div class="balao">
          <h4 class="font-roboto">Dúvidas?</h4>
          <p>Mande um email pra gente: email@email.com.br</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <h3 class="font-roboto">Dê a sua opinião sobre estas propostas:</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-ms-10 col-md-4 mt-lg">
      <div class="proposal">
        <figure class="img-responsive">
          <img src="http://lorempixel.com/output/business-q-c-400-300-9.jpg">
          <figcaption>
          <h5 class="font-roboto">Título da proposta</h5>
          <small>Nome do criador</small>
          <span class="proposal-details gradient-mesh">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever  dummy text ever.</span>
          <div class="proposal-footer">
            <small>Resultado parcial da votação:</small>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              </div>
            </div>
            <ul class="proposal-stats">
              <li>
                <div class="proposal-vote-yes">30%</div>
                <span class="proposal-stats-label">concordam</span>
              </li>
              <li>
                <div class="proposal-vote-no">70%</div>
                <span class="proposal-stats-label">discordam</span></li>
                <li class="proposal-date">
                  <div class="proposal-stats-date">
                    <div class="days">29 dias</div>
                  </div>
                  <div class="proposal-stats-label">para encerrar</div>
                </li>
              </ul>
            </div>
            <button class="btn btn-danger btn-sm btn-block" type="submit" >Ver proposta</button>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    
    <div class="row text-center">
      <button type="button" class="btn btn-danger">Mostrar mais propostas</button>
    </div>
    
    
  </div>
  <?php get_footer(); ?>