@extends('_layouts.master', ['subheader' => [
    ['/compreenda', 'Compreenda', $page->baseUrl."/assets/images/icons/ico-compreenda.png", 'is-active'],
    ['/personalize', 'Personalize', $page->baseUrl."/assets/images/icons/ico-personalize.png" ],
    ['/engaje', 'Engaje', $page->baseUrl."/assets/images/icons/ico-engaje.png" ],
]])

@section('content')


    <main class="page-content page-compreenda" id="compreenda">
        <section class="banner-internal" style="background-image: url('{{$page->baseUrl}}/assets/images/compreenda/banner.jpg');">
            <div class="banner-internal--main has-animation">
                <div class="row">
                    <div class="col-sm-auto col-2 pr-sm-5">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-brain-big.png" class="mt-4"/>
                    </div>
                    <div class="col-sm-auto col-10 pt-4 pt-sm-0 no-gutters">
                        <h1 class="banner-internal--main--title col-auto">
                            <strong>Compreenda<span>.</span></strong>
                        </h1>
                        <h2 class="banner-internal--main--subtitle col-auto">
                            Gestão de base de forma simples e completa.
                        </h2>
                    </div>
                </div>
                <ul class="banner-internal--main--breadcrumb mt-4 list-unstyled">
                    <li><a href="/">Home</a> <span class="ico ico-arrow-right mx-3"></span></li>
                    <li>Compreenda</li>
                </ul>
            </div>
            <footer class="banner-internal--footer row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <ul class="banner-internal--footer--container row no-gutters list-unstyled mt-3 mb-0">
                        <li class="col-4 d-flex justify-content-center pb-3">
                            <a href="/compreenda" class="banner-internal--footer--highlight is-active has-animation" style="margin-left: -1.5rem" data-animation-init-time="800">
                                <div class="banner-internal--footer--highlight--image pt-4">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/bg-seta-circle-big.png" />
                                </div>
                                <h3 class="banner-internal--footer--highlight--text mt-2">
                                    <strong>Compreenda</strong>
                                </h3>
                            </a>
                        </li>
                        <li class="col-4 d-flex justify-content-center pb-3" style="border-left: .15rem solid #fa4616;border-right: .15rem solid #fa4616;">
                            <a href="/personalize" class="banner-internal--footer--highlight has-animation" data-animation-init-time="1300">
                                <div class="banner-internal--footer--highlight--image">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-personalidade.png" />
                                </div>
                                <h3 class="banner-internal--footer--highlight--text mt-2">
                                    <strong>Personalize</strong>
                                </h3>
                            </a>
                        </li>
                        <li class="col-4 d-flex justify-content-center pb-3">
                            <a href="/engaje" class="banner-internal--footer--highlight has-animation" data-animation-init-time="1800">
                                <div class="banner-internal--footer--highlight--image pt-2">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-circuito.png" />
                                </div>
                                <h3 class="banner-internal--footer--highlight--text mt-2">
                                    <strong>Engaje</strong>
                                </h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
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
                            Com o Power Segmentador da All iN você pode descobrir <strong>em poucos cliques o comportamento
                                do seu consumidor e disparar campanhas altamente assertivas e personalizadas.</strong><br>
                            São inúmeras possibilidades de segmentação como:
                        </p>
                        <ul class="pl-5">
                            <li>Descubra quais clientes <strong>são os mais engajados</strong> nas suas comunicações.</li>
                            <li>Saiba <strong>quem mais compra na sua loja</strong>, seja por número de compras ou ticket médio.</li>
                            <li>Múltiplas segmentações por: <strong>departamento, categoria ou produto.</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-12 justify-content-xl-end justify-content-center">
                    <div class="section-ideais--mozaico mt-2">
                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/power-segmentador-image-title.png" style="float: right;width: 60%" class="has-animation">
                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/power-segmentador-image.gif" style="width: 100%" class="has-animation">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-optimizacao-publico container-fluid">
            <div class="row py-5">
                <div class="col-3 col-md-6 offset-lg-6 offset-md-3 pl-4 mt-5">
                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-filter.png" class="has-animation" />
                </div>
                <div class="col-12 col-md-9 col-lg-6 offset-lg-6 offset-md-3">
                    <h3 class="section-optimizacao-publico--title mt-3 has-animation">Otimização <strong>de Públicos</strong></h3>
                    <div class="section-optimizacao-publico--text has-animation">
                        <p>
                            A All iN ajuda você a <strong>otimizar os públicos</strong> do seu negócio. Afinal, sabemos que ter várias
                            listas pode complicar a organização dos seus clientes. Fazendo a otimização de públicos,
                            você consegue filtrar todos os usuários que correspondem a um mesmo perfil: <strong>homens,
                            mulheres, residentes de São Paulo, data de última compra e muito mais!</strong>
                        </p>
                        <span class="section-optimizacao-publico--recorte-superior d-none d-xl-block"></span>
                        <div class="row">
                            <div class="col-12 pl-4">
                                <ul class="pl-5 mt-4 white-icon row no-gutters has-animation">
                                    <li class="col-12 col-sm-5">Otimize por <strong class="d-sm-block">Gênero, Idade e Data&nbsp;de&nbsp;Nascimento.</strong></li>
                                    <li class="col-12 col-sm-6 offset-sm-1">Otimize por <strong class="d-sm-block">Data&nbsp;de&nbsp;Cadastro, Data&nbsp;da&nbsp;última&nbsp;compra.</strong></li>
                                    <li class="col-12 col-sm-5">Otimize por <strong class="d-sm-block">Cidades, Estados ou&nbsp;Países.</strong></li>
                                    <li class="col-12 col-sm-6 offset-sm-1">Otimize por <strong class="d-sm-block">Comportamento e Páginas&nbsp;Visitadas.</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-jornada-cliente space-y separator orange container-fluid pb-0">
            <h3 class="section-jornada-cliente--header--title generic-title">Jornada <strong>do Cliente</strong></h3>
            <p class="section-jornada-cliente--header--text generic-subtitle">
                Sua marca precisa estar em todos os pontos de contato do cliente, impactando-o durante toda a jornada de compra. <br><br class="d-block d-md-none">
                <strong>Por isso, a All iN oferece uma gama de soluções que te ajudam a automatizar</strong> campanhas inteligentes e direcionadas.
            </p>

            <hr>

            <div class="row mx-0 space-y pb-0">
                <div class="col-12 col-xl-5">
                    <div class="row">
                        <div class="col-3 col-sm-12">
                            <img src="{{ $page->baseUrl }}/assets/images/icons/ico-tasks.png" />
                        </div>
                    </div>
                    <h3 class="section-jornada-cliente--title mt-3">Workflow <strong>Transacional</strong></h3>
                    <div class="section-jornada-cliente--text">
                        <p>
                            Perfeito para comunicações <strong>de boas-vindas</strong> para guiar o cliente até o momento da conversão.
                            Você também pode usar nosso recurso para <strong>envios transacionais de compra,</strong> aproveitando
                            a alta taxa de abertura desse tipo de e-mail para fazer cross-sell de produtos ou serviços.
                        </p>
                        {{--<p class="d-xl-block d-none">--}}
                            {{--<a href="#" class="btn"> <i class="ico ico-go"></i>--}}
                                {{--Saiba mais--}}
                            {{--</a>--}}
                        {{--</p>--}}
                    </div>
                </div>
                <div class="col-xl-7 col-12 px-0 px-md-4 text-right justify-content-xl-start px-5 justify-content-center">
                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/workflow.gif" />
                </div>
                <div class="col-12 d-none">
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
                            <strong><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="8">0</i>x mais</strong>
                            cliques
                        </div>
                    </div>
                    <div class="col-12 py-4 py-lg-0 col-lg-4  justify-content-center text-center text-xl-left">
                        <div class=" pl-lg-4">
                            <strong><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="34">0</i>% aumento de</strong>
                            em&nbsp;receita
                        </div>
                    </div>
                    <div class="col-12 py-4 py-lg-0 col-lg-4 justify-content-center text-center text-xl-left">
                        <div class="pl-lg-4">
                            <strong><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="45">0</i>% mais</strong>
                            abertura
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-remarketing container-fluid">
            <div class="row space-y">
                <div class="col-md-12 col-3">
                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-research.png" />
                </div>
                <div class="col-12 col-xl-5">
                    <h3 class="section-remarketing--title mt-3">Remar<strong>keting</strong></h3>
                    <div class="section-remarketing--text">
                        <p>
                            <strong>Regras automáticas</strong> que são disparadas a partir do comportamento do seu cliente no seu
                            e-commerce, como:
                        </p>
                        <ul class="pl-5">
                            <li>Abandono de Carrinho.</li>
                            <li>Compra de determinado produto.</li>
                            <li>Navegação em uma categoria.</li>
                            <li>Inclusão de produto na Wish List.</li>
                            <li>Ticket médio, dentre outros.</li>
                        </ul>
                        {{--<p class="pt-4">--}}
                            {{--<a href="#" class="btn"> <i class="ico ico-go"></i>--}}
                                {{--Saiba mais--}}
                            {{--</a>--}}
                        {{--</p>--}}
                    </div>
                </div>
                <div class="col-12 col-xl-7 pt-4">
                    <div class="row">

                        <div class="offset-xl-1 col-xl-11 col-12 px-0 px-sm-5">
                            <ul class="list-unstyled slider slider-gatilhos-comportamentais">
                                <li class="slider--item">
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/geladeira-vazia.jpg" />
                                    <p>Abandono de Carrinho</p>
                                </li>

                                <li class="slider--item">
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/abandono-de-navegacao.jpg" />
                                    <p>Abandono de Navegação</p>
                                </li>

                                <li class="slider--item">
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/recomendacoes.jpg" />
                                    <p>Recomendações</p>
                                </li>

                                <li class="slider--item">
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/reconquista.jpg" />
                                    <p>Reconquista</p>
                                </li>
                                <li class="slider--item">
                                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/reducao-de-preco.jpg" />
                                    <p>Redução de Preço</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr class="right">
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
                                    <div class="logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/vtex.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/tray.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/drive.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/ftp.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="logo-container">
                                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/integrations/api.png" />
                                    </div>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <div class="logo-container">
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
                                                Descubra quais regiões do seu e-mail são mais clicadas.
                                            </li>

                                            <li>
                                                Saiba os assuntos que geraram maior taxa de abertura.
                                            </li>

                                            <li>
                                                Veja quais campanhas geraram maiores taxas de clique nos últimos meses.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12" style="position: relative; left: -4rem;">
                            <img src="{{ $page->baseUrl }}/assets/images/compreenda/celulares.png" class="has-animation" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-banner article-simple py-5">
            <div class="col-12 mb-3">
                <img src="{{ $page->baseUrl }}/assets/images/compreenda/logo-marisa.png" class="mt-4" />
                <img src="{{ $page->baseUrl }}/assets/images/compreenda/logo-case.png"  class="mx-4" />
            </div>
            <div class="col-md-8 col-12">
                <h3 class="article-simple--title">
                    Marisa: Como a otimização de públicos rendeu
                    <strong class="orange d-block">+38% de cliques</strong>
                </h3>
                <p>
                    Com a ajuda dos especialistas da área de Estratégia e Operações, a Marisa, conseguiu <strong>aumento
                    de 38% no volume de cliques,</strong> aumentando a participação do canal e-mail no e-commerce.
                </p>
            </div>
            <div class="col-md-8 col-12">
                <div class="row justify-content-between">
                    <div class="col-sm-4 col-12">
                        <a href="/news/veja-como-marisa-cresceu-38-no-volume-de-cliques/" class="btn"> <i class="ico ico-go"></i>
                            Saiba mais
                        </a>
                    </div>
                </div>
                <div class="d-flex">
                </div>
            </div>
        </section>
        @include('_layouts._partials.form-contact')
    </main>
@endsection