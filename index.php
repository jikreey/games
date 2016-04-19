<html>
<head>
<title>GAMES ACAK KATA</title>
<link rel="stylesheet" href="css.css">
</head>
<body>
<?php 
$connect = mysqli_connect('localhost','root','','myDB');
if(!$connect){ die("Gagal akses database");}

$last = mysqli_query($connect,"SELECT MAX(ID) from games");
$lastid = mysqli_fetch_array($last);
$id = $lastid[0];

$urutan = (rand(1,$id));
$kata = "SELECT katabaru from games WHERE ID=$urutan";
$sql = mysqli_query($connect,$kata);
$value = mysqli_fetch_array($sql);
$kata = $value[0];
$shuffled = str_shuffle($kata);
?>
<div class="games">
	<h2 class="games-header">Kata acak:</h2>
	<form class="games-container" name=input action="games.php" method="post">
		<p><center><?php echo $shuffled ?></center></p>
		<p><input name="jawaban" type="text" placeholder="Jawaban" required></p>
		<input type="hidden" name="kata" value="<?php echo $kata; ?>"/>
		<p><input type="submit" value="Submit"></p>
	</form>
	<form class="games-container" name=input action="input.php" method="post">
	     <p><input name="katabaru" type="text" placeholder="Kata baru" required></p>
         <p><input type="submit" value="Input Kata Baru"></p>
        </form>
</div>

</body>
</html>
