<html>
	<head>
		<title>Show Comment</title>
	</head>
	<body>
		<h2>Daftar Komentar</h2>
		<table border="1px" width="59%">
			<tr>
				<td width="36%">Nama</td>
				<td width="27%">Email</td>
				<td width="37%">Komentar</td>
				<td width="37%">Edit</td>
				<td width="37%">Delete</td>
		    </tr>
		<?php
		include 'connect.php';  //memanggil file connect.php supaya terkoneksi dengan database
       	$query = pg_query("select * from komentar");   //melakukan query pada database
	    while ( $data = pg_fetch_array($query) ) //melooping pada setiap data hasil query
		{
				?>
				<tr>
					<td><?php echo $data['name'];?></td>   
					<td><?php echo $data['email'];?></td>
					<td><?php echo $data['comment'];?></td>
					<td><a href="delete.php?kirim_id=<?php echo $data['id']?>">Delete</a></td>
					<td><a href="edit.php?kirim_id=<?php echo $data['id']?>">Edit</a></td>
					
			    </tr>
				
		<?php } ?>
		</table>
		<a href="index.php">Berikan Komentar</a>
	</body>
</html>