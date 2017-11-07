<?php
include 'Guru.php';

class Mapel extends Guru  {
	public function idmapel($id="03")
	{
		echo " ID Mapel : " .$id;
	}

	public function namamapel($nama="Seni Budaya")
	{
		echo " Mata Pelajaran : ".$nama;
	}

	public function kelas($kelas="X TKJ")
	{
		echo " Kelas : " . $kelas;
	}


}