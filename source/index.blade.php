@extends('_layouts.master')

@section('content')
    <main class="page-content page-home" id="home">
        <section class="section-main container-fluid">
            <div class="row justify-content-end" style="height: 100%">
                <div class="col-12 col-md-8 d-flex flex-column justify-content-center" style="height: 100%">
                    <div class="justify-content-md-center justify-content-end d-flex flex-column" style="flex-grow: 1">
                        <div class="section-main--text mb-md-0 mb-5 pb-5 pb-md-0 has-animation" data-animation-direction="left">
                            <h1 class="home-title">
                                <strong>Compreenda<span>,</span></strong> Personalize<br class="d-none d-lg-block"> e <strong>Engaje<span>.</span></strong>
                            </h1>
                            <h2 class="home-subtitle mt-3 mb-4">
                                Crie jornadas personalizadas conectando o cliente à sua marca
                            </h2>
                            <a href="https://www.youtube.com/watch?v=Jw12A4ezjUU" target="_blank" class="btn"><i class="ico ico-play"></i>Veja Vídeo</a>
                            <a href="#contato" class="btn ml-0 ml-md-4"><i class="ico ico-monitor-click"></i>Entre em contato</a>
                        </div>
                    </div>
                    <ul class="row no-gutters list-unstyled mt-3 mb-0 d-lg-flex d-none">
                        <li class="col-3 pb-4">
                            <div class="section-main--highlight--container has-animation" data-animation-init-time="800" style="margin-left: -1.5rem">
                                <div class="section-main--highlight--image mt-3 mb-3">
                                    <i class="ico ico-letter"></i>
                                </div>
                                <h3 class="section-main--highlight--text">
                                    <strong>4 Bilhões</strong>
                                    de E-mails enviados por mês na plataforma.
                                </h3>
                            </div>
                        </li>
                        <li class="col-5 pb-4 d-flex justify-content-center" style="border-left: .15rem solid #fa4616;border-right: .15rem solid #fa4616;">
                            <div class="section-main--highlight--container has-animation" data-animation-init-time="1300">
                                <div class="section-main--highlight--image mt-3 mb-3">
                                    <i class="ico ico-cart"></i>
                                </div>
                                <h3 class="section-main--highlight--text">
                                    <strong>2 Milhões</strong>
                                    de carrinhos recuperados por mês.
                                </h3>
                            </div>
                        </li>
                        <li class="col-3 pb-4 d-flex justify-content-end">
                            <div class="section-main--highlight--container has-animation" data-animation-init-time="1800">
                                <div class="section-main--highlight--image mt-3 mb-3">
                                    <i class="ico ico-letter"></i>
                                </div>
                                <h3 class="section-main--highlight--text">
                                    <strong>6 entre 10</strong>
                                    dos maiores e-commerces estão na All iN.
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section-compreenda py-5" id="plataforma">
            <div class="row no-gutters justify-content-end flex-lg-row-reverse py-5">
                <ul class="offset-2 col-10 offset-md-0 col-md-6 col-lg-5 list-unstyled section-compreenda--items py-4">
                    <li>
                        <div class="section-compreenda--ico">
                            <img src="{{ $page->baseUrl }}/assets/images/icons/ico-brain.png" />
                        </div>
                        <h3 class="section-compreenda--title mb-2 mt-3">
                            <strong>Compr</strong>eenda
                        </h3>
                        <ul class="list-unstyled section-compreenda--list">
                            <li>Segmentações comportamentais</li>
                            <li>Teste ABCDE</li>
                            <li>Otimização de públicos</li>
                            <li>Jornada do Cliente</li>
                            <li>Data Analytics</li>
                            <li>Integrações</li>
                        </ul>
                        <p class="mb-5">
                            <a href="/compreenda" class="btn large ml-5"><i class="ico ico-go"></i>Saiba mais</a>
                        </p>
                    </li>
                    <li>
                        <div class="section-compreenda--ico">
                            <img src="{{ $page->baseUrl }}/assets/images/icons/ico-personalidade.png" />
                        </div>
                        <h3 class="section-compreenda--title mb-2 mt-3">
                            <strong>Perso</strong>nalize
                        </h3>
                        <ul class="list-unstyled section-compreenda--list">
                            <li>Recomendação de produtos</li>
                            <li>Gatilhos Comportamentais</li>
                            <li>Workflow Transacional</li>
                            <li>Automação de Marketing</li>
                            <li>Editor de Templates</li>
                            <li>E-mail Inteligente</li>
                        </ul>
                        <p class="mb-5">
                            <a href="/personalize" class="btn large ml-5"><i class="ico ico-go"></i>Saiba mais</a>
                        </p>
                    </li>
                    <li>
                        <div class="section-compreenda--ico">
                            <img src="{{ $page->baseUrl }}/assets/images/icons/ico-circuito.png" />
                        </div>
                        <h3 class="section-compreenda--title mb-2 mt-3">
                            <strong>Eng</strong>aje
                        </h3>
                        <ul class="list-unstyled section-compreenda--list">
                            <li>E-mail Marketing</li>
                            <li>E-mail Remarketing</li>
                            <li>E-mail Transacional</li>
                            <li>SMS</li>
                            <li>Push</li>
                            <li>Web</li>
                        </ul>
                    </li>

                    <p class="mb-5">
                        <a href="/engaje" class="btn large ml-5"><i class="ico ico-go"></i>Saiba mais</a>
                    </p>
                </ul>
                <div class="col-md-7 text-right d-none d-lg-block">
                    <img src="{{ $page->baseUrl }}/assets/images/home/bg-2-first-block.png" class="mt-3 img-phone has-animation" data-animation-direction="left">
                    <img src="{{ $page->baseUrl }}/assets/images/home/bg-2-secound-block.png" class="mt-5 img-phone has-animation" data-animation-direction="left" data-animation-init-time="600">
                </div>
            </div>
        </section>
        <section class="section-recomende container-fluid space-y" id="recursos">
            <h3 class="section-recomende--title">
                <strong>Recomende</strong> Produtos
            </h3>
            <h4 class="section-recomende--subtitle">
                Fortaleça o relacionamento com seu cliente usando as diversas funcionalidades  oferecidas pela All iN.
            </h4>
            <div class="row no-gutters justify-content-center">
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
        </section>
        <section class="article-simple">
            <div class="row no-gutters">
                <div class="col-12 pl-4">
                    <img src="{{ $page->baseUrl }}/assets/images/icons/ico-letter-opened.png" />
                </div>
                <div class="col-lg-4 pl-4 pr-lg-0">
                    <h3 class="article-simple--title">Somos ideais para <strong>diversos tipos de negócios</strong></h3>
                    <p>
                        Suas comunicações devem ser uma extensão
                        da experiência do cliente com sua marca.
                        <strong>Fortaleça esse relacionamento</strong> com as
                        funcionalidades da All iN que atendem
                        os principais segmentos do mercado.
                    </p>
                    <p>
                        Ajudamos você a automatizar suas regras e criar jornadas personalizadas.
                    </p>
                    <p>
                        <a href="#contato" class="btn">
                            <i class="ico ico-go"></i>
                            Entre em contato
                        </a>
                    </p>
                </div>
                <div class="col-lg-8 justify-content-end">
                    <div class="section-ideais--mozaico mt-2">
                        <img src="{{ $page->baseUrl }}/assets/images/home/ideais-bg.jpg" style="width: 100%">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-clients container-fluid space-y">
            <header class="section-clients--header mb-5">
                <h3 class="section-clients--header--title mb-3">
                    <strong>Nossos</strong> clientes
                </h3>
                <!--<h4 class="section-clients&#45;&#45;header&#45;&#45;subtitle">-->
                <!--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br class="d-none d-lg-block">-->
                <!--been the industry's.-->
                <!--</h4>-->
            </header>
            <div class="section-clients--image-container">
                <div class="row justify-content-around">
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/reserva.png" alt="logo cliente locaweb reserva" title="reserva">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/b2w.png" alt="logo cliente locaweb bw2" title="b2w">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/eurofarma.png" alt="logo cliente locaweb ultrafarma" title="ultrafarma">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/giuliana.png" alt="logo cliente locaweb giuliana" title="giuliana">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/hotel-urbano.png" alt="logo cliente locaweb hotel-urbano" title="hotel-urbano">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/rchlo.png" alt="logo cliente locaweb rchlo" title="rchlo">
                        </div>
                    </div>

                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/sephora.png" alt="logo cliente locaweb sephora" title="sephora">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/magazineluiza.png" alt="logo cliente locaweb magazineluiza" title="magazineluiza">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/kalunga.png" alt="logo cliente locaweb kalunga" title="kalunga">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/gool.png" alt="logo cliente locaweb gool" title="gool">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/ambev.png" alt="logo cliente locaweb ambev" title="ambev">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/saraiva.png" alt="logo cliente locaweb saraiva" title="saraiva">
                        </div>
                    </div>

                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/hering.png" alt="logo cliente locaweb hering" title="hering">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/ricardo-eletro.png" alt="logo cliente locaweb ricardo-eletro" title="ricardo-eletro">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/marisa.png" alt="logo cliente locaweb marisa" title="marisa">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/pda.png" alt="logo cliente locaweb pda" title="pda">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/netshoes.png" alt="logo cliente locaweb netshoes" title="netshoes">
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="logo-container">
                            <img src="{{ $page->baseUrl }}/assets/images/clientes/samsung.png" alt="logo cliente locaweb samsung" title="samsung">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-blog container-fluid space-y">
            <div class="section-blog--row row mx-0">
                <header class="section-blog--header col-12 col-md-4 mb-5 pb-5 mb-md-0 pb-md-0">
                    <div class="row mb-3 pl-4">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-blog.png" />
                    </div>
                    <div class="row">
                        <h3 class="section-blog--header--title mb-4 pl-4">Conheça nosso <strong>blog e veja as novidades</strong></h3>
                        <a href="//www.allin.com.br/news" class="btn ml-4">
                            <i class="ico ico-go"></i>Veja mais nosso Blog
                        </a>
                    </div>
                </header>
                <div class="section-blog--content col-12 col-md-7 offset-md-1">
                    <span class="section-blog--recorte-superior"></span>
                    <div class="row">
                        <article class="col-md-4 col-12 d-flex flex-column justify-content-around mt-5 mt-md-0">
                            <div class="section-blog--article-container" style="flex-grow: 1">
                                <div class="section-blog--content--article--img">
                                    <a href="/news/descubra-como-giuliana-flores-aumentou-o-engajamento-com-seu-publico-utilizando/">
                                        <img src="{{ $page->baseUrl }}/assets/images/home/blog-1.jpg">
                                    </a>
                                </div>
                                <strong class="section-blog--content--article--data">
                                    jul 19, 2018 / <span>Cases</span>
                                </strong>
                                <h1 class="section-blog--content--article--title">
                                    Descubra como a Giuliana Flores aumentou o engajamento com seu público
                                </h1>
                                <p class="section-blog--content--article--text">
                                    Concorrência é uma palavra que faz parte do cotidiano de todas as empresas
                                    e em tempos em que o mercado não se encontra tão aquecido, um dos grandes...
                                </p>
                                <hr class="my-4" />
                                <footer class="section-blog--content--article--footer row justify-content-between">
                                    <!--&lt;!&ndash;<div class="col-auto">&ndash;&gt;-->
                                    <!--&lt;!&ndash;<img src="{{ $page->baseUrl }}/assets/images/icons/ico-msg.png" /> 1&ndash;&gt;-->
                                    <!--&lt;!&ndash;<img src="{{ $page->baseUrl }}/assets/images/icons/ico-heart.png" class="ml-4" /> 13&ndash;&gt;-->
                                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                                </footer>
                            </div>
                            <a class="btn my-5 my-sm-0" style="width: 100%" href="/news/descubra-como-giuliana-flores-aumentou-o-engajamento-com-seu-publico-utilizando/"><i class="ico ico-go"></i>Leia Mais...</a>
                        </article>

                        <article class="col-md-4 col-12 d-flex flex-column justify-content-around mt-5 mt-md-0">
                            <div class="section-blog--article-container" style="flex-grow: 1">
                                <div class="section-blog--content--article--img">
                                    <a href="/news/converta-mais-no-seu-e-commerce-com-neuromarketing-e-algoritmo-de-recomendacao/">
                                        <img src="{{ $page->baseUrl }}/assets/images/home/blog-2.jpg">
                                    </a>
                                </div>
                                <strong class="section-blog--content--article--data">
                                    jun 14, 2018 / <span>E-commerce</span>
                                </strong>
                                <h1 class="section-blog--content--article--title">
                                    Converta mais no seu e-commerce com neuromarketing e algoritmo de recomendação
                                </h1>
                                <p class="section-blog--content--article--text">
                                    O marketing mudou muito nos últimos anos, dando aos profissionais inúmeras
                                    maneiras de se comunicar com seu cliente. Além de e-mail, sms, push...
                                </p>
                            </div>
                            <a class="btn my-5 my-sm-0" style="width: 100%" href="/news/converta-mais-no-seu-e-commerce-com-neuromarketing-e-algoritmo-de-recomendacao/"><i class="ico ico-go"></i>Leia Mais...</a>
                        </article>

                        <article class="col-md-4 col-12 d-flex flex-column justify-content-around mt-5 mt-md-0">
                            <div class="section-blog--article-container" style="flex-grow: 1">
                                <div class="section-blog--content--article--img">
                                    <a href="/news/6-dicas-para-criar-um-assunto-de-e-mail-campeao/">
                                        <img src="{{ $page->baseUrl }}/assets/images/home/blog-3.jpg">
                                    </a>
                                </div>
                                <strong class="section-blog--content--article--data">
                                    jul 5, 2018 / <span>Estratégias</span>
                                </strong>
                                <h1 class="section-blog--content--article--title">
                                    6 dicas para criar um assunto de e-mail campeão
                                </h1>
                                <p class="section-blog--content--article--text">
                                    Somos impactados por dezenas de e-mails marketing todos os dias. Logo no início
                                    da manhã nos deparamos com pelo menos 70 mensagens não lidas na caixa de entrada.
                                    Uma rápida olhada nas mensagens e começamos...
                                    Uma rápida olhada nas mensagens e começamos...
                                </p>
                                <hr class="my-4" />
                                <footer class="section-blog--content--article--footer row justify-content-between">
                                    <!--<div class="col-auto">-->
                                    <!--<img src="{{ $page->baseUrl }}/assets/images/icons/ico-msg.png" /> 1-->
                                    <!--<img src="{{ $page->baseUrl }}/assets/images/icons/ico-heart.png" class="ml-4" /> 13-->
                                    <!--</div>-->
                                </footer>
                            </div>
                            <a class="btn my-5 my-sm-0" style="width: 100%" href="/news/6-dicas-para-criar-um-assunto-de-e-mail-campeao/"><i class="ico ico-go"></i>Leia Mais...</a>
                        </article>
                    </div>
                    <span class="section-blog--recorte-inferior"></span>
                </div>
            </div>
        </section>

        @include('_layouts._partials.form-contact')
    </main>
@endsection

@section('scripts')
@endsection