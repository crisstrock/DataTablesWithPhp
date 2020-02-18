<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prueba</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
	<div class="container">
		<table class="table table-dark" id="tableTrabajadores">
		<thead>
			<tr>
				<th>Id</th>
				<th>Código</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>	
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="	sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			listar();
		});

		var listar = function(){
			var num_column = 0;
			var table = $("#tableTrabajadores").DataTable({
				"ajax":{
					"method":"POST",
					"url":"listar.php"
				},
				"columns":[
					{"data":"id"},
					{"data":"codigo_barras"},
					{"data":"nombre"},
					{"data":"apellido_paterno"},
					{"data":"apellido_materno"},
				]
			});
			$('#tableTrabajadores').on('click','td', function () {
			    var col = $(this).parent().children().index($(this));
			    num_column = col;
			  });
			$('#tableTrabajadores').on('click', 'tr', function () {
				if (num_column <= 5) {
					var data = table.row( this ).data();
					var id = data.codigo_barras;
		        	alert( 'You clicked on '+id+'\'s row' );
				}
		    });
		}
	</script>
</body>
</html>