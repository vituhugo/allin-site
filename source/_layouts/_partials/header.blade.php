<header class="fixed-top the-header container-fluid">
    <div class="row justify-content-between py-3">
        <div class="header-nav--logo col-auto">
            <img src="/new_site/assets/images/logo.png"/>
        </div>
        <nav class="header-nav col-lg-8 offset-lg-2 d-flex justify-content-center flex-column">
            <button class="header-nav--button d-lg-none" onclick="toggleMenu()">|||</button>
            <ul class="header-nav--pages row list-unstyled justify-content-between mb-0">
                <li class="col-auto d-flex justify-content-center flex-column">
                    <a href="/" class="current">Home</a>
                </li>
                <li class="col-auto d-flex justify-content-center flex-column">
                    <a href="#plataforma">Plataforma</a>
                </li>
                <li class="col-auto d-flex justify-content-center flex-column">
                    <a href="#recursos">Recursos</a>
                </li>
                {{--<li class="col-auto d-flex justify-content-center flex-column">--}}
                    {{--<a href="#">Serviços</a>--}}
                {{--</li>--}}
                <li class="col-auto d-flex justify-content-center flex-column">
                    <a href="/news">Blog</a>
                </li>
                <li class="col-auto d-flex justify-content-center flex-column">
                    <a href="/#contato" class="btn btn-header btn-contact">Contato</a>
                </li>
            </ul>
        </nav>
    </div>
</header>