<?php
$countToTwenty = array("one"=>"uno", "two"=>"dos", "three"=>"tres", "four"=>"quatro", "five"=>"cinco", 
"six"=>"seis", "seven"=>"siete", "eight"=>"ocho", "nine"=>"nueve", "ten"=>"dies", 
"eleven"=>"dies y uno", "twelve"=>"dies y dos", "thirteen"=>"dies y tres", "fourteen"=>"dies y quatro", "fifteen"=>"dies y cinco", 
"sixteen"=>"dies y seis", "seventeen"=>"dies y siete", "eighteen"=>"dies y ocho", "nineteen"=>"dies y nueve", "twenty"=>"veinte");

echo 
"<html>
   <head>
      <title>Week 11 : Problem 4</title>
   </head>
   <body>";

if(!array_key_exists($_POST["input4"], $countToTwenty)) {
echo "<p>The English cardinal \"" . $_POST["input4"] . "\" is not between \"one\" and \"twenty\".</p>";
}
else {
echo "<p>The word \"" . $_POST["input4"] . "\" in Spanish is \"". $countToTwenty[$_POST["input4"]] ."\".</p>";
}

echo  
   "</body>
</html>";
?>