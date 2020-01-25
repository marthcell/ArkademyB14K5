<!-- Semoga Berhasil dan lolos seleksi -->
<!-- membuat username dan password berbatas -->
<?php
function username($username){
	if(preg_match("/^[a-z0-9_.]{8,12}$/", $username)){
		return "TRUE";
	}else{
		return "FALSE";
	}
}

function password($password){
	if(preg_match("/^[[!@#$%&*_\-?0-9]{1}+[A-Z][a-z]+[0-9!@#$%&*_\-?]{1}]{0,9}/", $password)){
		return "TRUE";
	}else{
		return "FALSE";
	}
}

$hasil=username("john.smith");
echo "Username: $hasil";
echo "<br>";
$hasil=Username("JOHNSmith");
echo "Username: $hasil";
echo "<br>";
$hasil=password("1Saya&bisa");
echo "Password: $hasil";

 ?>
