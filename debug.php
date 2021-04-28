<?php

	require_once "mylib/sql.php";

	$a = A::getInstance();
	$a->con(A::CONNECT_CONF, "localhost", "database","root","chatbot");
	
	// print_r($a->insert("pengguna", array("nama_pengguna"=>"Kuna Natsukawa", "namapengguna_pengguna"=>"kuinarizal","katasandi_pengguna"=>md5("kuinarizal"))));

	// print_r($a->update("pengguna", array("nama_pengguna"=>"Kuina Natsukawa", "katasandi_pengguna"=>md5("Hello World")), array("id_pengguna0"=>"kuinarizal","id_pengguna1"=>"hotaruichijou","id_pengguna2"=>"zalbyte")));

	$result = $a->query(A::select("*").A::from("pengguna").A::like("nama_pengguna","d").A::orderby("id_pengguna").A::asc_desc("desc"));
	while($row = $a->assoc($result)){
		print_r($row);
	}
	
?>