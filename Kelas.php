<?php
include 'Mapel.php';

class Kelas extends Mapel  {
	public function namaKelas($kelas) 
	{
        $this->kelas = $kelas;
    }

	public function tampilKelas() 
	{
        return $this->kelas;
    }
}