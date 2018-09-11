<footer class="bg-base-dark mt-5">
    <img src="images/giz-white.png" class="img-fluid" style="margin-top: -10px;">
    <div class="container mt-4" id="contact">
        
        <div align="center" class="mt-4-5 mb-5">
            <span class="text-light font-cookie weight-500 ls-05 fs-40">
                Há mais de 40 anos, escola que tem <b class="ls-1">Urmes</b> está sempre passando bem
            </span>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <p class="font-raleway weight-600 ls-05 text-white mb-0">Mapa do Site</p>
                
                <a href="#top" class="link d-block text-white font-raleway weight-400 ls-05 mb-1">Home</a>
                <a href="empresa.php#content" class="link d-block text-white font-raleway weight-400 ls-05 mb-1">Empresa</a>
                <a href="servicos.php#content" class="link d-block text-white font-raleway weight-400 ls-05 mb-1">Serviços</a>
                <a href="contato.php#content" class="link d-block text-white font-raleway weight-400 ls-05 mb-1">Contato</a>
                <a href="localizacao.php#content" class="link d-block text-white font-raleway weight-400 ls-05 mb-1">Localização</a>                
            </div>
            <div class="col-md-4 mb-3">
                <p class="font-raleway weight-600 ls-05 text-white mb-0">Contato</p>

                <a href="tel:" class="d-block text-white font-raleway weight-400 ls-05 mb-1">
                    <i class="fa fa-phone text-white"></i>
                    (21) 2284-1212
                </a>
                <a href="mailto:vendas@urmes.com.br" class="d-block text-white font-raleway weight-400 ls-05 mb-1">
                    <i class="fa fa-envelope text-white"></i>
                    vendas@urmes.com.br
                </a>
                <span class="d-block text-white font-raleway weight-400 ls-05 mb-1">
                    <span class="d-block">
                        <i class="fa fa-user text-white"></i>
                        Atendimento personalizado
                    </span>
                    <span class="d-block">Dias úteis das 09h às 17h</span>
                </span>

            </div>
            <div class="col-md-4 mb-3">
                <p class="font-raleway weight-600 ls-05 text-white mb-0">Onde Estamos</p>
                <p class="text-white mb-1 font-raleway weight-400 ls-05">
                    <i class="fa fa-map-marker-alt"></i>
                    Rua Senador Furtado, 93 Maracanã - RJ
                </p>
                <p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.0573541272756!2d-43.22162008545654!3d-22.911255285009506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997ef8a1ac6503%3A0xabfb6b333def7f89!2sURMES-Urg%C3%AAncias+M%C3%A9dico+Escolares!5e0!3m2!1spt-BR!2sus!4v1526480062805" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </p>
            </div>

        </div>
    </div>  
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script>

    $('.nav-link, .navbar-brand, .link').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 145
            }, 500);
        }

        $(".navbar-collapse").removeClass('show');
    })

</script>