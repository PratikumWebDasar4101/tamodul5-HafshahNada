<?php
session_start();
$data = array(
				array(
					   "id"=>"1",
					   "username"=>"Hafshah",
					   "password"=>"12345",
					   "akses"=>"admin"
				),
				array(
						"id"=>"2",
						"username"=>"Nada",
						"password"=>"8990",
						"akses"=>"user"

				)

			);
	if (isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$num = 0;
		$datavalid = 0;
		while($num < count($data)){
			if($username == $data[$num]['username'] && $password == $data[$num]['password']){
				$_SESSION['username'] = $username;
				$_SESSION['akses'] = $data[$num]['akses'];
				$_SESSION['id'] = $data[$num]['id'];
				$datavalid = 1;
			}
			$num++;
					
			}
			if ($datavalid < 1) {
				echo "Login Gagal";
			}else{
				header('location:registrasi.php');
			}
		}
	?>