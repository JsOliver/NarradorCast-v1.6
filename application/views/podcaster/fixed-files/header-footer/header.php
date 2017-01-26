<?php
echo $this->head_ud->head(2);
?>
  <body>
    <header>
      <nav class="navbar nav-usuario">
        <div class="container">

          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('channel'.$channel);?>">
              <img alt="Narrador Cast" src="<?php echo base_url('assets/templates/podcaster/images/logo.png');?>">
            </a>
          </div>

          <div id="navbar-usuario" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="#">
                  <i class="fa fa-bell fa-inverse" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#">
                    <i class="fa fa-arrow-up fa-inverse" aria-hidden="true"></i>
                    <i class="fa fa-arrow-down fa-inverse" aria-hidden="true"></i>
                </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <img src="https://dummyimage.com/20x20/fff/000&text=user" class="img-circle">
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Ir para Multipodcasts</a></li>
                   <li role="separator" class="divider"></li>
                  <li><a href="#">Configurações do usuário</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Sair</a></li>
                </ul>
              </li>
            </ul>
          </div>

        </div>
      </nav>

    </header>