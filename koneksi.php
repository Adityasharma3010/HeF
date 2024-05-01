<?php
	$koneksi = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9172837", "sql9172837", "NNnZk564eH");
	function go($location, $alert)
	{
		echo "<script>window.alert('".$alert."')</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=".$location."\"><center>";
		return 1;
	}