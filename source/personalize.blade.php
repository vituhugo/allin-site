@extends('_layouts.master', ['subheader' => [
    ['/compreenda', 'Compreenda', $page->baseUrl."/assets/images/icons/ico-compreenda.png"],
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
                        , o que permite que sua recomendação aconteça via E-mail marketing ou em real time no seu
                        e-commerce em formato de vitrines em carrossel.
                    </p>
                    <p>
                        <a class="btn"><i class="ico ico-go"></i>Saiba Mais</a>
                    </p>
                </div>
                <div class="col-xl-7 col-12">
                    <img src="{{ $page->baseUrl }}/assets/images/personalize/recomendacao-produtos.gif" class="ml-xl-5" />
                </div>
            </div>
        </section>

        <section class="article-center bg-cinza separator" id="gatilhos-comportamentais">
            <h3 class="section-recomende--title">
                Gatilhos <strong>Comportamentais</strong>
            </h3>
            <h4 class="section-recomende--subtitle">
                Para garantir a personalização da mensagem para cada ação realizada no seu site, oferecemos mais de 20
                regras de comportamento para impactar seu cliente em diversos momentos da jornada de compra. Confira
                algumas delas:

            </h4>
            <div class="row no-gutters justify-content-center pb-5">
                @include('_layouts._partials.container-with-tabs', [
                    'list' => [
                        [
                            'ico' => 'ico-cart-2',
                            'name' => 'Abandono de carinho',
                            'title' => 'Conheça mais sobre o <strong>abandono de carrinho</strong>',
                            'content' => '<p>Envie comunicações para os clientes que abandonaram os produtos do seu
                                          e-commerce no carrinho.</p><p>Além do produto abandonado, você pode enviar
                                          sugestões de similares, cross sell, quem viu, viu também e mais.</p>',

                            'image' => [
                                'src' => $page->baseUrl.'/assets/images/home/abando-de-carrinho-site.png',
                                'alt' => 'Celular abandono de carrinho',
                                'title' => 'abandono de carrinho',
                            ],
                            'highlights' => [
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '1,5 MM',
                                    'description' => 'envios mensais',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 25%',
                                    'description' => 'de cliques',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 45%',
                                    'description' => 'de conversão',
                                ]
                            ]
                        ],
                        [
                            'ico' => 'ico-click',
                            'name' => 'Abandono de Navegação',
                            'title' => 'Conheça mais sobre o <strong>Abandono de navegação</strong>',
                            'content' => '<p> O cliente navegou em uma categoria ou em páginas de produtos do seu site e abandonou
                                         a navegação? Com esse recurso, você pode enviar os itens vistos em um e-mail
                                         personalizado e tentar a conversão através dos módulos de similares, quem viu,
                                         comprou e mais!</p>',
                            'image' => [
                                'src' => $page->baseUrl.'/assets/images/home/abandono-de-navegacao-site.png',
                                'alt' => 'visualização de celular site',
                                'title' => 'abandono de navegação',
                            ],
                            'highlights' => [
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '8,5 MM',
                                    'description' => 'envios mensais',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 20%',
                                    'description' => 'de cliques',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 18%',
                                    'description' => 'de conversão',
                                ]
                            ]
                        ],
                        [
                            'ico' => 'ico-baixo-custo',
                            'name' => 'Redução de preços',
                            'title' => 'Conheça mais sobre o <strong>Redução de preços</strong>',
                            'content' => '<p> Com esse recurso, você pode avisar seu cliente quando o produto
                                         navegado ou item similar sofrer alguma alteração de preço. Quem sabe assim,
                                         ele não desiste de pesquisar na concorrência e fecha a compra com sua
                                         loja? </p>',
                            'image' => [
                                'src' => $page->baseUrl.'/assets/images/home/reduziu-preco-site.png',
                                'alt' => '',
                                'title' => '',
                            ],
                            'highlights' => [
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '9,6 MM',
                                    'description' => 'envios mensais',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 20%',
                                    'description' => 'de abertura',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 27%',
                                    'description' => 'de conversão',
                                ]
                            ]
                        ],
                        [
                            'ico' => 'ico-baixo-custo',
                            'name' => 'Reconquista',
                            'title' => 'Conheça mais sobre a <strong>Reconquista</strong>',
                            'content' => '<p>Reengajar clientes da base na maioria das vezes é bem mais vantajoso
                                          financeiramente que trazer novos usuários. Com a régua de Reconquista,
                                          você pode enviar comunicações automáticas para o cliente que não compra
                                          a algum tempo na sua loja, incluindo uma mensagem personalizada para que
                                          ele volte a comprar novamente. </p>',
                            'image' => [
                                'src' => $page->baseUrl.'/assets/images/home/reconquista-site.png',
                                'alt' => '',
                                'title' => '',
                            ],
                            'highlights' => [
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '2,1 MM',
                                    'description' => 'envios mensais',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 12%',
                                    'description' => 'de abertura',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 21%',
                                    'description' => 'de conversão',
                                ]
                            ]
                        ],
                        [
                            'ico' => 'ico-baixo-custo',
                            'name' => 'Indecisos',
                            'title' => 'Conheça mais sobre o <strong>Indecisos</strong>',
                            'content' => '<p> Seu cliente está indeciso em qual marca escolher na hora da compra? Nossa
                                          regra identifica a indecisão e envia uma comunicação com os dois itens mais
                                          comprados nos últimos 30 dias por outros clientes, ajudando-o a decidir a
                                          compra.</p>',
                            'image' => [
                                'src' => $page->baseUrl.'/assets/images/home/indecisos-site.png',
                                'alt' => '',
                                'title' => '',
                            ],
                            'highlights' => [
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '4 MM',
                                    'description' => 'envios mensais',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 28%',
                                    'description' => 'de abertura',
                                ],
                                [
                                    'ico' => 'ico-letter',
                                    'name' => '+ 34%',
                                    'description' => 'de conversão',
                                ]
                            ]
                        ],
                    ],
                    'see_more' => "/e-mail-remarketing/",
                ])
            </div>
            <div class="statistics-list-inline ignore-container mt-5">
                <div class="container-fluid py-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-2 col-md-6 col-12 text-center text-md-left pl-xl-5">
                            <strong class="d-block"><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="3" data-animation-init-time="800">0</i>x mais</strong>
                            envolvimento com
                            conteúdo preditivo e
                            engajado
                        </div>
                        <div class="col-xl-2 col-md-6 col-12 text-center text-md-left pt-3 pt-md-0">
                            <strong class="d-block"><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="6" data-animation-init-time="1100">0</i>x mais</strong>
                            receitas geradas por<br class="d-md-block d-none">
                            personalização de<br class="d-md-block d-none">
                            mensagem
                        </div>
                        <div class="col-xl-2 col-md-6 col-12 text-center text-md-left pt-3 pt-md-0">
                            <strong class="d-block"><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="2" data-animation-init-time="1400">0</i>x mais</strong>
                            conversão via<br class="d-md-block d-none">
                            segmentação e<br class="d-md-block d-none">
                            mensagens relevantes
                        </div>
                        <div class="col-xl-2 col-md-6 col-12 text-center text-md-left pt-3 pt-md-0">
                            <strong class="d-block"><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="3" data-animation-init-time="1700">0</i>x mais</strong>
                            envolvimento com<br class="d-md-block d-none">
                            conteúdo preditivo e<br class="d-md-block d-none">
                            engajado
                        </div>
                        <div class="col-xl-2 col-md-6 col-12 text-center text-md-left pt-3 pt-md-0">
                            <strong class="d-block"><i class="number-shake has-animation" data-animation-style="counter" data-animation-number="6" data-animation-init-time="2000">0</i>x mais</strong>
                            receitas geradas por<br class="d-md-block d-none">
                            personalização de<br class="d-md-block d-none">
                            mensagem
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="article-simple bg-grafismos">
            <article class="article-workflow-transacional-personalize">
                <div class="row no-gutters pb-5">
                    <div class="col-xl-5 col-12">
                        <div class="col-12">
                            <img src="{{ $page->baseUrl }}/assets/images/icons/ico-tasks.png" />
                        </div>
                        <h3 class="article-simple--title">
                            Workflow <strong>Transacional</strong>
                        </h3>
                        <p>
                            Envie comunicações transacionais com nosso worfklow por múltiplos canais como e-mail, sms,
                            push e social. Crie fluxos personalizados seja por perfil de usuário (gênero, idade, região)
                            ou por comportamento no e-mail (banner clicado). Com esse recurso você pode:
                        </p>
                        <ul>
                            <li>Enviar comunicações de boas-vindas.</li>
                            <li>Criar réguas automatizados para inbound</li>
                            <li>Enviar mensagens transacionais como troca de senha.</li>
                            <li>Pagamento aprovado e pedido enviado;</li>
                        </ul>
                        <p>
                            <a href="#" class="btn"><i class="ico ico-go"></i>Saiba mais</a>
                        </p>
                    </div>
                    <div class="col-xl-7 col-12 px-5">
                        <img src="{{ $page->baseUrl }}/assets/images/personalize/workflow-transacional.gif" />
                    </div>
                </div>
                <div class="row no-gutters pt-5 mt-5">
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
                            realmente importa: a estratégia do seu negócio. Com a All iN você pode automatizar desde o
                            upload de bases, mensagens de aniversário, fluxos de boas-vindas até e-mails para quem
                            navegar em determinada sessão no seu e-commerce.
                        </p>
                        <p>
                            <a href="#" class="btn"><i class="ico ico-go"></i>Saiba mais</a>
                        </p>
                    </div>
                    <div class="col-xl-7 col-12 px-5">
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
                    programação e criação dos seus e-mails.
                </h4>
                <div class="col-12">
                    <ul class="list-unstyled row text-center my-5 article-center--highglights">
                        <li class="col-lg-4 col-12 d-flex flex-column">
                            <div class="text-center">
                                <img src="{{ $page->baseUrl }}/assets/images/icons/ico-praticidade.png" />
                            </div>
                            <h5 class="article-center--highglights--title">Praticidade</h5>
                            <p>
                                Os modelos de e-mail são fundamentais para quem deseja aumentar a produtividade. Afinal,
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
                                Afinal, estima-se que mais de 71% dos usuários apaguem e-mails desconfigurados.
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
                <div class="col-xl-6 col-auto pr-5">
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
                        Sua loja altera a todo o momento o preço dos produtos e isso faz com que seus e-mails acabem
                        ficando desatualizados? Com o <strong>Preço Dinâmico</strong>, você é capaz de adicionar uma
                        variável em todos os seus produtos que <strong>altera os valores de forma automática sempre que um
                        produto sofrer alteração de preço no seu XML.</strong><br>
                        A melhor coisa é que isso funciona inclusive para
                        quem já abriu e clicou na sua mensagem.
                    </p>
                </div>

            </div>
        </section>
        @include('_layouts._partials.form-contact')
    </main>
@endsection