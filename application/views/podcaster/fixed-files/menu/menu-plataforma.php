<?php
$this->load->helper('url');

?>
<nav class="nav-plataforma">
  <div class="container">
    <div id="navbar-plataforma" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a <?php if($page == 'estatisticas'): echo 'class="active"';  endif;?> href="<?php echo base_url('channel/estatisticas');?>"><i class="fa fa-line-chart" aria-hidden="true"></i> Estatisticas</a></li>
          <li><a <?php if($page == 'meu-podcast'): echo 'class="active"';  endif;?> href="<?php echo base_url('channel/meu-podcast');?>"><i class="fa fa-podcast" aria-hidden="true"></i> Meu Podcast</a></li>
          <li><a <?php if($page == 'redes-sociais'): echo 'class="active"';  endif;?> href="<?php echo base_url('channel/redes-sociais');?>"><i class="fa fa-share-alt" aria-hidden="true"></i> Redes Sociais</a></li>
          <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> Chat</a></li>
          <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
        </ul>
      </div>
  </div>
</nav>