<?php
$dado['channel'] = $channel;
$this->load->view('podcaster/fixed-files/header-footer/header',$dado);

$this->load->view('podcaster/fixed-files/menu/menu-plataforma',$dado);

?>
<div class="container">

	<div class="row destaque">
		<div class="col-md-12">
			<h3>Bem vindo as estatísticas do <?php echo $channel;?></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet dictum velit. Nam lacinia augue a ligula accumsan egestas et id mi. Aenean dictum nibh vitae ligula blandit dignissim. Integer ut faucibus mauris, nec pharetra erat. Nam id scelerisque ante, et pulvinar felis. Proin a metus dolor. Sed quis augue non ipsum vehicula blandit quis at eros.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h4>Estatísticas por episódios</h4>

			<table id="exemplo-tabela" class="table" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Episódio</th>
		                <th>Data</th>
		                <th>Nome do Episódio</th>
		                <th>Downloads</th>
		                <th>Visualizações</th>
		                <th>Comentários</th>
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


<?php
$this->load->view('podcaster/fixed-files/header-footer/footer',$dado);


?>