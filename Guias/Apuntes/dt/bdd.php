<?php
/*
 * 
 * Cambiar el string de conexión con los valores que correspondan
 * 
 */
$conn = pg_connect ("host= dbname= user= password=");

if ($conn) {
	
	$i 		= 0;
	/*
	 * 
	 * Cambiar la consulta
	 * 
	 */
	$sql 	= "select * from sistema.lotes";
	$res 	= pg_query ($sql);
	
	while ($reg = pg_fetch_assoc ($res)) {
		
		for ($j = 0 ; $j < pg_num_fields ($res) ; $j ++) {
		
			$data[$i][pg_field_name($res , $j)] = $reg[pg_field_name($res , $j)];
		
		}
		
		$i++;
		
	}
	
	die (json_encode ($data));

}

?>
