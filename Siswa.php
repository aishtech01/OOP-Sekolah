<?php 
include 'Sekolah.php';

class Siswa  {
	public function namasiswa($nama="Yunita")
	{
		echo "Nama Siswa : " . $nama;
	}

	public function nis($nis="16171001")
	{
		echo "NIS : " . $nis;
	}

	public function email($email="nitayuni@gmail.com")
	{
		echo "Email : " . $email;
	}

	public function nohp($nohp="0818723462342")
	{
		echo "Nohp : ".$nohp;
	}

	public function kelas($kelas="X TKJ")
	{
		ECHO "Kelas : ". $kelas;
	}



}