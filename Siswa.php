<?php 
include 'Sekolah.php';

class Siswa  {
public $nsiswa;
	public function namaSiswa($nsiswa) 
	{
        $this->nsiswa = $nsiswa;
    }

	public function tampilNamasiswa() 
	{
        return $this->nsiswa;
    }

    public function nisSiswa($nissiswa) 
	{
        $this->nissiswa = $nissiswa;
    }

	public function tampilNissiswa() 
	{
        return $this->nissiswa;
    }

    public function alamatSiswa($alamat) 
	{
        $this->alamat = $alamat;
    }

	public function tampilAlamatsiswa() 
	{
        return $this->alamat;
    }




}