<html>
<head>
<title>Email Replay</title>
</head>

<body style=’background:#f5f5f5;’>
<table align=’center’ width=’700px’ height=’650′ height=’600′ cellpadding=’0′ cellspacing=’1′ bgcolor=’#FFFFFF’ border=’0′ style=’font-family:Verdana, Geneva, sans-serif;’>
<tr height=’150′>
<td colspan=’2′><img src=’https://septiyo.com/bikinweb/header-email.jpg’></td>
</tr>
<tr height=’100′>
<td valign=’top’ colspan=’2′><h2 style=’font-family:Verdana, Geneva, sans-serif;font-size:20px;’>Terima Kasih Telah Menghubungi bikinweb.septiyo.com</h2>
<?php

if(isset($_POST[SEND]))
{
print_r($_POST);

$to = $_POST[agunggaming2121@gmail.com];
$subjek = $_POST[SUBJEK];
$pesan = $_POST[PESAN];

$message = ”
<html>
<head>
<title>Email Replay</title>
</head>

<body style=’background:#f5f5f5;’>
<table align=’center’ width=’700px’ height=’650′ height=’600′ cellpadding=’0′ cellspacing=’1′ bgcolor=’#FFFFFF’ border=’0′ style=’font-family:Verdana