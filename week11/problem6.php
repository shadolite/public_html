<?php
$inputString = $_POST["input6"];
$list = explode(", ", $inputString);
$listCount = count($list);

sort($list);

echo 
"<html>
   <head>
      <title>Week 11 : Problem 6</title>
   </head>
   <body>
      <table>";
	  
for ($item = 0; item < $listCount; $item++){
echo	
		"<tr>
			<td>$list[$item]</td>
		</tr>";
}

echo
	"</table>
   </body>
</html>";
?>