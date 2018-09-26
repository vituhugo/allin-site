@extends('_layouts.master', ['subheader' => [
//    ['#', 'Compreenda', $page->baseUrl."/assets/images/icons/ico-compreenda.png" ],
//    ['#', 'Personalize', $page->baseUrl."/assets/images/icons/ico-personalize.png" ],
//    ['#', 'Engaje', $page->baseUrl."/assets/images/icons/ico-engaje.png" ],
]])

@section('content')
    <main class="page-content page-compreenda" id="compreenda">
        <section class="section-main container-fluid justify-content-center justify-content-md-end d-flex flex-column">
            <div class="section-main--text fade right mb-md-0 mb-5 pb-5 pb-md-0">
                <div class="row">
                    <div class="col-auto">
                        <img src="{{ $page->baseUrl }}/assets/images/icons/ico-brain-big.png" class="mt-4"/>
                    </div>
                    <div class="section-main--text--row--container no-gutters">
                        <h1 class="internal-title col-auto m-0">
                            <strong>Compreenda<span>.</span></strong>
                        </h1>
                        <h2 class="internal-subtitle col-auto m-0 pl-1">
                            Gestão de base de forma simples e completa.
                        </h2>
                    </div>
                </div>
                <ul class="internal-breadcrumb">
                    <li><a href="/">Home</a> <span class="ico ico-arrow-right mx-3"></span></li>
                    <li>Compreenda</li>
                </ul>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <ul class="row no-gutters list-unstyled mt-3 mb-0 d-lg-flex d-none">
                        <li class="col-4 d-flex justify-content-center pb-3">
                            <div class="section-main--highlight--container is-active fade left" style="margin-left: -1.5rem">
                                <div class="section-main--highlight--image">
                                    <i class="ico ico-letter"></i>
                                </div>
                                <h3 class="section-main--highlight--text">
                                    <strong>Compreenda</strong>
                                </h3>
                            </div>
                        </li>
                        <li class="col-4 d-flex justify-content-center pb-3" style="border-left: .15rem solid #fa4616;border-right: .15rem solid #fa4616;">
                            <div class="section-main--highlight--container fade left">
                                <div class="section-main--highlight--image">
                                    <i class="ico ico-cart"></i>
                                </div>
                                <h3 class="section-main--highlight--text">
                                    <strong>Personalize</strong>
                                </h3>
                            </div>
                        </li>
                        <li class="col-4 d-flex justify-content-center pb-3">
                            <div class="section-main--highlight--container fade left">
                                <div class="section-main--highlight--image">
                                    <i class="ico ico-letter"></i>
                                </div>
                                <h3 class="section-main--highlight--text">
                                    <strong>Engaje</strong>
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection