<html>
	<head>
		<title>Guest Book</title>
	</head>
	<body>
		<h2>Guest Book </h2>
		<form method="post" action="direct_post.php">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="user"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Comment</td>
					<td><textarea cols="40" rows="5" name="comment"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="comment"></td>
				</tr>
			</table>
		</form>
		<a href="comment.php">Lihat Buku Tamu</a>
	</body>
</html>