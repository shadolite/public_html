<?php
$inputString = $_POST["input6"];
$list = explode(", ", $inputString);
sort($list);

echo count($list);

echo 
"<html>
   <head>
      <title>Week 11 : Problem 6</title>
   </head>
   <body>
      <table>";


echo
	"</table>
   </body>
</html>";
?>