<?php

function biodata($name,$age){
	if($name=="Fadley" && $age==22){
	$data=[
			"name"=> "$name",
			"age" => $age,
			"adress" => "Jl. luku 1 Simpang Kwala Medan",
			"hobies" => ["Design","Watch Video"],
			"is_merried" => false,
				"list_school" => [
									["name"=> "SD INPRES 155707",
									"year_in" => "2003",
									"year_out" => "2009",
									"major" => null],
									["name"=> "SMPN 2 Pandan Nauli",
									"year_in" => "2009",
									"year_out" => "2012",
									"major" => null],
									["name"=> "SMA Kalam Kudus Medan",
									"year_in" => "2012",
									"year_out" => "2015",
									"major" => "IPA"]
									],
			"skills" => [
						["skill_name"=>"Photoshop",
						 "level" => "Advanced"],
			"interest_in_coding"=> true]
		];

		return json_encode($data); //return json

	}else{
		return "Data yang dimasukan salah!";
	}
}

$hasil= biodata("Fadley",22);
echo "$hasil";
