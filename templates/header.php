<div class="bg-success p-1 w-100 p-fixed top-0 z-1"></div>

<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark-opacity fixed-top shadow">

  <div class="container-fluid mt-2">

    <a class="navbar-brand" href="index.php">
      <img src="images/logo-contorno.png" width="150">
    </a>
    
    <button class="navbar-toggler leftNavbarToggler outline-0" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index.php" class="<?php if($_SERVER['REQUEST_URI'] == "/index.php"){?> rounded-0 border-bottom border-success <?php } ?> btn-secondary nav-link font-raleway weight-400 ls-05 fs-17" href="#top">
                  Home
                </a>
            </li>
            <hr class="d-md-none mt-2 mb-2 w-100" />
            <li class="nav-item">
                <a href="empresa.php" class="<?php if($_SERVER['REQUEST_URI'] == "/empresa.php"){?> rounded-0 border-bottom border-success <?php } ?> btn-secondary nav-link font-raleway weight-400 ls-05 fs-17" href="#about-us">
                  A Empresa
                </a>
            </li>
            <hr class="d-md-none mt-2 mb-2 w-100" />
            
            <li class="nav-item dropdown">
              <a href="#" class="dropdown-toggle nav-link dropdown-toggle <?php if($_SERVER['REQUEST_URI'] == "/servicos.php" || $_SERVER['REQUEST_URI'] == "/servico_planodeurgenciasmedicas.php" || $_SERVER['REQUEST_URI'] == "/servico_programaprevencao.php" || $_SERVER['REQUEST_URI'] == "/servico_saudeeseguranca.php" || $_SERVER['REQUEST_URI'] == "/servico_saude.php" || $_SERVER['REQUEST_URI'] == "/servico_seguranca.php") { ?> rounded-0 border-bottom border-success <?php } ?>">
                Serviços
              </a>
              <div class="dropdown-menu bg-dark-opacity" aria-labelledby="dropdownMenuButton">
                <div class="dropdown btn-group dropright">
                    <a class="text-white dropdown-item dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown">
                      Medicina Escolar
                    </a>
                    <div class="dropdown-menu bg-dark-opacity">
                      <a class="dropdown-item text-white" href="servico_mediconaescola.php">Médico na Escola</a>
                      <a class="dropdown-item text-white" href="servico_planodeurgenciasmedicas.php">Urgências Médicas</a>
                      <a class="dropdown-item text-white" href="servico_programaprevencao.php">Prevenção Médica</a>
                    </div>
                </div>
                <div class="dropdown btn-group dropright">
                    <a class="text-white dropdown-item dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown">
                      Medicina do Trabalho
                    </a>
                    <div class="dropdown-menu bg-dark-opacity">
                      <a class="dropdown-item text-white" href="servico_seguranca.php">Segurança na Empresa</a>
                      <a class="dropdown-item text-white" href="servico_saude.php">Saúde na Empresa</a>
                      <a class="dropdown-item text-white" href="servico_saudeeseguranca.php">Saúde e Segurança</a>
                    </div>
                </div>
              </div>
            </li>

            <!--
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if($_SERVER['REQUEST_URI'] == "/servicos.php" || $_SERVER['REQUEST_URI'] == "/servico_planodeurgenciasmedicas.php" || $_SERVER['REQUEST_URI'] == "/servico_programaprevencao.php" || $_SERVER['REQUEST_URI'] == "/servico_saudeeseguranca.php" || $_SERVER['REQUEST_URI'] == "/servico_saude.php" || $_SERVER['REQUEST_URI'] == "/servico_seguranca.php") { ?> rounded-0 border-bottom border-success <?php } ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Serviços
                </a>
                <div class="dropdown-menu bg-dark-opacity" aria-labelledby="navbarDropdownMenuLink">
                  <a class="fs-14 font-raleway weight-500 ls-05 dropdown-item text-white" href="servico_planodeurgenciasmedicas.php">
                      Plano de Urgências Médicas
                  </a>
                  <a class="fs-14 font-raleway weight-500 ls-05 dropdown-item text-white" href="servico_programaprevencao.php">
                      Programa de Prevenção Médica
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="fs-14 font-raleway weight-500 font-raleway weight-500 ls-05 dropdown-item text-white" href="servico_mediconaescola.php">
                     Medicina Escolar
                  </a>

                  <a class="fs-14 font-raleway weight-500 font-raleway weight-500 ls-05 dropdown-item text-white" href="servico_saude.php">
                     Saúde na Empresa
                  </a>
                  <a class="fs-14 font-raleway weight-500 font-raleway weight-500 ls-05 dropdown-item text-white" href="servico_seguranca.php">
                     Segurança na Empresa
                  </a>
                  <a class="fs-14 font-raleway weight-500 font-raleway weight-500 ls-05 dropdown-item text-white" href="servico_saudeeseguranca.php">
                     Saúde e Segurança
                  </a>

                </div>
            </li>
            -->

            <hr class="d-md-none mt-2 mb-2 w-100" />
            <li class="nav-item">
                <a href="urmesexpress.php" class="<?php if($_SERVER['REQUEST_URI'] == "/urmesexpress.php"){?> rounded-0 border-bottom border-success <?php } ?> btn-secondary nav-link font-raleway weight-400 ls-05 fs-17" href="#">
                  Urmes Express
                </a>
            </li>
            <hr class="d-md-none mt-2 mb-2 w-100" />
            <li class="nav-item">
                <a href="localizacao.php" class="<?php if($_SERVER['REQUEST_URI'] == "/localizacao.php"){?> rounded-0 border-bottom border-success <?php } ?> btn-secondary nav-link font-raleway weight-400 ls-05 fs-17" href="#contact">
                  Localização
                </a>
            </li>
            <hr class="d-md-none mt-2 mb-2 w-100" />
            <li class="nav-item">
                <a href="contato.php" class="<?php if($_SERVER['REQUEST_URI'] == "/contato.php"){?> rounded-0 border-bottom border-success <?php } ?> btn-secondary nav-link font-raleway weight-400 ls-05 fs-17" href="#letstalk">
                  Contato
                </a>
            </li>
        </ul>
    </div>

  </div> 
</nav>