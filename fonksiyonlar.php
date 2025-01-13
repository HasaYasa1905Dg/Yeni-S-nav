<?php 

	function sifrele($sifre)
	{
		return crc32(sha1(md5($sifre)));
	}

	function buyukharf($metin)
	{
		$metin = str_replace("ı","I",$metin);
		$metin = str_replace("i","İ",$metin);
		$metin = mb_strtoupper($metin,'utf8');
		return $metin;
	}


?>
