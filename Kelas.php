<?php
include 'Mapel.php';

class Kelas extends Mapel  {
	public function idkelas ($id="XT")
	{
		echo "ID Kelas : " . $id;
	}

	public function namakelas ($kelas="X TKJ")
	{
		echo "Kelas : ".$kelas; 
	}
}