<html>
<head>

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
	
	<link href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	
	<button id="boton">Haga click para crear tabla</button>
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"></table>
	
	<script>
	
	$("#boton").click(function(){
		
		$.ajax({
			
			type 		: 'post' ,
			url  		: 'bdd.php' , 
			dataType 	: 'json' ,
			success 	: function (data) {
				
				$("#example").dataTable({
					"data" : data ,
					"columns" : [
						/*
						 * 
						 * Formato -> parámetro : valor
						 * data : nombre de la clave del array
						 * title : titulo para visualizar en la tabla
						 *
						 */
						{"data" : "lote" , "title" : "Lote"},
						{"data" : "id_provincia" , "title" : "Provincia"},
						{"data" : "registros_insertados" , "title" : "Registros insertados"},
					]
					
				});
				
			}
		})
	
	});
	
	
	</script>
	
</body>
</html>
