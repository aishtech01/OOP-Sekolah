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

<<<<<<< HEAD
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
=======
}
>>>>>>> 368fee42e9c17d8a300d39e1ca8afcb69adf01de
