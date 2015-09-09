<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Autocompletar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">	
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>


	<script type="text/javascript">
		$(function (){
			$('#buscar_usuario').autocomplete({
				source : ['Jose','Luis','Maria']
			});
		});
	</script>

</head>
<body>


<div id="busqueda">
	<input type="text" id="buscar_usuario" name="buscar_usuarios" />
</div>

<div id="resultados">
	
</div>







<nav class="navbar navbar-default">
				<div class="row">
				  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" id="buscador">

				    <div class="input-group">
				      <input type="text" class="form-control" placeholder="Inserte su búsqueda..." id="">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button">Buscar</button>
				      </span>
				    </div>

				  </div>
				</div>
		</nav>



		<style>
			nav #buscador {
				padding: 10px;
				margin: 10px;
				margin-top: 05px;
				float: right;
			}

			nav .ui-autocomplete {
				margin-top: 27px;
			}
		</style>




</body>
</html>