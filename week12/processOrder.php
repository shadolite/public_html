<?php

$toolsQty = $_POST["toolQty"];
$toolsTtl = $toolsQty * 100;

$dieQty = $_POST["dieQty"];
$dieTtl = $dieQty * 500;

$weaponQty = $_POST["weaponQty"];
$weaponTtl = $weaponQty * 200;

$engravingQty = $_POST["engravingQty"];
$engravingTtl = $engravingQty * 50;

$signQty = $_POST["signQty"];
$signTtl = $signQty * 300;

$tax = $_POST["taxAmt"];
$shipping = $_POST["shipAmt"];
$total = $_POST["totalAmt"];

$name = $_POST["customerName"];
$phone = $_POST["phone"];
$email = $_POST["emailAddress"];

$street = $_POST["street"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];

$ccNum = $_POST["ccNum"];
$exp = date("F Y", $_POST["expDate"]);

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
  <div class=\"mainContent\">
    <form action=\"cancelConfirm.php\" method=\"post\" >
      <table id=\"orderSummary\">
        <thead>
          <tr>
            <th>Order Summary</th>
          </tr>
		  <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
		  <tr id=\"tools\">
            <td>Tools</td>
            <td>$toolsQty</td>
            <td>$$toolsTtl</td>
          </tr>
          <tr id=\"dies\">
            <td>Dies</td>
            <td>$dieQty</td>
            <td>$$dieTtl</td>
          </tr>
          <tr id=\"weapons\">
            <td>Weapons</td>
            <td>$weaponQty</td>
            <td>$$weaponTtl</td>
          </tr>
          <tr id=\"engravings\">
            <td>Engravings</td>
            <td>$engravingQty</td>
            <td>$$engravingTtl</td>
          </tr>
          <tr id=\"signs\">
            <td>Signs</td>
            <td>$signQty</td>
            <td>$$signTtl</td>
          </tr>
		</tbody>
      </table>
	  <br />
	  <table>
        <thead>
          <tr id=\"tax\">
            <th>Tax 7%</th>
            <th>$tax</th>
          </tr>
          <tr id=\"shipping\">
            <th>Shipping</th>
            <th>$shipping</th>
          </tr>
          <tr id=\"total\">
            <th>Total</th>
            <th>$total</th>
          </tr>
        </thead>
      </table>
	  <br />
      <div id=\"contactInfo\">
        <h4>Contact Information:</h4>
		<span>$name</span>
		<br />
		<span>$phone</span>
		<br />
		<span>$email</span>
      </div>
      <div id=\"address\">
        <h4>Billing/Shipping Address</h4>
		<span>$street</span>
		<br />
		<span>$city, $state $zip</span>
      </div>
      <div id=\"paymentInfo\">
        <h4>Payment Information</h4>
        <span>Card Number: $ccNum</span>
        <span>Exp: $exp</span>
      </div>
	  <br />
      <input type=\"submit\" name=\"submit\" value=\"Cancel\" />
      <input type=\"submit\" name=\"submit\" value=\"Confirm\" />
    </form>
  </div>
  <footer>Copyright &copy; Kenith Wayne Chambers</footer>
</body>
</html>";
?>