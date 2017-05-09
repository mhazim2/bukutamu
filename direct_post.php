
<?php
include 'connect.php'; //memanggil file connect.php supaya terkoneksi dengan database

//mengambil data isian dari textfield yang bersesuaian dan menyimpannya dalam variabel
$user = $_POST['user'];
$email = $_POST['email'];
$comment = $_POST['comment'];

if (empty($user) || empty($email) || empty($comment))  //cek jika ada texfield yang Kosong
	{
		echo "Form ada yang kosong, silahkan isi ulang";
	}
else
	{
		$queriku = pg_query("insert into komentar(name, email, comment) values('$user','$email','$comment')");
		if ($queriku == TRUE)
			{
				echo "Data Berhasil ditambah, silahkan lihat daftar <a href='comment.php'>komentar</a>";
			}
		else
			{
				echo "error";
			}
	}
?>

