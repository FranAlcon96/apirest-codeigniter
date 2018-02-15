<!DOCTYPE html>
<html>
<head>
	<title>Saludo</title>
	<meta charset="utf-8">
</head>
<body>
<table border="1">
<tr>
	<th>Nombre</th>
	<th>Password</th>
</tr>
	
<?php 

foreach($users as $u){
	echo "<tr> <td>".$u->nombre."</td><td>".$u->pass."</td>";

	echo "</tr>";
}

?>
</table>
</body>
</html>