<?php
	include "koneksi.php";
	$modal_id=$_POST['modal_id'];
	$query=mysqli_query($koneksi,"Delete FROM modal WHERE modal_id='$modal_id'");
	
	
	if($query) // jika insert data berhasil
	{
		// fungsi untuk membuat format json
		header('Content-Type: application/json');
		// untuk load data yang sudah ada dari tabel
		$content = file_get_contents('http://localhost/php7/modalajax/ajax_data.php', true);
		$data = array('status'=>'success', 'data'=> $content);
		echo json_encode($data);
	}
	else // jika insert data gagal
	{
		$data = array('status'=>'failed', 'data'=> null);
		echo json_encode($data);
	}
	
?>