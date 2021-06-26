<?php namespace Dompdf;
session_start();
	date_default_timezone_set("Asia/Kolkata");
	$DATE = DATE("d / m / Y");

	$TITLE0 = '';
	$TITLE1 = $DATE;
	$NO = 0;
	$pdo0 = $pdo1 = $pdo2 = $pdo3 = $pdo4 = $pdo5 = '';
if (file_exists('PDF.txt')){
	$PDF = file_get_contents('PDF.txt');
	$PDF = json_decode($PDF, true);
if(is_array($PDF)){
	foreach($PDF as $PDFL => $V) {
	foreach($PDF[$PDFL] as $PDFi => $V);
	foreach($PDF[$PDFL] as $PDFN);
	if ($PDFi == 'TITLE') {$TITLE0 = $PDFN[0]; $TITLE1 = $PDFN[1];}
	if ($PDFi == 'SLP') {$NO = $PDFN[0];}}
	$NO = $NO + 1;
}}
if (isset($_POST['PDFTITLE'])) {
	$PDFM = array($_POST['PDFN']=>array($_POST['PDFN']=>array( $_POST['PDFTITLE'] , 	$_POST['PDFDATE'],'','','','')));
if (file_exists('PDF.txt')){
if(is_array($PDF)){
	$PDF = array_merge($PDF,$PDFM);
	$PDF = json_encode($PDF);
	file_put_contents('PDF.txt', $PDF);
}}else{	$PDF = json_encode($PDFM);
	file_put_contents('PDF.txt', $PDF);
}header("location:");}


if (isset($_POST['SAVEPDF'])) {
	$PDFM = array('SL'.$_POST['text0']=>array('SLP'=>array(
	$_POST['text0'],
	$_POST['text1'],
 	$_POST['text2'],
 	$_POST['text3'],
 	$_POST['text4'],
 	$_POST['text5'])));
if (file_exists('PDF.txt')){
if(is_array($PDF)){
	$PDF = array_merge($PDF,$PDFM);
	$PDF = json_encode($PDF);
	file_put_contents('PDF.txt', $PDF);
}}else{	$PDF = json_encode($PDFM);
	file_put_contents('PDF.txt', $PDF);
}	unset($_SESSION['EDIT']);
	header("location:");}
