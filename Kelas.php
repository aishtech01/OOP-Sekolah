<?php
include 'Siswa.php';

class Kelas extends Siswa  {
	public function namaKelas($kelas) 
	{
        $this->kelas = $kelas;
    	}

	public function tampilKelas() 
	{
        return $this->kelas;
    	}

    	public function idKelas($idkelas) 
	{
        $this->idkelas = $idkelas;
    	}

	public function tampilIdkelas() 
	{
        return $this->idkelas;
    	}

}
