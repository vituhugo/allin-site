@extends('_layouts.master', ['subheader' => [
    ['/compreenda', 'Compreenda', $page->baseUrl."/assets/images/icons/ico-compreenda.png"],
    ['/personalize', 'Personalize', $page->baseUrl."/assets/images/icons/ico-personalize.png", 'is-active'  ],
    ['/engaje', 'Engaje', $page->baseUrl."/assets/images/icons/ico-engaje.png" ],
]])
@section('content')
    <main class="page-content page-engaje" id="engaje">
        <section class="banner-internal" style="background-image: url('{{$page->baseUrl}}/assets/images/engaje/banner.jpg');">
            <div class="banner-internal--main has-animation">
                <div class="row">
                    <div class="col-sm-auto col-2 pr-sm-5">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-engaje-big.png " class="mt-2"/>
                    </div>
                    <div class="col-sm-auto col-10 pt-4 pt-sm-0 no-gutters">
                        <h1 class="banner-internal--main--title col-auto">
                            <strong>Engaje<span>.</span></strong>
                        </h1>
                        <h2 class="banner-internal--main--subtitle col-auto">
                            Gestão de base de forma simples e completa.
                        </h2>
                    </div>
                </div>
                <ul class="banner-internal--main--breadcrumb mt-4 list-unstyled">
                    <li><a href="/">Home</a> <span class="ico ico-arrow-right mx-3"></span></li>
                    <li>Engaje</li>
                </ul>
            </div>
            <footer class="banner-internal--footer row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <ul class="banner-internal--footer--container row no-gutters list-unstyled mt-3 mb-0">
                        <li class="col-4 d-flex justify-content-center pb-3">
                            <a href="/compreenda" class="banner-internal--footer--highlight has-animation" style="margin-left: -1.5rem" data-animation-init-time="800">
                                <div class="banner-internal--footer--highlight--image">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-brain.png" />
                                </div>
                                <h3 class="banner-internal--footer--highlight--text mt-2">
                                    <strong>Compreenda</strong>
                                </h3>
                            </a>
                        </li>
                        <li class="col-4 d-flex justify-content-center pb-3" style="border-left: .15rem solid #fa4616;border-right: .15rem solid #fa4616;">
                            <a href="/personalize" class="banner-internal--footer--highlight has-animation"  data-animation-init-time="1300">
                                <div class="banner-internal--footer--highlight--image">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-personalidade.png" />
                                </div>
                                <h3 class="banner-internal--footer--highlight--text mt-2">
                                    <strong>Personalize</strong>
                                </h3>
                            </a>
                        </li>
                        <li class="col-4 d-flex justify-content-center pb-3">
                            <a href="/engaje" class="banner-internal--footer--highlight is-active has-animation"  data-animation-init-time="1800">
                                <div class="banner-internal--footer--highlight--image pt-3">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/bg-seta-circle-big.png" />
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

        <section class="article-simple py-0 bg-grafismos">
            <article class="row no-gutters space-y pb-0">
                <div class="col-12 col-xl-5 pl-4 pr-xl-0">
                    <div>
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-letter-opened-orange.png"/>
                    </div>
                    <h3 class="article-simple--title mt-3">E-mail <strong class="d-block">Marketing</strong></h3>
                    <p>
                        A All iN é a empresa brasileira líder em <strong>e-mail marketing</strong>. Além dos
                        tradicionais recursos mais conhecidos, a plataforma oferece mais de 30 features você inovar
                        sua forma de comunicar.
                    </p>
                    <ul class="pl-5">
                        <li>Envie <strong>mensagens automáticas</strong> de aniversário e por data;</li>
                        <li>Fatie seu HTML e <strong>crie diferentes mensagens</strong> a depender dos dados disponíveis na sua base;</li>
                        <li><strong>Gerencie links</strong> mesmo após o envio das campanhas;</li>
                        <li>Teste conteúdo, remetente, assunto, HTML e mais no nosso <strong>Teste ABCDE</strong></li>
                        <li>Descubra quais áreas do seu e-mail <strong>foram mais clicadas</strong> através do Mapa de Calor.</li>
                    </ul>
                </div>
                <div class="col-xl-7 col-12 justify-content-xl-end justify-content-center">
                    <div class="block-text-image--image text-right">
                        <img src="{{ $page->baseUrl }}/assets/images/engaje/img-email-marketing.png" class="has-animation">
                    </div>
                </div>
            </article>
            <article class="row no-gutters flex-xl-row-reverse space-y">
                <div class="col-12 col-xl-6 pl-4 pr-xl-0">
                    <div>
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-letter-opened-orange.png"/>
                    </div>
                    <h3 class="article-simple--title mt-3">E-mail <strong class="d-block">Remarketing</strong></h3>
                    <p>
                        A O E-mail Remarketing da All iN capta o comportamento do visitante no seu site e possibilita o
                        envio de comunicações personalizadas e automatizadas, aumentando a propensão de compra. Através
                        do nosso exclusivo algoritmo de recomendação, o sistema sugere produtos/serviços mais assertivos
                        para cada tipo de cliente que navega no seu e-commerce.
                    </p>
                    <p>
                        Nossa tecnologia possui mais de 20 regras de comportamento entre Abandono de Carrinho, Redução
                        de Preços e Reconquista, que podem ser combinados em cinco módulos como Similares, Mais Vendidos,
                        Cross-Sell, Quem viu, viu também, dentre outros, gerando mais de 100 combinações possíveis.
                    </p>
                </div>

                <div class="col-xl-6 col-12 mt-5 pr-5">
                    <ul class="list-unstyled slider slider-gatilhos-comportamentais">
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
            </article>
        </section>
        <section class="article-simple bg-cinza">
            <article class="row no-gutters">
                <div class="col-xl-5 col-12">
                    <div class="col-12">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-tasks.png" class="ico-orange"/>
                    </div>
                    <h3 class="article-simple--title">
                        Workflow <strong>Transacional</strong>
                    </h3>
                    <p>
                        Precisa enviar mensagens transacionais para os seus clientes? É fácil. Com a All iN, você pode
                        criar um fluxo automático que começa toda a vez que um cliente faz uma solicitação (como troca
                        de senha) ou realiza alguma ação no seu site (como uma compra ou um novo cadastro).
                    </p>
                    <p>
                        Esse fluxo pode ser criado a partir de reações nos envios como abertura e clique, permitindo que
                        você interaja com o cliente em todos os canais. O melhor é que ele também pode ser usado para
                        Inbound Marketing, permitindo que você envie mensagens para quem solicita o download do seu
                        e-book ou assiste um webinar, por exemplo.
                    </p>
                    <p>
                        <a href="#" class="btn"> <i class="ico ico-go"></i>
                            Saiba mais
                        </a>
                    </p>
                </div>
                <div class="col-xl-7 col-12">
                    <img src="{{ $page->baseUrl }}/assets/images/compreenda/workflow-1a-site.gif" />
                </div>
            </article>
            <div class="statistics-list-inline ignore-container mt-5">
                <div class="container-fluid py-4">
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-12 pl-5">
                            <strong class="d-block"><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="30" data-animation-init-time="800">0</i>% de</strong>
                            Conversão
                        </div>
                        <div class="col-md-3 col-12">
                            <strong class="d-block"><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="25" data-animation-init-time="1100">0</i>% de</strong>
                            Cliques
                        </div>
                        <div class="col-md-3 col-12">
                            <strong class="d-block"><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="20" data-animation-init-time="1400">0</i>% de</strong>
                            Abertura
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-workflow-transacional pt-5">
            <article class="article-simple article-web">
                <div class="row no-gutters">
                    <div class="col-6 pt-5">
                        <img src="{{ $page->baseUrl }}/assets/images/engaje/note-loja.png" class="pull-container" />
                    </div>
                    <div class="col-6">
                        <div class="col-12 px-0">
                            <img src="{{$page->baseUrl}}/assets/images/icons/ico-mac-click.png" />
                        </div>
                        <h3 class="article-simple--title">
                            <strong>Web</strong>
                        </h3>
                        <p>
                            <strong>Aumente mais de 28% sua taxa de conversão e retenha 3x mais o cliente na sua loja virtual</strong>
                            com o módulo Web da All iN.
                        </p>
                        <p>
                            Com ele, você recomenda produtos em real time no seu e-commerce através da nossa vitrine web.
                            Usando a mesma inteligência do remarketing, você pode escolher entre <strong>os 6 módulos disponíveis
                            como Similares, Cross-Sell, Mais Vendidos, Mais Visitados, dentre outros.</strong>
                        </p>
                        <p>
                            Dessa forma, você deixa sua loja virtual mais personalizada para cada cliente.
                        </p>
                    </div>
                </div>
            </article>
        </section>

        <section class="article-simple bg-cinza">
            <div class="row no-gutters">
                <div class="col-xl-5 col-12">
                    <div class="col-12">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-pin.png" />
                    </div>
                    <h3 class="article-simple--title">
                        <strong>Push</strong>
                    </h3>
                    <p>
                        Mais de 78% dos jovens brasileiros compram on-line por isso, é fundamental que sua marca esteja
                        cada vez mais perto do seu consumidor. Para que isso aconteça, oferecemos o envio de Push pelo
                        seu aplicativo.
                    </p>
                    <p>
                        Ele pode ser feito por campanhas, subindo uma lista de ID’s coletados ou via transacional,
                        através da criação de um fluxo automatizado que se inicia a partir de eventos criados por
                        você (como novo cadastro, troca de senha, pedido enviado, etc);
                    </p>
                </div>
                <div class="col-xl-7 col-12 pl-5 text-center">
                    <img src="{{ $page->baseUrl }}/assets/images/engaje/celular-compra.png" />
                </div>
            </div>
        </section>
        <section class="article-simple bg-grafismos">
            <div class="row flex-xl-row flex-column-reverse no-gutters">
                <div class="col-xl-6 col-auto px-5 text-center">
                    <img src="{{ $page->baseUrl }}/assets/images/engaje/celular-mensagem.png" />
                </div>
                <div class="col-xl-6 col-auto">
                    <div class="col-12">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-sms.png" />
                    </div>
                    <h3 class="article-simple--title">
                        SMS
                    </h3>
                    <p>
                        Mais de 98% das mensagens enviadas por SMS são lidas pelos usuários, o que traz uma grande
                        oportunidade para sua empresa engajar e converter mais.
                    </p>
                    <p>
                        Em parceria com a Zenvia, disponibilizamos envios de SMS Marketing e SMS Transacional para
                        sua base, potencializando sua comunicação em múltiplos canais.
                    </p>
                </div>
            </div>
        </section>
        <section class="footer-banner article-simple py-5" style="background-image: url({{$page->baseUrl}}/assets/images/engaje/banner-footer.jpg);color: white">
            <div class="col-12 pt-5">
                <img src="{{ $page->baseUrl }}/assets/images/icons/ico-blog.png" style="filter: invert(100%)"/>
            </div>
            <div class="col-md-8 col-12">
                <h3 class="article-simple--title">
                    Adcos aumenta <strong class="orange">196% na conversão</strong> com
                    <nobr>E-mail Remarketing</nobr>
                </h3>
                <p>
                    A ADCOS, grande empresa do setor de dermocosméticos, percebeu que precisava analisar as informações
                    mais de perto, entregando ao seu cliente o melhor produto. Foi quando iniciou uma parceria para
                    utilizar os recursos de E-mail Remarketing da All iN, <strong>atingindo 196% mais em conversão.</strong>
                </p>
            </div>
            <div class="col-md-9 col-12">
                <div class="row justify-content-between">
                    <div class="col-sm-4 col-12">
                        <a href="#" class="btn"> <i class="ico ico-go"></i>
                            Saiba mais
                        </a>
                    </div>
                    <div class="col-sm-auto col-12">
                        <img src="{{ $page->baseUrl }}/assets/images/engaje/adcos-logo.png" class="mx-4 mt-4" />
                        <img src="{{ $page->baseUrl }}/assets/images/compreenda/logo-case.png"  class="mx-4" />
                    </div>
                </div>
                <div class="d-flex">
                </div>
            </div>
        </section>
        @include('_layouts._partials.form-contact')
    </main>
@endsection