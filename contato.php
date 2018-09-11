<?php session_start(); // Isto é para o retorno de Success do envio do Email. ?>

<!doctype html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cookie:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round:200,300,400,500,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/app.css">

    <link rel="shortcut icon" href="images/fav.png">

    <meta name="description" content="A URMES - Urgências Médico Escolares atua desde 1974, diretamente em creches e escolas do Rio de Janeiro, responsabilizando-se por seu atendimento médico preventivo e de urgência.">
    <meta name="keywords" content="URMES, urgências médico escolares, urgencia medico escolar">
    <meta name="author" content="DMX WEB SOLUTIONS">
    <meta name="robots" content="index, follow">

    <link href="http://urmes.com.br/contato.php" rel="canonical">

    <title>URMES - Fale Conosco</title>

</head>
<body>

    <?php include 'templates/header.php'; ?>

    <img src="images/jumbontrons/contato.png" class="img-fluid mt--33 mt-xs-65px">

    <div class="p-4"></div>

    <main>

        <div class="container">

            <div class="col-md-8 offset-md-2 text-59 fs-17 font-raleway weight-500" id="content">

                <p>
                    Faça contato conosco. Tire dúvidas, esclareça itens ou solicite mais informações a respeito do assunto de seu interesse. Teremos imenso prazer em fazer uma visita a sua empresa para conversamos a respeito dos diferenciais URMES que, há mais de 40 anos vêm agregando valor aos negócios de seus clientes. A marca que assume um posicionamento ímpar e sem comparação no mercado.   
                </p>

            </div>

            <div align="center">
                <h1 class="mb-0 font-cookie weight-500">Contato</h1>
                <img src="images/giz-title.png" class="mt--33 ml-4" style="width: 150px;">
            </div>

            <div class="col-md-8 offset-md-2 text-59 fs-17 font-raleway weight-500">

                <form method="POST" action="processar_contato.php">

                    <?php
                        if(isset($_SESSION['status'])){
                            echo $_SESSION['status'];
                            unset($_SESSION['status']);
                        }
                    ?>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 text-md-right mt-md-2 mb-0">
                            <span class="bg-success p-2 text-white">Nome</span>
                        </label>

                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" name="name" required placeholder="Digite seu nome">
                       </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-2 text-md-right mt-md-2 mb-0">
                            <span class="bg-success p-2 text-white">Email</span>
                        </label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control" name="email" required placeholder="Digite seu email">
                       </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefone" class="col-md-2 text-md-right mt-md-2 mb-0">
                            <span class="bg-success p-2 text-white">Telefone</span>
                        </label>

                        <div class="col-md-8">
                            <input id="telefone" type="text" class="form-control" name="telefone" required placeholder="Digite seu telefone">
                       </div>
                    </div>
                    <div class="form-group row">
                        <label for="assunto" class="col-md-2 text-md-right mt-md-2 mb-0">
                            <span class="bg-success p-2 text-white">Assunto</span>
                        </label>

                        <div class="col-md-8">
                            <input id="assunto" type="text" class="form-control" name="assunto" required placeholder="Digite seu assunto">
                       </div>
                    </div>
                    <div class="form-group row">
                        <label for="mensagem" class="col-md-2 text-md-right mt-md-2 mb-0">
                            <span class="bg-success p-2 text-white">Mensagem</span>
                        </label>

                        <div class="col-md-8">
                            <textarea id="mensagem" class="form-control h-min-125" name="mensagem" required placeholder="Digite sua mensagem"></textarea>
                       </div>
                    </div>

                    <div class="form-group row offset-md-2">
                        <button type="submit" class="font-raleway bg-base border-0 weight-600 ls-05 btn btn-success ml-md-1 ml-3" name="btnEnvia" value="btnEnvia">Enviar</button>
                    </div>

                </form>

                <div align="center" class="mt-5">
                    <a href="contato_escolar.php#content" class="mb-3 mb-md-0 btn btn-success bg-base border-0">
                        <span class="rounded">Medicina Escolar</span>
                    </a>
                    <a href="contato_trabalho.php#content" class="mb-3 mb-md-0 btn btn-success bg-base border-0">
                        <span class="rounded">Medicina do Trabalho</span>
                    </a>
                </div>

            </div>

        </div>

    </main>

    <?php include 'templates/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
    <script>
    $(document).ready(function () { 
        $("#telefone").mask('(00) 0000-0000');
    });   
    </script>

</body>
</html>