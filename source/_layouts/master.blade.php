<!DOCTYPE>
<html>
<head>
    @include('_layouts._partials.head_tags')
    <title>All iN Marketing Cloud | E-mail Marketing e Remarketing</title>
</head>
<body>

<style>
    .fade {
        opacity: 0;
    }
</style>
@include('_layouts._partials.header-old')
{{--@include('_layouts._partials.header')--}}
@yield('content')
@include('_layouts._partials.footer')
<section id="external-scripts">
    <!-- v1.0.3 -->
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

    <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/build/css/main.css">
    <script src="{{ $page->baseUrl }}/assets/build/js/main.js"></script>
    @yield('scripts')

<!-- HUBSPOT LEGACY CODE -->
    <script>
        (function (d, w) {
            w._hsq = w._hsq || [];
            var match = d.cookie.match('(^|;) ?hubspotutk=([^;]*)(;|$)');
            if (match && match[2] == "7583a6df01ba2497388c640348a21a70") {
                w._hsq.push(["identify", {
                    "email": "mayara.oliveira@allin.com.br",
                    "name": "May",
                    "id": "33be9d9190599c080befc313734c352c"
                }]);
            }
            w._hsq.push(["setContentType", "standard-page"]);
        })(document, window);
    </script>
    <script type="text/javascript" id="hs-script-loader" async="" defer="" src="//js.hs-scripts.com/4037989.js"></script>
    <script src="//js.hs-analytics.net/analytics/1538822400000/4037989.js" type="text/javascript" id="hs-analytics"></script>
    <script src="https://js.hscollectedforms.net/collectedforms.js" type="text/javascript" id="CollectedForms-4037989" crossorigin="anonymous" data-leadin-portal-id="4037989" data-leadin-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="4037989" data-hsjs-env="prod"></script>
    <!-- [END HUBSPOT LEGACY CODE] -->

    <script src="//i.btg360.com.br/wf.js" type="text/javascript"></script> <!-- Integração TAG envio de contato allin -->
    <script>
        $(document).ready(function() {

            $('#form-contato').submit(function(event) {
                event.preventDefault();
                var email = jQuery("input[name='email']").val();
                var subject = $("#ddl-assunto").val();
                if (navigator.sendBeacon) ga('set', 'transport', 'beacon');

                ga('send', 'event', 'enviar_mensagem', subject, email);

                $.post(this.action, $(this).serialize(), function(response) {
                    alert(response.mensagem || "Sua solicitação não pode ser completada.");

                    __blc['id'] = "ff703a43d4ffa579f2cadb456b7ad142";
                    try {
                        lc.sendData({
                            evento: "Novo Cadastro",
                            nm_email: email,
                            vars: {},
                            lista: {}
                        });
                    } catch (e) {}

                }).fail(function() {
                    alert("Sua solicitação não pode ser completada.");
                });


            });

            $('.sml_subscribe').submit(function(event) {
                event.preventDefault();

                $.post(this.action, $(this).serialize(), function(response) {
                    alert(response.mensagem || "Sua solicitação não pode ser completada.");
                });

                return false;
            });
        })
    </script>
</section>
</body>
</html>