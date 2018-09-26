<section class="old">
    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="row">
                <nav class="locaweb-group-business">
                    <div class="container"><a href="http://www.locaweb.com.br" target="_blank">Locaweb</a> <a
                                href="https://pro.locaweb.com.br/" target="_blank">Locaweb Pro</a> <a
                                href="http://www.locawebcorp.com.br" target="_blank">Locaweb Corp</a> <a
                                href="https://www.tray.com.br" target="_blank">Tray</a> <a
                                href="https://www.yapay.com.br/" target="_blank">Yapay</a> <a href="http://allin.com.br"
                                                                                              class="active">AlliN<span
                                    class="hidden-xs"> Marketing Cloud</span></a></div>
                </nav>
                <div id="site-branding" class="col col-xs-12 col-sm-2"><h1 id="site-title"
                                                                                    style="text-indent: -99999px;">
                        E-mail Marketing Líder de Mercado</h1>
                    <div class="textwidget"><p>E-mail Marketing Tradicional</p></div>
                    <span class="hidden">logo_cabecalho_laranja</span><a href="http://allin.com.br/" target="_self"
                                                                         class="widget_sp_image-image-link"
                                                                         title="Allin"><img alt="Allin"
                                                                                            class="attachment-full"
                                                                                            style="width: 120px"
                                                                                            src="{{ $page->baseUrl }}/assets/images/logo-allin.png"></a>
                    <div class="navbar-header visible-xs-block">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-ex1-collapse" title="Acessar menu"><span class="sr-only">Acessar menu</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <nav id="site-navigation" role="navigation" class="col col-xs-12 col-sm-6">
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <div class="menu-menu-principal-container">
                            <ul id="menu-menu-principal" class="nav navbar-nav">

                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="/#plataforma">
                                        Plataforma
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="https://allin.com.br/solucoes/">
                                        Soluções
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="https://allin.com.br/parceria/">
                                        Parceria
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="https://allin.com.br/news/">
                                        News
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div id="cabecalho_extra" class="col col-xs-12 col-sm-4"><a id="cabecalho_extra_link_email"
                                                                                     class="icone icone-email"
                                                                                     href="http://allin.com.br/suporte/#formulario"
                                                                                     title="Contato">Contato</a> <a
                            id="cabecalho_extra_busca" class="icone icone-busca" href="#" title="Busca">Busca</a> <a
                            id="cabecalho_extra_link_busca" class="btn btn-simples btn-teste" href="/#contato"><span style="vertical-align: sub;">Contato </span>
                        <i class="icone icone-teste"></i></a></div>
            </div>
        </div>
        <aside id="sub_busca" class="row" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <form id="sub_busca_form" action="https://allin.com.br/busca/ajax/" method="POST"><input
                                    type="text" name="termos" placeholder="Buscar em allin.com" class="input-text">
                            <input type="hidden" name="pagina" value="1">
                            <button type="submit" class="btn btn-invisivel" title="Pesquisar"><i
                                        class="icone icone-busca"></i></button>
                            <div class="indicador-atividade" title="Carregando…"></div>
                        </form>
                        <p id="sub_busca_stats"></p></div>
                    <div class="hidden-xs col-sm-7"></div>
                </div>
            </div>
        </aside>
        @if(!empty($subheader))
            <div class="sub-header">
                <ul class="sub-header--container container list-unstyled">
                    @foreach($subheader as $item)
                        <li>
                            <a href="{{$item[0]}}">
                                @if(isset($item[2]))<img src="{{$item[2]}}">@endif
                                {{ $item[1] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </header>
    <style>
        .old {
            font-size: 16px;
            line-height: 1.42857143;
        }
        .old .visible-lg-block,
        .old .visible-lg-inline,
        .old .visible-lg-inline-block,
        .old .visible-md-block,
        .old .visible-md-inline,
        .old .visible-md-inline-block,
        .old .visible-sm-block,
        .old .visible-sm-inline,
        .old .visible-sm-inline-block,
        .old .visible-xs-block,
        .old .visible-xs-inline,
        .old .visible-xs-inline-block {
            display: none!important;
        }
        .old #sub_cabecalho_menu {
            margin-bottom: 0;
            margin-top: 0;
        }
        .old #sub_cabecalho #sub_cabecalho_menu>.menu-item {
            display: inline-block;
            position: relative;
            margin-right: 45px;
        }

        #sub_cabecalho #sub_cabecalho_menu>.menu-item:last-child {
            margin-right: 0;
        }

        .old #sub_cabecalho #sub_cabecalho_menu>.menu-item .menu-link {
            display: inline-block;
            text-transform: lowercase;
            font-size: 14px;
            line-height: 1.2em;
            color: #A3C6C9;
        }

        #cabecalho_extra, #sub_cabecalho #sub_cabecalho_menu_col, .alinha-dir {
            text-align: right;
        }

        #sub_cabecalho {
            background-color: #342D38;
            padding: 14px 0;
            font-weight: 400;
            font-size: 14px;
        }

        .old #cabecalho_extra .icone-teste {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAAGXLeQ2AAAABmJLR0QAAAAAAAD5Q7t/AAABSUlEQVR42qVVDZnDIAxFAhImAQn9qmASkDAJdXASkHASKgEJSEACR3thl3tLGnbH92UtIeTn5aVzrq91XTdHLw+nrn5a+MZ3uY3N3qWOTYZrn6cFKCvffHQJLwfD3WHAFRsYpPES0f/zUCimff9clNvoeTtrgMPtMOhyZ7pAuiR6ekFFAgSREi5WLOLB07gw/qmD8s8XUZKaCfWricUKxoH40ei5qHgLNEmk92jorcY5KRzxNgAqReUC8S8g5tWALjyb+a5xswx5GjMFek6uOegA66S030seFmj33VkLODIkkw71ZdZpYhcWN7GIDZkl4KVMj8N6BeREoBEk8sjNGn/W0kxJBGNG4/mxsVr/bhCCtQwS4txi0ywp0v0/Zc6ab2Y+jbnlFP4UIh+GQcH/sGX/5VjhedYyU3i+qzw3xnrwf2dSYEKj5OcLA943GFTgg+wAAAAASUVORK5CYII=);
            width: 23px;
            height: 23px;
        }

        .old #cabecalho_extra>.btn-simples>.icone {
            position: relative;
            left: 0;
            margin-left: 20px;
            transition: all ease-out 275ms;
            top: 0;
        }
        .old .icone {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: 0 0;
            vertical-align: middle;
            font-size: 0;
        }

        .old .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .old a#cabecalho_extra_link_busca {
            background: #e64114;
        }

        .old .btn-default,
        .old .btn-primary,
        .old .btn:not(.btn-invisivel) {
            width: auto;
            border-radius: 2px;
            border: 1px solid #99C0C3;
            padding: 15px;
            font-size: 18px;
            color: #99C0C3;
        }
        .old .btn-default,
        .old .btn-primary,
        .old .btn:not(.btn-invisivel),
        .old button[type=submit],
        .old input[type=submit] {
            float: none;
            margin: 0 auto;
            box-shadow: none;
            background-color: transparent;
            text-align: center;
            line-height: 1.2em;
            font-weight: 400;
            text-shadow: none;
            cursor: pointer;
            transition: all ease-out 275ms;
            display: inline-block;
            text-transform: uppercase;
            font-style: normal;
        }

        .old .btn.btn-simples {
            margin: 0 1px;
            width: auto;
            background-color: #8DB1B4;
            border: none;
            border-radius: 0;
            box-shadow: none;
            padding: 0 15px;
            line-height: 61px;
            text-transform: uppercase;
            text-align: left;
            font-weight: 300;
            font-stretch: condensed;
            font-size: 15px;
            color: #2d2d2d;
        }

        .old #cabecalho_extra .icone-busca {
            background-image: url(data:image/png;base64,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);
            width: 19px;
            height: 18px;
        }
        .old #cabecalho_extra .icone-email {
            background-image: url(data:image/png;base64,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);
            width: 20px;
            height: 14px;
        }
        .old #cabecalho_extra>.icone {
            position: relative;
            top: 0;
            margin-top: 5px;
            margin-right: 35px;
        }

        #cabecalho_extra, #sub_cabecalho #sub_cabecalho_menu_col, .alinha-dir {
            text-align: right;
        }
        #cabecalho_extra {
            font-size: 0;
        }

        @media (min-width: 992px) {
            .old .col-md-1,
            .old .col-md-10,
            .old .col-md-11,
            .old .col-md-12,
            .old .col-md-2,
            .old .col-md-3,
            .old .col-md-4,
            .old .col-md-5,
            .old .col-md-6,
            .old .col-md-7,
            .old .col-md-8,
            .old .col-md-9 {
                float: left;
            }
        }

        .old #menu-interno>li:after,
        .old #menu-menu-principal>li:after,
        .old #rodape_links .widget-title:before {
            content: '';
        }

        .old #menu-interno>li.ativo>a,
        .old #menu-interno>li.current-page-ancestor>a,
        .old #menu-interno>li.current_page_item>a,
        .old #menu-menu-principal>li.ativo>a,
        .old #menu-menu-principal>li.current-page-ancestor>a,
        .old #menu-menu-principal>li.current_page_item>a {
            background-color: transparent;
            color: #E64114;
        }

        .old #menu-interno>li:first-child>a, .old #menu-menu-principal>li:first-child>a {
            margin-left: 0;
        }
        .old #menu-interno>li>a, .old #menu-menu-principal>li>a {
            display: inline-block;
            margin: 0 10px;
            background-color: transparent;
            padding: 0;
            text-transform: uppercase;
            font-size: 16px;
            font-weight: 300;
            font-stretch: condensed;
            line-height: 1;
            color: #373737;
        }
        .old #menu-interno>li>a, .old #menu-menu-principal>li>a {
            color: #fa4616;
            font-weight: 500;
        }
        @media (min-width: 768px) {
            .old .navbar-nav>li>a {
                padding-top: 15px;
                padding-bottom: 15px;
            }
        }
        .old .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 20px;
        }
        .old .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px;
        }

        .old #menu-interno>li, .old #menu-menu-principal>li {
            display: inline;
            position: relative;
            float: none;
            vertical-align: bottom;
            margin: 0;
            font-weight: 700;
            font-size: 12px;
        }

        @media (min-width: 768px) {
            .old .navbar-nav>li {
                float: left;
            }
        }
        .old .nav>li {
            position: relative;
            display: block;
        }

        .old #menu-interno, .old #menu-menu-principal {
            float: none;
            margin: 0;
            padding: 0;
            text-align: left;
            font-size: 0;
        }
        @media (min-width: 768px) {
            .old .navbar-nav {
                float: left;
                margin: 0;
            }
        }

        .old .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .old .navbar-nav {
            margin: 7.5px -15px;
        }

        @media (min-width: 768px) {
            .old .navbar-collapse.collapse {
                display: block!important;
                height: auto!important;
                padding-bottom: 0;
                overflow: visible!important;
            }
        }

        .old .collapse {
            display: none;
        }

        .old .navbar-collapse {
            padding-left: 0;
            padding-right: 0;
            padding-top: 0;
            background: 0 0;
            border-top: none;
            box-shadow: none;
        }

        .old .navbar-collapse {
            overflow-x: visible;
            -webkit-overflow-scrolling: touch;
            border-top: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
            box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
        }

        @media (min-width: 768px) {
            .old .navbar-collapse {
                width: auto;
                border-top: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
        }

        .old #site-navigation {
            position: relative;
            min-height: 0;
            background: 0 0;
            padding-top: 26px;
            z-index: 1;
        }

        @media(max-width: 767px) {
            .old #site-navigation {
                padding-top: 0;
            }
        }

        .old .hidden {
            display: none!important;
        }
        .old #site-title {
            display: inline-block;
            margin: 0;
            line-height: 0;
            vertical-align: bottom;
        }

        .old #site-title, .old .container {
            max-width: 100%;
        }

        .old #site-branding {
            padding-top: 5px;
            padding-bottom: 5px;
            text-align: left;
            font-size: 0;
        }

        #masthead {
            background-color: rgba(0,0,0,1);
        }

        #masthead {
            top: 34px;
        }
        #masthead {
            position: fixed;
            left: 0;
            right: 0;
            z-index: 100;
            margin: 0;
        }

        .old nav.locaweb-group-business {
            background: #292929;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            display: inline;
            float: left;
            padding-left: 45px;
        }

        @media (min-width: 768px) {
            .old .container {
                width: 750px;
            }
        }

        @media (min-width: 992px) {
            .old .container {
                width: 970px;
            }
        }

        @media screen and (min-width: 1200px) {
            .old .container {
                width: 1024px;
                padding-left: 0;
                padding-right: 0;
            }
        }

        @media (min-width: 1200px) {
            .old .container {
                width: 1170px;
            }
        }

        .old .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .old nav.locaweb-group-business a {
            display: inline;
            float: left;
            width: auto;
            padding: 10px 20px;
            color: #fff;
            font-size: 11px;
            text-transform: uppercase;
        }

        .old nav.locaweb-group-business a.active, .old nav.locaweb-group-business a:hover {
            color: #fff;
            background: #000;
        }

        .old a, .old a:visited {
            text-decoration: none;
            transition: all ease-out 275ms;
            color: #99C0C3;
        }

        .old #menu-interno, .old #menu-menu-principal {
            text-align: right;
        }

        .old .navbar-toggle {
            position: absolute;
            right: 50%;
            top: 0;
            margin: 0 -27px 0 0;
            border: none;
            border-radius: 0;
            box-shadow: none;
            background-color: transparent;
            padding: 14px 10px;
        }

        .old .navbar-toggle {
            position: relative;
            float: right;
            padding: 9px 10px;
            margin-top: 8px;
            margin-right: 15px;
            margin-bottom: 8px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .old .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0,0,0,0);
            border: 0;
        }

        .old .navbar-toggle .icon-bar {
            background-color: #E64114;
            border: none;
            width: 32px;
            height: 3px;
        }

        .old .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px;
        }

        .old .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px;
        }

        .old .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 6px;
        }

        .old .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 4px;
        }

        @media (max-width: 767px) {
            .old .visible-xs-block {
                display: block!important;
            }
        }

        @media screen and (max-width: 767px) {
            .old #cabecalho_extra>.btn-simples {
                display: none;
            }
        }

        @media only screen and (max-width: 580px) {
            .old nav.locaweb-group-business a {
                padding: 12px 5px;
                font-size: 8px;
            }

            .old .locaweb-group-business .container {
                display: flex;
                justify-content: space-between;
            }
        }

        @media screen and (max-width: 767px) {
            .old nav.locaweb-group-business {
                padding-left: 0;
                min-height: 33px;
            }
        }

        @media only screen and (max-width: 580px) {
            .old nav.locaweb-group-business {
                min-height: 37px;
            }
        }

        @media screen and (max-width: 767px) {
            .old #site-branding {
                min-height: 39px;
            }
        }

        @media (max-width: 767px) {
            .hidden-xs {
                display: none!important;
            }
        }

        @media screen and (max-width: 767px) {
            #cabecalho_extra {
                position: absolute;
                right: 0;
                top: 0;
                line-height: 50px;
                width: auto;
            }
        }

        .old .navbar-toggle:active, .old .navbar-toggle:focus, .old .navbar-toggle:hover {
            background-color: #C3D9DB;
            box-shadow: none;
            border: none;
        }

        .old .col {
            -ms-flex-preferred-size: initial;
            flex-basis: initial;
            -webkit-box-flex: initial;
            -ms-flex-positive: initial;
            flex-grow: initial;
            max-width: initial;
        }

        .old .collapse.in {
            display: block;
        }

        .old .navbar-collapse.in {
            overflow-y: auto;
        }

        @media screen and (max-width: 767px) {
            .old #menu-interno>li, .old #menu-menu-principal>li {
                display: block;
                padding: 15px 0 10px;
                text-align: center;
            }
        }

        @media screen and (max-width: 767px) {
            .old #cabecalho_extra>.icone#cabecalho_extra_busca {
                margin-right: 10px;
            }
        }

        @media screen and (max-width: 767px) {
            .old #cabecalho_extra>.icone {
                margin-right: 20px;
                margin-top: 0;
            }
        }

        @media screen and (max-width: 767px) {
            .old #cabecalho_extra>.icone {
                margin-right: 20px;
                margin-top: 0;
            }
        }
        .btn-group-vertical>.btn-group:after,
        .old .btn-group-vertical>.btn-group:before,
        .old .btn-toolbar:after,
        .old .btn-toolbar:before,
        .old .clearfix:after,
        .old .clearfix:before,
        .old .container-fluid:after,
        .old .container-fluid:before,
        .old .container:after,
        .old .container:before,
        .old .dl-horizontal dd:after,
        .old .dl-horizontal dd:before,
        .old .form-horizontal .form-group:after,
        .old .form-horizontal .form-group:before,
        .old .modal-footer:after,
        .old .modal-footer:before,
        .old .nav:after,
        .old .nav:before,
        .old .navbar-collapse:after,
        .old .navbar-collapse:before,
        .old .navbar-header:after,
        .old .navbar-header:before,
        .old .navbar:after,
        .old .navbar:before,
        .old .pager:after,
        .old .pager:before,
        .old .panel-body:after,
        .old .panel-body:before,
        .old .row:after,
        .old .row:before {
            display: table;
            content: " ";
        }

        .old .col-xs-12 {
            width: 100%;
        }

        @media (min-width: 768px) {
            .old .col-sm-2 {
                width: 8.333333335%;
            }

            .old .col-sm-2 {
                width: 16.66666667%;
            }

            .old .col-sm-4 {
                width: 33.33333333%;
            }

            .old .col-sm-6 {
                width: 50%;
            }
        }

        @media (min-width: 992px) {
            .old .col-md-2 {
                width: 16.66666667%;
            }
        }

        @media (min-width: 992px) {
            .old .col-md-5 {
                width: 41.66666667%;
            }
        }

    </style>
    <script>
        var btn = document.querySelector('.navbar-toggle');
        btn.addEventListener('click', function() {
            var selector = this.getAttribute('data-target');
            document.querySelector(selector).classList.toggle('in');
        });
    </script>
</section>
