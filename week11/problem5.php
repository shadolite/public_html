<?php

$x = $_POST["x"];
$n = $_POST["n"];
$outPut = $_POST["x"];

echo 
"<html>
   <head>
      <title>Week 11 : Problem 2</title>
   </head>
   <body>
      <table>
	  <tr>
	  <th>N</th>
	  <th>X<sup>n</sup></th>
	  </tr>";

for ($power = 0; $power < $n; $power++){
	if ($power > 0){
		$outPut = $outPut * $x;
	}
	echo "<tr>
			<td>"$power + 1"</td>
			<td>$outPut</td>
		</tr>";
}

echo
	  "</table>
   </body>
</html>";
?>