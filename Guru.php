<?php
include 'Siswa.php';

class Guru extends Siswa  {
	public function namaguru($nama)
	{
		return $nama;
	}

	public function nip($nip)
	{
		return $nip;
	}

	public function email($email)
	{
		return $email;
	}

	public function nohp($nohp)
	{
		return $nohp;
	}

	public function mapel($mapel)
	{
		return $mapel;
	}
}