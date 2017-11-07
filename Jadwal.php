<?php
include 'Kelas.php';

class Jadwal extends Kelas {
	public function hari($hari="Senin")
	{
		echo "Jadwal Hari : ".$hari;
	}

	public function guru($guru="Deni Sudiana")
	{
		echo "Nama Guru : " . $guru;
	}

	public function kelas($kelas="X TKJ")
	{
		echo "Kelas : " . $kelas;
	}
}