if (isset($_POST['DELL'])) {
if (file_exists('PDF.txt')){
	$DELL = file_get_contents('PDF.txt');
	$DELL = json_decode($DELL, true);
	$text = $_POST['textd'];
	unset($DELL[$text]);
	$DELLJ = json_encode($DELL);
	file_put_contents('PDF.txt', $DELLJ);
}	header("location:");
}
if (isset($_POST['EDIT'])) {
	$textd = $_POST['textd'];
$PDFM = array(
	$_POST['textd'],
	$_POST['textd1'],
 	$_POST['textd2'],
 	$_POST['textd3'],
 	$_POST['textd4'],
 	$_POST['textd5']);
	$_SESSION['EDIT'] = $PDFM;
	header("location:");
}
if (isset($_POST['PDFTITC'])) {
	unlink('PDF.txt');
	header("location:");
}
$Sex = 'Sex';
if (isset($_SESSION['EDIT'])) {
	$PDF = $_SESSION['EDIT'];
	$NO = $PDF[0];
	$pdo1 = $PDF[1];
	$Sex = $PDF[2];
	$pdo3 = $PDF[3];
	$pdo4 = $PDF[4];
	$pdo5 = $PDF[5];
}
if (isset($_GET['style'])) {
header("Content-type: text/css");?>
body {
	margin:0px;
	margin:0px auto;
	width: 1000px;
	height: 100%; 
	float:center;
}.frem{
	margin:0px;
	margin:50px auto;
	width: 920px;
	float:left;
	text-decoration: none;
	color: rgba(0,0,0, 0.6);
	padding: 40px;
	box-shadow: 0px 0px 10px 0px  rgba(0,0,0, 0.1);
	font:normal 12px/20px "Liberation sans", Arial, Helvetica, sans-serif;
}input, select{
	margin:0px;
	width: 100%;
	height:100%;
	float:left;
	color: rgba(0,0,0, 0.6);
	font:normal 12px/20px "Liberation sans", Arial, Helvetica, sans-serif;
	border:0;
}select, [type=submit]{
	padding:1px;
	-webkit-appearance:none;
	-moz-appearance:none;
	text-align:CENTER;
}[type=submit]{
	font:BOLD 12px/20px "Liberation sans", Arial, Helvetica, sans-serif;
	background:rgba(0,0,0, 0.0);
	color: GREEN;

}[name=DELL]{
	color: rgba(255,0,0, 0.7);
}
[type=date]{
	text-align:CENTER;
}ul{
	width: 921px;
	float:left;
	margin:0px;
	padding:0;
	list-style:none;
}li{
	width: 151px;
	MIN-height: 22PX; 
	float:left;
	margin-left:-1px;
	margin-top:-1px;
	padding:5px;
	border: solid 1px rgba(0,0,0, 0.4);
}.sl{
	width: 40px;
	text-align:CENTER;
}.dt{
	width: 100px;
	text-align:CENTER;
}.BT{
	width: 70px;
}.DIP li{
	font:BOLD 12px/20px "Liberation sans", Arial, Helvetica, sans-serif;
}.tex li{
	font:normal 12px/20px "Liberation sans", Arial, Helvetica, sans-serif;
}.title{
	width: 586px;
}.title input{
	font:BOLD 14px/20px "Liberation sans", Arial, Helvetica, sans-serif;
}.nm{
	width: 100px;
}.em{
	width: 202px;
}
<?php }else{if (isset($_GET['PDFS'])) {?>
<?php if(!empty($TITLE0)) {?>
<style>
table{
	width: 100%;
	text-decoration: none;
	padding: 0px;
	font:normal 12px/20px "Liberation sans", Arial, Helvetica, sans-serif;
}
td{
	color: rgba(0,0,0, 0.9);
	padding:0px 5px 2px 5px;
	border: solid 1px #505050;
	font:normal 12px/20px "Liberation sans", Arial, Helvetica, sans-serif;
}
#first td{
	color:#686868;
	padding:0px 0px 10px 0px;
	border: solid 0px rgba(0,0,0, 0.0);
	font:normal 18px/20px "Liberation sans", Arial, Helvetica, sans-serif;
}
#first #one{
	font:normal 12px/20px "Liberation sans", Arial, Helvetica, sans-serif;
}
#dip td{
	color:#FFFFFF;
	background:#686868;
	font:bold 12px/20px "Liberation sans", Arial, Helvetica, sans-serif;
}
</style>
	<table border=0 cellspacing=0 align=center  id=first>
	<tr>
		<td><?=$TITLE0;?></td>
		<td align=right id=one>DATE : <?=$TITLE1;?></td>
	</tr>
	</table>
	<table border=0 cellspacing=0 align=center >
	<tr id=dip>
		<td align=center>SL</td>
		<td>Name</td>
		<td align=center>Sex</td>
		<td align=center>Date of birth</td>
		<td>Email Address</td>
		<td>Mobile No.</td>
	</tr>
<?php
if (file_exists('PDF.txt')){
	$pdos = 0;
if(is_array($PDF)){
	$PDF = file_get_contents('PDF.txt');
	$PDF = json_decode($PDF, true);
	foreach($PDF as $PDFL => $V) {
	foreach($PDF[$PDFL] as $PDFi => $V);
	foreach($PDF[$PDFL] as $PDFS);
	if ($PDFi == 'SLP') {
	$pdos ++;
	$pdo1 = $PDFS[1];
	$pdo2 = $PDFS[2];
	$pdo3 = $PDFS[3];
	$pdo4 = $PDFS[4];
	$pdo5 = $PDFS[5];
?>
	<tr>
		<td align=center><?=$pdos;?></td>
		<td><?=$pdo1;?></td>
		<td align=center><?=$pdo2;?></td>
		<td align=center><?=$pdo3;?></td>
		<td><?=$pdo4;?></td>
		<td><?=$pdo5;?></td>
	</tr>
<?php }}}}?>
	</table>
