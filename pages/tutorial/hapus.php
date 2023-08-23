<?php
 
 include 'config/config.php';
 $id = $_GET['id'];
 $sql = $conn->query("delete from tutorial where id = '$id'");

 if ($sql) {
 
 ?>
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?pages=home";
	</script>
	
 <?php
 
 }
 
 ?>