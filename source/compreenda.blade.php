@extends('_layouts.master', ['subheader' => [
    ['#', 'Compreenda', $page->baseUrl."/assets/images/icons/ico-compreenda.png", 'is-active'],
    ['#', 'Personalize', $page->baseUrl."/assets/images/icons/ico-personalize.png" ],
    ['#', 'Engaje', $page->baseUrl."/assets/images/icons/ico-engaje.png" ],
]])

@section('content')

    <main class="page-content page-compreenda" id="compreenda">
        <section class="section-main container-fluid justify-content-center justify-content-md-end d-flex flex-column">
            <div class="section-main--text fade right mb-5 pb-5 pb-md-0">
                <div class="row">
                    <div class="col-sm-auto col-2 pr-0 pr-sm-5">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-brain-big.png" class="mt-4"/>
                    </div>
                    <div class="col-sm-auto col-10 pt-4 pt-sm-0 section-main--text--row--container no-gutters">
                        <h1 class="internal-title col-auto m-0">
                            <strong>Compreenda<span>.</span></strong>
                        </h1>
                        <h2 class="internal-subtitle col-auto m-0 pl-1">
                            Gestão de base de forma simples e completa.
                        </h2>
                    </div>
                </div>
                <ul class="internal-breadcrumb mt-4 mt-sm-0 list-unstyled">
                    <li><a href="/">Home</a> <span class="ico ico-arrow-right mx-3"></span></li>
                    <li>Compreenda</li>
                </ul>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 col-md-10 col-12">
                    <ul class="row no-gutters list-unstyled mt-3 mb-0 d-flex">
                        <li class="col-4 d-flex justify-content-center pb-3">
                            <div class="section-main--highlight--container is-active fade left" style="margin-left: -1.5rem">
                                <div class="section-main--highlight--image pt-4">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/bg-seta-circle-big.png" />
                                </div>
                                <h3 class="section-main--highlight--text mt-2">
                                    <strong>Compreenda</strong>
                                </h3>
                            </div>
                        </li>
                        <li class="col-4 d-flex justify-content-center pb-3" style="border-left: .15rem solid #fa4616;border-right: .15rem solid #fa4616;">
                            <div class="section-main--highlight--container fade left">
                                <div class="section-main--highlight--image">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-personalidade.png" />
                                </div>
                                <h3 class="section-main--highlight--text mt-2">
                                    <strong>Personalize</strong>
                                </h3>
                            </div>
                        </li>
                        <li class="col-4 d-flex justify-content-center pb-3">
                            <div class="section-main--highlight--container fade left">
                                <div class="section-main--highlight--image pt-2">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-circuito.png" />
                                </div>
                                <h3 class="section-main--highlight--text mt-2">
                                    <strong>Engaje</strong>
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section-ideais container-fluid" style="background: white">
            <div class="row mx-0 space-y">
                <div class="col-3 col-md-12 pl-4">
                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-power-segmentador.png"/>
                </div>
                <div class="col-12 col-xl-5 pl-4 pr-xl-0">
                    <h3 class="section-ideais--title mt-3">Power <strong>Segmentador</strong></h3>
                    <div class="section-ideais--text">
                        <p>
                            Com o Power Segmentador da All iN você pode descobrir em poucos cliques o comportamento
                            do seu consumidor e disparar campanhas altamente assertivas e personalizadas.<br>
                            São inúmeras possibilidades de segmentação como:
                        </p>
                        <ul class="pl-5">
                            <li>Descubra quais clientes mais engajados nas suas comunicações;</li>
                            <li>Saiba quem mais compra na sua loja, seja por número de compras ou ticket médio;</li>
                            <li>Múltiplas segmentações: por departamento, categoria ou produto;</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-12 justify-content-xl-end justify-content-center mt-5">
                    <div class="section-ideais--mozaico mt-2">
                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/power-segmentador-image.jpg" style="width: 100%" class="fade right scroll-default">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-optimizacao-publico container-fluid">
            <div class="row py-5">
                <div class="col-3 col-md-6 offset-lg-6 offset-md-3 pl-4 mt-5">
                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-filter.png" class="fade left scroll-default" />
                </div>
                <div class="col-12 col-md-9 col-lg-6 offset-lg-6 offset-md-3">
                    <h3 class="section-optimizacao-publico--title mt-3 fade left scroll-default">Otimização <strong>de Públicos</strong></h3>
                    <div class="section-optimizacao-publico--text fade left scroll-default">
                        <p>
                            A All iN ajuda você a otimizar os públicos do seu negócio. Afinal, sabemos que ter várias
                            listas pode complicar a organização dos seus clientes. Fazendo a otimização de públicos,
                            você consegue filtrar todos os usuários que correspondem a um mesmo perfil: homens,
                            mulheres, residentes de São Paulo, data de última compra e muito mais!
                        </p>
                        <span class="section-optimizacao-publico--recorte-superior d-none d-xl-block"></span>
                        <div class="row">
                            <div class="col-12 pl-4">
                                <ul class="pl-5 mt-4 white-icon row no-gutters fade left scroll-default">
                                    <li class="col-12 col-sm-5">Otimize por <strong class="d-sm-block">Gênero, Idade e Data&nbsp;de&nbsp;Nascimento;</strong></li>
                                    <li class="col-12 col-sm-6 offset-sm-1">Otimize por <strong class="d-sm-block">Data&nbsp;de&nbsp;Cadastro, Data&nbsp;da&nbsp;última&nbsp;compra;</strong></li>
                                    <li class="col-12 col-sm-5">Otimize por <strong class="d-sm-block">Cidades, Estados ou&nbsp;Países;</strong></li>
                                    <li class="col-12 col-sm-6 offset-sm-1">Otimize por <strong class="d-sm-block">Comportamento e Páginas&nbsp;Visitadas;</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-jornada-cliente space-y separator orange container-fluid">
            <h3 class="section-jornada-cliente--header--title generic-title">Jornada <strong>do Cliente</strong></h3>
            <p class="section-jornada-cliente--header--text generic-subtitle">
                Sua marca precisa estar em todos os pontos de contato do cliente, impactando-o durante toda a jornada de compra. <br><br class="d-block d-md-none">
                <strong>Por isso, a All iN oferece uma gama de soluções que te ajudam a automatizar</strong> campanhas inteligentes e direcionadas.
            </p>
            <span class="section-jornada-cliente--recorte-inferior d-none d-xl-block my-5 my-xl-0"></span>

            <div class="row mx-0 space-y">
                <div class="col-12 col-xl-5">
                    <div class="row">
                        <div class="col-3 col-sm-12">
                            <img src="{{ $page->baseUrl }}/assets/images/icons/ico-tasks.png" />
                        </div>
                    </div>
                    <h3 class="section-jornada-cliente--title mt-3">Workflow <strong>Transacional</strong></h3>
                    <div class="section-jornada-cliente--text">
                        <p>
                            Perfeito para comunicações de boas-vindas para guiar o cliente até o momento da conversão.
                            Você também pode usar nosso recurso para envios transacionais de compra, aproveitando
                            a alta taxa de abertura desse tipo de e-mail para fazer cross-sell de produtos ou serviços.
                        </p>
                        <p class="d-xl-block d-none">
                            <a href="#" class="btn"> <i class="ico ico-go"></i>
                                Saiba mais
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-12 px-0 px-md-4 text-right justify-content-xl-start justify-content-center">
                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/workflow-1a-site.gif" />
                </div>
                <div class="col-12 d-xl-none">
                    <a href="#" class="btn"> <i class="ico ico-go"></i>
                        Saiba mais
                    </a>
                </div>
            </div>
        </section>
        <div class="section-remarketing--statistics">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 py-4 py-lg-0 offset-lg-1 col-lg-3 justify-content-center text-center text-xl-left">
                        <div class="pl-lg-4">
                            <strong><span>+</span><i class="number-shake" data-number="8">0</i>x mais</strong>
                            cliques
                        </div>
                    </div>
                    <div class="col-12 py-4 py-lg-0 col-lg-4  justify-content-center text-center text-xl-left">
                        <div class=" pl-lg-4">
                            <strong><span>+</span><i class="number-shake" data-number="34">0</i>% de</strong>
                            aumento&nbsp;em&nbsp;receita
                        </div>
                    </div>
                    <div class="col-12 py-4 py-lg-0 col-lg-4 justify-content-center text-center text-xl-left">
                        <div class="pl-lg-4">
                            <strong><span>+</span><i class="number-shake" data-number="45">0</i>%% mais</strong>
                            abertura
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-remarketing space-y container-fluid">
            <div class="row space-y">
                <div class="col-md-12 col-3">
                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-research.png" />
                </div>
                <div class="col-12 col-xl-5">
                    <h3 class="section-remarketing--title mt-3">Remar<strong>keting</strong></h3>
                    <div class="section-remarketing--text">
                        <p>
                            Regras automáticas que são disparadas a partir do comportamento do seu cliente no seu
                            e-commerce, como:
                        </p>
                        <ul class="pl-5">
                            <li>Abandono de Carrinho;</li>
                            <li>Compra de Determinado Produto;</li>
                            <li>Navegação em uma Categoria;</li>
                            <li>Inclusão de produto na Wish List;</li>
                            <li>Ticket médio, dentre outros;</li>
                        </ul>
                        <p class="pt-4">
                            <a href="#" class="btn"> <i class="ico ico-go"></i>
                                Saiba mais
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-xl-7 pt-4">
                    <div class="row">
                        <div class="offset-xl-1 col-xl-11 col-12 px-0 px-sm-5">
                            <ul class="list-unstyled slider">

                                <li class="slider--item">
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/geladeira-vazia.jpg" />
                                    <p>Abandono de carrinho</p>
                                </li>

                                <li class="slider--item">
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/geladeira-vazia.jpg" />
                                    <p>Abandono de carrinho</p>
                                </li>

                                <li class="slider--item">
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/geladeira-vazia.jpg" />
                                    <p>Abandono de carrinho</p>
                                </li>

                                <li class="slider--item">
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/geladeira-vazia.jpg" />
                                    <p>Abandono de carrinho</p>
                                </li>
                                <li>
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/geladeira-vazia.jpg" />
                                    <p>Abandono de carrinho</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-integrations container-fluid">
            <div class="row">
                <div class="col-3 col-md-12 pt-5">
                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-integration.png" />
                </div>
                <div class="col-xl-5 col-12 pb-5 mb-5 mb-xl-0">
                    <h3 class="section-integrations--title mt-3">Nossas <strong>Integrações</strong></h3>
                    <div class="section-integrations--text">
                        <p>
                            A All iN possui integração com os principais players do mercado através da Zapier, uma das
                            maiores integradoras do mundo. Também facilitamos a integração de base via
                            <strong>Vtex, Tray, Google Drive, FTP ou API. </strong>
                        </p>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 col-12 pb-5" style="position: relative">
                    <span class="section-integrations--recorte-superior d-none d-xl-block"></span>
                    <div class="row">
                        <div class="col-xl-11 col-12">
                            <ul class="list-unstyled row">
                                <li class="col-sm-4 col-6">
                                    <div class="section-integrations--logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/vtex.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="section-integrations--logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/tray.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="section-integrations--logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/drive.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="section-integrations--logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/ftp.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="section-integrations--logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/api.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="section-integrations--logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/zapier.png" />
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-data-analytics container-fluid">
            <div class="row space-y">

                <div class="offset-xl-6 col-xl-6 col-12">
                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-integration.png" />
                </div>
                <div class="col-12">
                    <div class="row flex-xl-row-reverse">
                        <div class="col-xl-6 col-12">
                            <div class="row">
                                <div class="col-xl-11 col-12">
                                    <h3 class="section-integrations--title mt-3">Data <strong>Analytics</strong></h3>
                                    <div class="section-integrations--text">
                                        <p class="pr-xl-5">
                                            Com mais de 30 relatórios, temos um <strong>poderoso sistema de Data Analytics</strong>
                                            que ajuda você a tomar decisões mais assertivas sobre sua estratégia de marketing.
                                        </p>
                                        <ul class="px-5">
                                            <li class="">
                                                Descubra quais regiões do seu e-mail são mais clicadas;
                                            </li>

                                            <li>
                                                Saiba os assuntos que geraram maior taxa de abertura;
                                            </li>

                                            <li>
                                                Veja quais campanhas geraram maiores taxas de clique nos últimos meses;
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12" style="position: relative; left: -4rem;">
                            <img src="{{ $page->baseUrl }}/assets/images/compreenda/celulares.png" class="fade left scroll-default" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-contact container-fluid space-y" id="contato">
            <h3 class="section-contact--title">
                <strong>Entre em</strong> contato
            </h3>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row mx-0 mb-4 pl-4">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-contact.png" />
                    </div>
                    <h4 class="section-contact--form--title pl-4">
                        Possui alguma dúvida
                        <strong>
                            ou deseja entrar em
                            contato conosco?
                        </strong>
                    </h4>
                    <p class="section-contact--form--subtitle mb-4 pl-4">
                        Venha conhecer mais do nosso Marketing Orange :)
                    </p>
                    <p class="section-contact--form--info fade left pl-4">
                        <i class="ico ico-letter"></i>
                        <strong>
                            contato@allin.com.br
                        </strong>
                    </p>
                    <p class="section-contact--form--info fade left pl-4">
                        <i class="ico ico-phone"></i>
                        <strong>
                            +55 (11)3544-0499
                        </strong>
                    </p>
                </div>
                <form action="/contato.php" id="form-assunto" class="col-lg-6 fade right wpcf7-form" method="post">
                    <div class="row">
                        <div class="form-group col-sm-6 col-12">
                            <select class="form-control" title="Assunto" name="assunto" required>
                                <option selected="">Qual o assunto?</option>
                                <option value="Financeiro">Financeiro</option>
                                <option value="Spam">Spam</option>
                                <option value="Jurídico">Jurídico</option>
                                <option value="Comercial" selected>Comercial</option>
                                <option value="Parcerias">Parcerias</option>
                                <option value="Suporte">Suporte</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-6 col-12">
                            <input class="form-control" type="text" placeholder="NOME" title="Nome" name="nome" required>
                        </div>

                        <div class="form-group col-sm-6 col-12">
                            <input class="form-control" type="email" placeholder="E-MAIL" title="E-mail" name="email" required>
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <input class="form-control" type="tel" placeholder="TELEFONE" title="Telefone" name="tel">
                        </div>

                        <div class="form-group col-12">
                            <textarea class="form-control" placeholder="MENSAGEM" rows="6" name="mensagem" required></textarea>
                        </div>

                        <div class="col-lg-12">
                            <button id="btn-enviar-contato" class="btn"><i class="ico ico-go"></i>Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection