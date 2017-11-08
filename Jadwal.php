<?php
include 'Guru.php';

class Jadwal extends Guru {
	public function namaHari($hari) 
	{
        $this->hari = $hari;
    	}
    

	public function tampilHari() 
	{
        return $this->hari;
    	}
}
	
