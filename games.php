<?php
	$answer = $_POST["jawaban"]; 
	$kata = $_POST["kata"]; 
	if($answer==$kata){
		echo "<script>alert('Jawaban Benar!')
    	location.replace('index.php')</script>";}
	else {
		echo "<script>alert('Jawaban Salah!')
    	location.replace('index.php')</script>";}

?>