<?php
$dado['channel'] = $channel;
$this->load->view('podcaster/fixed-files/header-footer/header',$dado);

$this->load->view('podcaster/fixed-files/menu/menu-plataforma',$dado);

?>
<div class="container">

	<div class="row detalhes-usuario">
		<div class="col-md-12">
			<div class="col-md-12">
				<h3>Redes Sociais</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet dictum velit. Nam lacinia augue a ligula accumsan egestas et id mi. </p>
				<hr>
				<div class="pull-right">
					<button type="button" data-toggle="modal" data-target="#facebook" class="btn btn-facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i> Configurar Facebook <input type="checkbox"></button>
					<button type="button" data-toggle="modal" data-target="#twitter" class="btn btn-twitter"><i class="fa fa-twitter" aria-hidden="true"></i>  Configurar Twitter <input type="checkbox"></button>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h4>Estatísticas por episódios</h4>



			<table id="exemplo-tabela" class="table" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Episódio</th>
		                <th>Nome Episódio</th>
		                <th><i class="fa fa-facebook-square" aria-hidden="true"></i> Visualizações</th>
		                <th><i class="fa fa-facebook-square" aria-hidden="true"></i> Curtidas</th>
		                <th><i class="fa fa-twitter" aria-hidden="true"></i> Favoritados</th>
		                <th><i class="fa fa-twitter" aria-hidden="true"></i> Retweets</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td>101</td>
		                <td>Set, 8 2016</td>
		                <td>Nome 1</td>
		                <td>61</td>
		                <td>125</td>
		                <td>30</td>
		            </tr>
		            <tr>
		                <td>102</td>
		                <td>Out, 1 2016</td>
		                <td>Nome 2</td>
		                <td>40</td>
		                <td>100</td>
		                <td>50</td>
		            </tr>
		            <tr>
		                <td>103</td>
		                <td>Out, 30 2016</td>
		                <td>Nome 3</td>
		                <td>10</td>
		                <td>20</td>
		                <td>10</td>
		            </tr>
		        </tbody>
		   	</table>

		</div>
	</div>

</div>


<!-- twitter -->
<div class="modal fade" id="twitter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header twitter">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</h4>
      </div>
      <div class="modal-body">
      	<section>
	      	<p>Selecione os itens que deseja adicionar ao post automático de episódios</p>
	      	<p><input type="checkbox"> Adicionar título do episódio</p>
	      	<p><input type="checkbox"> Adicionar descrição do episódio</p>
	      	<p><input type="checkbox"> Adicionar link do post</p>
	      	<p><input type="checkbox"> Adicionar link do narrador</p>
      	</section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-padrao">Alterar</button>
      </div>
    </div>
  </div>
</div>

<!-- facebook -->
<div class="modal fade" id="facebook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header facebook">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</h4>
      </div>
      <div class="modal-body">
      	<section>
	      	<p>Selecione os itens que deseja adicionar ao post automático de episódios</p>
	      	<p><input type="checkbox"> Adicionar título do episódio</p>
	      	<p><input type="checkbox"> Adicionar descrição do episódio</p>
	      	<p><input type="checkbox"> Adicionar link do post</p>
	      	<p><input type="checkbox"> Adicionar link do narrador</p>
      	</section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-padrao">Alterar</button>
      </div>
    </div>
  </div>
</div>


<?php
$this->load->view('podcaster/fixed-files/header-footer/footer',$dado);
?>