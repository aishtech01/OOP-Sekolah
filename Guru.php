<?php
include 'Siswa.php';

class Guru extends Siswa  {
	public function namaguru($nama="Deni Sudiana,S .Pd.")
	{
		echo " Nama Guru : ".$nama;
	}

	public function nip($nip="723232")
	{
		echo "NIP : " . $nip;
	}

	public function email($email="denisudiana@gmail.com")
	{
		echo "Email : " . $email;
	}

	public function nohp($nohp="0828219212112")
	{
		echo "Nohp : ".$nohp;
	}

	public function mapel($mapel="Seni Budaya")
	{
		echo "Mata Pelajaran : ". $mapel;
	}
}