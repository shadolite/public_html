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
            <th>Price</th>
          </tr>
        </thead>
        <tbody>";

if ($toolsQty > 0){
echo
          "<tr id=\"tools\">
            <td>Tools</td>
            <td><input class=\"hidden\" value=\"$toolsQty\" />$toolsQty</td>
            <td class=\"productPrice\">$$toolsTtl</td>
          </tr>"
};

?>