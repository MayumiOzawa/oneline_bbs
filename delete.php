<?php
	require('dbconnect.php');

	if (empty($_GET['del'])) {
	}else{
		$sql = sprintf('UPDATE posts SET delete_flag=1 WHERE id=%d',
			mysqli_real_escape_string($db, $_GET['del'])
		);
		mysqli_query($db, $sql) or die(mysqli_error($db));

		header('Location: bbs.php');
		exit();
	}
?>