<!DOCTYPE>
<html>
<head>
    @include('_layouts/_partials/head_tags')
    <title>All iN Marketing Cloud | E-mail Marketing e Remarketing</title>
</head>
<body>
@include('_layouts._partials.header-old')
{{--@include('_layouts._partials.header')--}}
@yield('content')
@include('_layouts._partials.footer')
<section id="external-scripts">
    <script>
        var google_conversion_id = 993006705;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /*  */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/993006705/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>

    <link rel="stylesheet" href="/assets/build/css/main.css">
    <script src="/assets/build/js/main.js"></script>
    @yield('scripts')
</section>
</body>
</html>