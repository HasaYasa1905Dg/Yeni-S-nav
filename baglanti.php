<?php
try {
	$vt = new PDO('mysql:host=localhost;dbname=medikal;charset=utf8', "root", "");
} 
catch (Exception $e) {
	echo "Veritabanına bağlanılamadı";
}

?>
