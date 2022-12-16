<?php
$dbname="pi352gob";
$usuario=" ";
$password=" ";
if(!($id=mysqli_connect("localhost","root"))){
	echo "Não foi possivel estabelecer uma conecção com o gerenciador MySQL.";
	exit;
}
if(!($con=mysqli_select_db($id,$dbname))){
	echo "Não foi possivel estabelecer uma conecção com o gerenciador MySQL2.";
	exit;
}
?>