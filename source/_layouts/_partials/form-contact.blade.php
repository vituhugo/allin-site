<section class="section-contact article-simple" id="contato">
    <h3 class="section-contact--title">
        <strong>Entre em</strong> contato
    </h3>
    <div class="row mx-0">
        <div class="col-lg-6">
            <div class="row mx-0 mb-4">
                <img src="{{ $page->baseUrl }}/assets/images/icons/ico-contact.png" />
            </div>
            <h4 class="article-simple--title">
                Possui alguma dúvida
                <strong>
                    ou deseja entrar em
                    contato conosco?
                </strong>
            </h4>
            <p class="section-contact--form--subtitle mb-4">
                Venha conhecer mais do nosso Orange Marketing :)
            </p>
            <p class="section-contact--form--info has-animation" data-animation-init-time="600">
                <i class="ico ico-letter"></i>
                <strong>
                    contato@allin.com.br
                </strong>
            </p>
            <p class="section-contact--form--info has-animation" data-animation-init-time="900">
                <i class="ico ico-phone"></i>
                <strong>
                    +55 (11)3544-0499
                </strong>
            </p>
        </div>
        <form id="form-contato" action="/contato.php" onsubmit="ga('send', 'event', 'enviar_mensagem', document.getElementById('ddl-assunto').value, document.getElementById('txt-email'))" class="col-lg-6 has-animation" method="post">
            <div class="row">
                <div class="form-group col-sm-6 col-12">
                    <select class="form-control" id="ddl-assunto" title="Assunto" name="assunto" required>
                        <option selected="">Qual o assunto?</option>
                        <option value="Financeiro">Financeiro</option>
                        <option value="Spam">Spam</option>
                        <option value="Jurídico">Jurídico</option>
                        <option value="Comercial" selected>Comercial</option>
                        <option value="Parcerias">Parcerias</option>
                        <option value="Suporte">Suporte</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>

                <div class="form-group col-sm-6 col-12">
                    <input class="form-control" id="txt-nome" type="text" placeholder="NOME" title="Nome" name="nome" required>
                </div>

                <div class="form-group col-sm-6 col-12">
                    <input class="form-control" id="txt-email" type="email" placeholder="E-MAIL" title="E-mail" name="email" required>
                </div>
                <div class="form-group col-sm-6 col-12">
                    <input class="form-control" id="txt-tel" type="tel" placeholder="TELEFONE" title="Telefone" name="tel">
                </div>

                <div class="form-group col-12">
                    <textarea class="form-control" id="txa-mensagem" placeholder="MENSAGEM" rows="6" name="mensagem" required></textarea>
                </div>

                <div class="col-lg-12">
                    <button id="btn-enviar-contato" class="btn"><i class="ico ico-go"></i>Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>