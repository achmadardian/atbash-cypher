<!DOCTYPE html>
<html>
<head>
	<title>Atbash Chiper</title>
	<link rel="shortcut icon" href="img/icon.ico">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<div class="main1">
			<h1>Atbash Chiper Key</h1>
			<br>
			<p>Plain Text</p>
			<form action="ardian.php" method="get">
				<input class="in-enkr" placeholder="Masukkan Plain Text" value="<?php
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					$string = $_GET['dekripsi'];
					$trans = array("A" => "Z", "Z" => "A", "B" => "Y" ,"Y" => "B", "C" => "X", "X" => "C", "D" => "W", "W" => "D", "E" => "V", "V" => "E", "F" => "U", "U" => "F", "G" => "T", "T" => "G", "H" => "S", "S" => "H", "I" => "R", "R" => "I", "J" => "Q", "Q" => "J", "K" => "P", "P" => "K", "L" => "O", "O" => "L", "M" => "N", "N" => "M","a" => "z", "z" => "a", "b" => "y" ,"y" => "b", "c" => "x", "x" => "c", "d" => "w", "w" => "d", "e" => "v", "v" => "e", "f" => "u", "u" => "f", "g" => "t", "t" => "g", "h" => "s", "s" => "h", "i" => "r", "r" => "i", "j" => "q", "q" => "j", "k" => "p", "p" => "k", "l" => "o", "o" => "l", "m" => "n", "n" => "m");
						echo  $result = strtr($string,$trans);?>" name="enkripsi"></input>
				<button type="submit" value="Enkripsi" class="enk">
					<span>ENKRIPSI</span>
				</button>
			</form>
		</div>
		<div class="main2">
			<p>Chiper Text</p>
			<form  action="ardian.php#atbash" method="get">
				<input class="form-control no-resize" placeholder="Hasil Chiper Text" value="<?php
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					$string = $_GET['enkripsi'];
					$trans = array("A" => "Z", "Z" => "A", "B" => "Y" ,"Y" => "B", "C" => "X", "X" => "C", "D" => "W", "W" => "D", "E" => "V", "V" => "E", "F" => "U", "U" => "F", "G" => "T", "T" => "G", "H" => "S", "S" => "H", "I" => "R", "R" => "I", "J" => "Q", "Q" => "J", "K" => "P", "P" => "K", "L" => "O", "O" => "L", "M" => "N", "N" => "M","a" => "z", "z" => "a", "b" => "y" ,"y" => "b", "c" => "x", "x" => "c", "d" => "w", "w" => "d", "e" => "v", "v" => "e", "f" => "u", "u" => "f", "g" => "t", "t" => "g", "h" => "s", "s" => "h", "i" => "r", "r" => "i", "j" => "q", "q" => "j", "k" => "p", "p" => "k", "l" => "o", "o" => "l", "m" => "n", "n" => "m");
					echo  $result = strtr($string,$trans);?>" name="dekripsi"></input>
				<button type="submit" value="Enkripsi" class="dek">
					<span>DEKRIPSI</span>
				</button>
			</form>
		</div>
	</div>
</body>
</html>