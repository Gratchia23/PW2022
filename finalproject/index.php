<?php 
 
session_start(); 
 
if (!isset($_SESSION['username'])) { 
    header("Location: login.php"); 
} 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Website Dream Shop </title>
    <link rel="stylesheet" href="css/styleDS.css" type="text/css"/>
</head>
<body>
    <div class="header">
        <div class="navbar">
            <ul>
                <li><a href=" "> Dream Store </a><li>
                <li><a href=" "> || </a><li>
                <li><td><a class="tombol tombol-lengkap" href="abousus/About Us.html">About Us</li></a></td>
                <li><td><a class="tombol tombol-lengkap" href="contactus/Contact Us.html">Contact Us</li></a></td>
                <li><td><a class="tombol tombol-lengkap" href="logout.php">Logout</li></a></td>
            </ul>          
        </div>
    <div p align="center">
        <p valign="top"><img src="img/header.jpeg" width="100%" height="10%"></p>
        <h1> Order Now!! </h1>
    </div>
    <div class="gambar">
    <div class="foto">
        <img src="img/pict1.jpg">
        <h1>Photobook Glitch Mode</h1>
        <p><h2>Rp.320.000</h2></p>
        <p><h3><s>Rp.400.000</s><td><font color="red"> (20%) </font></td></h3></p>
        <br><a class="tombol tombol-lengkap" href="orderfrom/Order Form1.html">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><a class="tombol tombol-lengkap" href="detailorder/Detail Order1.html">Detail</a></td>
        
    </div>
    <div class="foto">
        <img src="img/pict2.jpg">
        <h1>Digipack Glitch Mode</h1>
        <p><h2>Rp.160.000</h2></p>
        <p><h3><s>Rp.200.000</s><td><font color="red"> (20%) </font></td></h3></p>
        <br><a class="tombol tombol-lengkap" href="orderfrom/Order Form2.html">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><a class="tombol tombol-lengkap" href="detailorder/Detail Order2.html">Detail</a></td>
    </div>
    <div class="foto">
        <img src="img/pict3.jpg">
        <h1>Kihno Hello Future</h1>
        <p><h2>Rp.200.000</h2></p>
        <p><h3><s>Rp.250.000</s><td><font color="red"> (20%) </font></td></h3></p>
        <br><a class="tombol tombol-lengkap" href="orderfrom/Order Form3.html">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><a class="tombol tombol-lengkap" href="detailorder/Detail Order3.html">Detail</a></td>
    </div>
    <div class="foto">
        <img src="img/pict4.jpg">
        <h1>Season's Greeting 2022</h1>
        <p><h2>Rp.720.000</h2></p>
        <p><h3><s>Rp.800.000</s><td><font color="red"> (10%) </font></td></h3></p>
        <br><a class="tombol tombol-lengkap" href="orderfrom/Order Form.html">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><a class="tombol tombol-lengkap" href="detailorder/Detail Order4.html">Detail</a></td>
    </div>
    <div class="foto">
        <img src="img/pict5.jpg">
        <h1>Lightstick</h1>
        <p><h2>Rp.700.000</h2></p>
        <p><h3><s>Rp.800.000</s><td><font color="red"> (15%) </font></td></h3></p>
        <br><a class="tombol tombol-lengkap" href="orderfrom/Order Form.html">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><a class="tombol tombol-lengkap" href="detailorder/Detail Order5.html">Detail</a></td>
    </div>
</div>
<div class="footer">
    <p>Thank You For Order - <a href=" "> Dream Store - B-7 </a> </p>
</div>
</body>
</html>