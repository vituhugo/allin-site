@extends('_layouts.master', ['subheader' => [
    ['/compreenda', 'Compreenda', $page->baseUrl."/assets/images/icons/ico-brain-black.png"],
    ['/personalize', 'Personalize', $page->baseUrl."/assets/images/icons/ico-personalize.png", 'is-active'],
    ['/engaje', 'Engaje', $page->baseUrl."/assets/images/icons/ico-engaje.png" ],
]])
@section('content')
    <main class="page-content page-engaje" id="engaje">
        <section class="banner-internal" style="background-image: url('{{$page->baseUrl}}/assets/images/personalize/banner.jpg');">
            <div class="banner-internal--main has-animation">
                <div class="row">
                    <div class="col-sm-auto col-2 pr-sm-5">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-personalize-big.png" class="mt-4"/>
                    </div>
                    <div class="col-sm-auto col-10 pt-4 pt-sm-0 no-gutters">
                        <h1 class="banner-internal--main--title col-auto">
                            <strong>Personalize<span>.</span></strong>
                        </h1>
                        <h2 class="banner-internal--main--subtitle col-auto">
                            Gestão de base de forma simples e completa.
                        </h2>
                    </div>
                </div>
                <ul class="banner-internal--main--breadcrumb mt-4 list-unstyled">
                    <li><a href="/">Home</a> <span class="ico ico-arrow-right mx-3"></span></li>
                    <li>Personalize</li>
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
                            <a href="/personalize" class="banner-internal--footer--highlight is-active has-animation"  data-animation-init-time="1300">
                                <div class="banner-internal--footer--highlight--image pt-4">
                                    <img src="{{ $page->baseUrl }}/assets/images/icons/bg-seta-circle-big.png" />
                                </div>
                                <h3 class="banner-internal--footer--highlight--text mt-2">
                                    <strong>Personalize</strong>
                                </h3>
                            </a>
                        </li>
                        <li class="col-4 d-flex justify-content-center pb-3">
                            <a href="/engaje" class="banner-internal--footer--highlight has-animation"  data-animation-init-time="1800">
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
        <section class="article-simple bg-grafismos">
            <div class="row no-gutters">
                <div class="col-xl-5 col-12">
                    <div class="col-12">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-cart.png" class="has-animation" />
                    </div>
                    <h3 class="article-simple--title">
                        Recomendação de <strong class="d-block">Produtos</strong>
                    </h3>
                    <p>
                        Com o <strong>exclusivo algoritmo de recomendação</strong> da All iN, sua loja virtual passa a se comunicar de
                        forma mais assertiva e personalizada, recomendando produtos certos, na hora certa e para o
                        cliente certo.
                    </p>
                    <p>
                        Essa inteligência está disponível nos módulos de <strong> <nobr>E&#45;mail</nobr> Remarketing e Vitrine Web</strong>
                        , o que permite que sua recomendação aconteça via <nobr>e-mail</nobr> marketing ou em real time no seu
                        e-commerce em formato de vitrines em carrossel.
                    </p>
                    <p>
                        <a class="btn"><i class="ico ico-go"></i>Saiba Mais</a>
                    </p>
                </div>
                <div class="col-xl-7 col-12">
                    <img src="{{ $page->baseUrl }}/assets/images/personalize/recomendacao-produtos.png" class="ml-xl-5" />
                </div>
            </div>
        </section>

        <section class="article-center bg-cinza separator" id="gatilhos-comportamentais">
            <h3 class="section-recomende--title">
                Gatilhos <strong>Comportamentais</strong>
            </h3>
            <h4 class="section-recomende--subtitle">
                Impacte quem <strong>abandonou o carrinho, fechou a navegação</strong> de uma página, <strong>não compra há determinado período</strong>
                ou está em <strong>dúvida em um produto</strong> através de <strong>100 combinações</strong> do nosso exclusivo algoritmo de recomendação.
                São mais de 20 regras possíveis com 5 módulos de recomendação feitos para o seu negócio.
            </h4>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-12 pr-5">
                    <ul class="list-unstyled slider slider-gatilhos-comportamentais">
                        <li class="slider--item">
                            <img src="{{ $page->baseUrl }}/assets/images/compreenda/carousel/geladeira-vazia.jpg" />
                            <p>Abandono de carrinho</p>
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
        </section>

        <section class="article-simple bg-grafismos">
            <article class="article-workflow-transacional-personalize space-y pb-0">
                <div class="row no-gutters pb-5">
                    <div class="col-xl-5 col-12">
                        <div class="col-12">
                            <img src="{{ $page->baseUrl }}/assets/images/icons/ico-tasks.png" />
                        </div>
                        <h3 class="article-simple--title">
                            Workflow <strong>Transacional</strong>
                        </h3>
                        <p>
                            Envie comunicações transacionais com nosso worfklow por múltiplos canais como <nobr></nobr>e-mail, sms,
                            push e social. Crie fluxos personalizados seja por perfil de usuário (gênero, idade, região)
                            ou por comportamento no <nobr>e-mail</nobr> (banner clicado). Com esse recurso você pode:
                        </p>
                        <ul>
                            <li>Enviar comunicações de boas-vindas.</li>
                            <li>Criar réguas automatizados para inbound</li>
                            <li>Enviar mensagens transacionais como troca de senha.</li>
                            <li>Pagamento aprovado e pedido enviado;</li>
                        </ul>
                        {{--<p>--}}
                            {{--<a href="#" class="btn"><i class="ico ico-go"></i>Saiba mais</a>--}}
                        {{--</p>--}}
                    </div>
                    <div class="col-xl-7 col-12 px-5 bg-grafismo-laranja">
                        <img src="{{ $page->baseUrl }}/assets/images/personalize/workflow-transacional.gif" class="mt-xl-5" />
                    </div>

                    <hr class="right">
                </div>
                <div class="row no-gutters">
                    <div class="col-xl-5 col-12">
                        <div class="col-12">
                            <img src="{{ $page->baseUrl }}/assets/images/icons/ico-tasks.png" />
                        </div>
                        <h3 class="article-simple--title">
                            Automação de <strong>Marketing</strong>
                        </h3>
                        <p>
                            Nossa palavra de lei é <strong>personalização</strong> e por isso, temos diversas features
                            para te ajudar a <strong>automatizar suas campanhas</strong> e se preocupar com o que
                            realmente importa: a <strong>estratégia do seu negócio</strong>. Com a All iN você pode automatizar desde o
                            upload de bases, mensagens de aniversário, fluxos de boas-vindas até <nobr>e-mails</nobr> para quem
                            navegar em determinada sessão no seu e-commerce.
                        </p>
                        {{--<p>--}}
                            {{--<a href="#" class="btn"><i class="ico ico-go"></i>Saiba mais</a>--}}
                        {{--</p>--}}
                    </div>
                    <div class="col-xl-7 col-12 px-5 bg-grafismo-laranja">
                        <img src="{{ $page->baseUrl }}/assets/images/personalize/automacao-marketing.gif" />
                    </div>
                </div>
            </article>
        </section>
        <section class="article-center bg-cinza separator orange">
            <div class="row">
                <h3 class="article-center--title col-12">
                    Editor de <strong>Templates</strong>
                </h3>
                <h4 class="article-center--subtitle col-12">
                    Com nosso editor de templates, conhecido como <strong>Templatize</strong> é possível de forma simples, criar
                    rapidamente layouts de qualidade para entregar o melhor HTML e conteúdo aos seus clientes. São mais
                    de 100 diferentes layouts divididos em diversas categorias de negócio que vão facilitar a
                    programação e criação dos seus <nobr>e-mails</nobr>.
                </h4>
                <div class="col-12">
                    <ul class="list-unstyled row text-center my-5 article-center--highglights">
                        <li class="col-lg-4 col-12 d-flex flex-column">
                            <div class="text-center">
                                <img src="{{ $page->baseUrl }}/assets/images/icons/ico-praticidade.png" />
                            </div>
                            <h5 class="article-center--highglights--title">Praticidade</h5>
                            <p>
                                Os modelos de <nobr>e-mail</nobr> são fundamentais para quem deseja aumentar a produtividade. Afinal,
                                você não precisa programar nada e ainda pode fazer o download do código para usar em outras
                                comunicações.
                            </p>
                        </li>
                        <li class="col-lg-4 col-12 d-flex flex-column">
                            <div class="text-center">
                                <img src="{{ $page->baseUrl }}/assets/images/icons/ico-maior-taxa.png" />
                            </div>
                            <h5 class="article-center--highglights--title">Maior taxa de Abertura</h5>
                            <p>
                                Com o template clean e responsivo, suas taxas de engajamento podem aumentar consideravelmente.
                                Afinal, estima-se que mais de 71% dos usuários apaguem <nobr>e-mails</nobr> desconfigurados.
                            </p>
                        </li>
                        <li class="col-lg-4 col-12 d-flex flex-column">
                            <div class="text-center">
                                <img src="{{ $page->baseUrl }}/assets/images/icons/ico-personalização.png" />
                            </div>
                            <h5 class="article-center--highglights--title">Personalização</h5>
                            <p>
                                Para impulsionar as chances do seu conteúdo ser lido e clicado, o editor de templates oferece
                                integração com seu XML, permitindo a inclusão de produtos do seu e-commerce de forma
                                automática.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 personalize-responsive-image">
                    <img src="{{ $page->baseUrl }}/assets/images/personalize/responsive.png" class="has-animation" />
                </div>
            </div>
        </section>
        <section class="article-simple bg-grafismos">
            <div class="row flex-xl-row flex-column-reverse mt-5">
                <div class="col-xl-6 col-auto pr-5 bg-grafismo-laranja bg-esquerda">
                    <img src="{{ $page->baseUrl }}/assets/images/personalize/xml.png" class="has-animation" data-animation-direction="left" />
                </div>
                <div class="col-xl-6 col-auto">
                    <div class="col-12">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-preço-dinamico.png" />
                    </div>
                    <h3 class="article-simple--title">
                        Preço <strong class="d-block">Dinâmico</strong>
                    </h3>
                    <p>
                        Sua loja altera a todo o momento o preço dos produtos e isso faz com que seus <nobr>e-mails</nobr> acabem
                        ficando desatualizados? Com o <strong>Preço Dinâmico</strong>, você é capaz de adicionar uma
                        variável em todos os seus produtos que <strong>altera os valores de forma automática sempre que um
                        produto sofrer alteração de preço no seu XML.</strong><br>
                        A melhor coisa é que isso <strong class="orange">funciona inclusive para
                            quem já abriu e clicou na sua mensagem</strong>.
                    </p>
                </div>

            </div>
        </section>

        <section class="footer-banner article-simple py-5" style="background-image: url({{$page->baseUrl}}/assets/images/personalize/banner-footer.png)">
            <div class="col-12 mb-3">
                <img src="{{ $page->baseUrl }}/assets/images/personalize/hotel-urbano.png" style="max-height: 4.5rem" class="mt-2" />
                <img src="{{ $page->baseUrl }}/assets/images/compreenda/logo-case.png"  class="mx-4" />
            </div>
            <div class="col-md-8 col-12">
                <h3 class="article-simple--title">
                    Hotel Urbano: <nobr>e-mail</nobr> otimizados com o
                    <strong class="orange">preço dinâmico</strong>
                </h3>
                <p>
                    A variação cambial do dólar e de outras moedas impacta diretamente na estratégia de vendas de um dos
                    maiores sites de viagens do Brasil, fazendo com que os <strong><nobr>e-mails</nobr> precisassem passar por ajustes
                    constantes.</strong> Foi aí que a marca começou a <strong>otimizar os envios com o preço dinâmico!</strong>
                </p>
            </div>
            <div class="col-md-8 col-12">
                <div class="row justify-content-between">
                    <div class="col-sm-4 col-12">
                        <a href="/news/veja-como-o-hotel-urbano-conseguiu-otimizar-o-envio-de-suas-campanhas-utilizando-o-e-mail-inteligente/" class="btn"> <i class="ico ico-go"></i>
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