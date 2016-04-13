<html>
<head>
<title>Database KATA</title>
<style>
body {
	background:#456;
	font-family:sans-serif;}
	
.box {
	width:1000px;
	background:#ebebeb;
	margin: 30px auto;
}

.table {
	text-align:center;
	margin:auto;
	width:1000px;
}
.table th {
	background: #28d;
	padding:20px;
	font-family:inherit;
	font-size: 30px;
}

.table td {
	padding:16px;
	font-family:inherit;
	font-size: 18px;
}
</style>
</head>
<body>
<div class="box">
<table class="table" border="1">
<tr>
	<th>Kata Baru</th>

</tr>
<?php
	$connect = mysqli_connect('localhost','root','','myDB');
	if(!$connect){ die("gagal connect database!"); }
	$data = "SELECT * FROM games";
	$result = mysqli_query($connect,$data); 
	while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
	<td><?php echo $row['katabaru'];?></td>
<?php } ?>	
</tr>	
</table>
</div>
</body>
</html>
