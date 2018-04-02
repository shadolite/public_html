<?php
echo 
"<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>Review Order</title>
  <link href='../week12confirmStyle.css' rel='stylesheet'>
</head>
<body>
  <header>
    <h1>KWC Craftsmanship</h1>
    <h3>Products and Designs with Innovations.</h3>
    <nav>
      <ul class=\"navigation\">
        <li><a href=\"home.html\">Home</a></li>
        <li><a href=\"about.html\">About</a></li>
        <li class=\"active\"><a href=\"gallery.html\">Gallery</a></li>
        <li><a href=\"\">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div class=\"mainContent\">";

if ($_POST['submitButton'] == "Cancel"){
echo
"<span>Your order has been canceled.</span>";
}
else {
echo
"<span>Thank you for your order. You will recieve a receipt via email.</span>";	
}
   
 echo  
  "</div>
  <footer>Copyright &copy; Kenith Wayne Chambers</footer>
</body>
</html>";
?>