<?php }?>
<?php }else{
if (isset($_GET['PDF'])) {
require_once 'dompdf/autoload.inc.php';
$dompdf = new Dompdf();
$IS_PDF = file_get_contents('http://localhost/?PDFS');
$dompdf->loadHtml($IS_PDF);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream($TITLE0,array("Attachment" => false));
exit(0);?>
<?php }else{ header("Content-type: text/html");?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?=$TITLE0;?></title>
	<style>@import url("http://localhost/?style");</style>
</head>
<body>
<div class='frem'>
<ul>
	<form method="post" action="">
		<li class='title'><input type="text"  name="PDFTITLE" placeholder="PDF TITLE" value="<?=$TITLE0;?>"></li>
		<li><input type="text"  name="PDFDATE" placeholder="PDF DATE" value="<?=$TITLE1;?>">
		<input type="HIDDEN" name="PDFN" value="TITLE"></li>
		<li class='BT'><input type="submit" name="PDFTITL"   value="SAVE"></li>
	</form>
		<li class='BT'>
			<form method="post" action="">
			<input type="submit" name="PDFTITC" value="CANSEL">
			</form>
		</li>
		<span class='DIP'>
		<li class='sl'>SL No.</li>
		<li>Full Name</li>
		<li class='dt'>Sex</li>
		<li class='dt'>Date of Birth</li>
		<li class='em'>Emale Address</li>
		<li class='nm'>Mobile No.</li>
		<li></li>
</span>
	<form method="post" action="">
		<li class='sl'></li>
		<li><input type="text"  name="text1" placeholder="Full Name" value="<?=$pdo1;?>"></li>
		<li class='dt'><select name="text2">
				<option value="<?=$Sex;?>"><?=$Sex;?></option>
				<option value="Male">Male</option>
				<option value="Femail">Femail</option>
				<option value="Others">Others</option>
		</select></li>
		<li class='dt'><input type="date"  name="text3" placeholder="Date of Birth" value="<?=$pdo3;?>"></li>
		<li class='em'><input type="text"  name="text4" placeholder="Emale Address" value="<?=$pdo4;?>"></li>
		<li class='nm'>
				<input type="tel"  name="text5" placeholder="Mobile No." value="<?=$pdo5;?>">
				<input type="HIDDEN"  name="text0"  value="<?=$NO;?>">
		</li>
		<li><input type="submit" name="SAVEPDF" value="SAVE"></li>
</form>
<?php 
	$pdos = 0;
if (file_exists('PDF.txt')){
if(is_array($PDF)){
	$PDF = file_get_contents('PDF.txt');
	$PDF = json_decode($PDF, true);
	foreach($PDF as $PDFL => $V) {
	foreach($PDF[$PDFL] as $PDFi => $V);
	foreach($PDF[$PDFL] as $PDFS);
	if ($PDFi == 'SLP') {
	$pdos ++;
	$pdo0 = $PDFS[0];
	$pdo1 = $PDFS[1];
	$pdo2 = $PDFS[2];
	$pdo3 = $PDFS[3];
	$pdo4 = $PDFS[4];
	$pdo5 = $PDFS[5];
?>
	<span class='tex'>
		<li class='sl'><?=$pdos;?></li>
		<li><?=$pdo1;?></li>
		<li class='dt'><?=$pdo2;?></li>
		<li class='dt'><?=$pdo3;?></li>
		<li class='em'><?=$pdo4;?></li>
		<li class='nm'><?=$pdo5;?></li>
		<li class='BT'>
			<form method="post" action="">
			<input type="HIDDEN"  name="textd"  value="<?=$PDFL;?>">
			<input type="submit" name="DELL" value="DELETE">
			</form>
		</li>
		<li class='BT'>
			<form method="post" action="">
			<input type="HIDDEN" name="textd1" value="<?=$pdo1;?>">
			<input type="HIDDEN" name="textd2" value="<?=$pdo2;?>">
			<input type="HIDDEN" name="textd3" value="<?=$pdo3;?>">
			<input type="HIDDEN" name="textd4" value="<?=$pdo4;?>">
			<input type="HIDDEN" name="textd5" value="<?=$pdo5;?>">
			<input type="HIDDEN" name="textd"  value="<?=$pdo0;?>">
			<input type="submit" name="EDIT"   value="EDIT">
			</form>
		</li>
<?php }}}}?>
</ul>
</div>
</body></html>
<?php }}}?>

