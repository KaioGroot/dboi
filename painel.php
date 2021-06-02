
<?php
session_start();
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2><a href="logout.php">Sair</a></h2>



<html>
	<head>
		<title>Menu Horizontal</title>
		<meta charset="UTF-8" />

		
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<!-- Exemplo de menu com sub-menus feitos com HTML e CSS -->
		<!-- Desenvolvido por Jefferson Jamess do site falafera.com -->
		<!-- Dúvidas? Entre no canal: http://youtube.com/falafera -->
		<nav class="menu">
		<ul>
				<li><a href="#">Inicio</a></li>
			
			
			    	<li><a href="#">Informações</a>
					<ul>
						<li><a href="#">Sobre nós</a>
						<ul>
							<li><a href="#">Somos um equipe</a></li>
							<li><a href="#">Desenvolvendo</a></li>
							<li><a href="#">Um Server</a></li>
							<li><a href="#">chamado</a></li>
							<li><a href="#">Dragon ball online</a></li>
							<li><a href="#">Infinity.</a></li>
						</ul>							
						</li>
						<li><a href="#">Eventos</a>
							<ul>
								<li><a href="#">24H</a></li>
								<li><a href="#">Esfera</a></li>
							</ul>
						</li>
						<li><a href="#">Centro-Oeste</a>
							<ul>
								<li><a href="#">Mato Grosso</a></li>
								<li><a href="#">Mato Grosso do Sul</a></li>
								<li><a href="#">Rio de Janeiro</a></li>
								<li><a href="#">São Paulo</a></li>
							</ul>



					</li>
						<li><a href="#">Sudeste</a>
							<ul>
								<li><a href="#">Minas Gerais</a></li>
								<li><a href="#">Espirito Santo</a></li>
								<li><a href="#">Brasilia</a></li>
								<li><a href="#">Goiãnia</a></li>
							</ul>
						</li>
						<li><a href="#">Sul</a>
						<ul>
							<li><a href="#">Curitiba</a></li>
							<li><a href="#">Porto Alegre</a></li>
							<li><a href="#">Blumenau</a></li>
							<li><a href="#">Londrina</a></li>
						</ul>
						</li>
					</ul>
				</li>

				<li><a href="#">Download</a></li>

				<li><a href="#">Paraguai</a>
			
				
				</li>
				<img class="foto" src="https://nulaia.com.br/principal/img/login.png" width="44" alt="">
			
				<a class="entrar" href=""><?php echo $_SESSION['nome'];?></a>

			</li>
			</ul>
		<br>
		</nav>
	<div>
	<style>
			#chartdiv {
			  width: 150%;
			  height: 500px;
		  background-color: rgb(243, 243, 243);
			}
			
			</style>
			
			<!-- Resources -->
			<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
			<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
			<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
			
			<!-- Chart code -->
			<script>
			am4core.ready(function() {
			
			// Themes begin
			am4core.useTheme(am4themes_animated);
			// Themes end
			
			var chart = am4core.create("chartdiv", am4charts.PieChart3D);
			chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
			
			chart.legend = new am4charts.Legend();
			
			chart.data = [
			  {
				country: "Downloads",
				litres: 1
			  },
			  {
				country: "Players",
				litres: 1
			  },
			  {
				country: "Classes",
				litres: 1
			  },
			  {
				country: "ADMS",
				litres: 1
			  },
			  {
				country: "GMS",
				litres: 1
			  },
			  {
				country: "Austria",
				litres: 1
			  },
			  {
				country: "UK",
				litres: 1
			  },
			  {
				country: "Belgium",
				litres: 1
			  },
			  {
				country: "The Netherlands",
				litres: 1
			  }
			];
			
			var series = chart.series.push(new am4charts.PieSeries3D());
			series.dataFields.value = "litres";
			series.dataFields.category = "country";
			
			}); // end am4core.ready()
			</script>
			
			<!-- HTML -->
			<div id="chartdiv"></div>	
	
	
		</div>
	
<?php

if(isset($_POST['acao'])){
    //formulário foi enviado!
$arquivo = $_FILES['file'];

$arquivoNovo = explode('.',$arquivo['name']);

if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg'){
   die('voce não pode fazer upload deste tipo de arquivo');
}else{
    echo'Upload foi feito com sucesso!';
move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
}
     
}
    ?>


	<form action="" method="post" enctype="multipart/form-data" />
	 <input type="file" name="file" />
     <input type="submit" name="acao" value="Enviar /">
	</body>
</html>