<?php
$connect = mysqli_connect('localhost','dzikriid','ALFArob1','dzikriid_myDB');
if(!$connect){ die("Gagal akses database");}
	
	$katabaru = $_POST['katabaru'];

$input = "INSERT INTO games (katabaru) VALUES ('$katabaru')";
$exe = mysqli_query($connect,$input);
if($exe) {
	echo "<script>alert('Kata berhasil dimasukkan!')
    location.replace('index.php')</script>";
} else {
	echo "<script>alert('Kata gagal dimasukkan!')
    location.replace('index.php')</script>";
}

?>