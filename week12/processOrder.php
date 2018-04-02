<?php

$toolsQty = $_POST["toolQty"];
$dieQty = $_POST["dieQty"];
$weaponQty = $_POST["weaponQty"];
$engravingQty = $_POST["engravingQty"];
$signQty = $_POST["signQty"];
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
$exp = $_POST["expDate"];

echo 
"<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>Review Order</title>
  <link href='../week12confirmStyle.css' rel='stylesheet'>
</head>
<body onload=\"disableButton('submitCustomerInfo')\">
  <header>
    <h1>KWC Craftsmanship</h1>
    <h3>Products and Designs with Innovations.</h3>
    <nav>
      <ul class=\"navigation\">
        <li><a href=\"home.html\">Home</a></li>
        <li><a href=\"about.html\">About</a></li>
        <li class=\"active\"><a href=\"gallery.html\">Gallery</a></li>
        <li><a href=\"#\">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div class=\"mainContent\">
    <form action=\"\">
      <table id=\"orderSummary\">
        <thead>
          <tr>
            <th>Order Summary</th>
          </tr>";

echo
          "<tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price Per Each</th>
          </tr>
        </thead>
        <tbody>
          <tr id=\"tools\">
            <td>Tools</td>
            <td><input class=\"hidden\" value=\"$toolsQty\" />$toolsQty</td>
            <td class=\"productPrice\">$100</td>
          </tr>
          <tr id=\"dies\">
            <td>Dies</td>
            <td><input class=\"hidden\" /></td>
            <td class=\"productPrice\">$500</td>
          </tr>
          <tr id=\"weapons\">
            <td>Weapons</td>
            <td><input class=\"hidden\" /></td>
            <td class=\"productPrice\">$200</td>
          </tr>
          <tr id=\"engraving\">
            <td>Engravings</td>
            <td><input class=\"hidden\" /></td>
            <td class=\"productPrice\">$50</td>
          </tr>
          <tr id=\"signBoards\">
            <td>Signs</td>
            <td><input class=\"hidden\" /></td>
            <td class=\"productPrice\">$300</td>
          </tr>"

echo
        "</tbody>
        <tfoot>
          <tr id=\"tax\">
            <td class=\"item\">Tax 7%</td>
            <td class=\"amount\"><input class=\"hidden\" name=\"tax\" /></td>
          </tr>
          <tr id=\"shipping\">
            <td class=\"item\">Shipping</td>
            <td class=\"amount\"><input class=\"hidden\" name=\"shipping\" /></td>
          </tr>
          <tr id=\"total\">
            <td class=\"item\">Total</td>
            <td class=\"amount\"><input class=\"hidden\" name=\"total\" /></td>
          </tr>
        </tfoot>
      </table>
      <div id=\"contactInfo\">
        Contact Information:
        <input class=\"hidden\" type=\"text\" id=\"customerName\" name=\"customerName\" />
        <input class=\"hidden\" type=\"text\" id=\"phone\" name=\"phone\" /><br />
        <input class=\"hidden\" type=\"text\" id=\"emailAddress\" name=\"emailAddress\" /><br />
      </div>
      <div id=\"address\">
        Billing/Shipping Address
        <input class=\"hidden\" type=\"text\" id=\"street\" name=\"street\" /><br />
        <input class=\"hidden\" type=\"text\" id=\"city\" name=\"city\" />
        <input class=\"hidden\" type=\"text\" id=\"state\" name=\"state\" />
        <input class=\"hidden\" type=\"text\" id=\"zip\" name=\"zip\" /><br />
      </div>
      <div id=\"paymentInfo\">
        Payment Information<br />
        Card Number:
        Exp:
        <input class=\"hidden\" type=\"text\" id=\"ccNum\" name=\"ccNum\" />
        <input class=\"hidden\" type=\"text\" id=\"expDate\" name=\"expDate\" />
      </div>
      <input type=\"button\" value=\"Cancel\" />
      <input type=\"button\" value=\"Confirm\" />
    </form>
  </div>
  <footer>Copyright &copy; Kenith Wayne Chambers</footer>
</body>
</html>";
?>