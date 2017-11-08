<?php
include 'Kelas.php';

class Jadwal extends Kelas {
	public function namaHari($hari) 
	{
        $this->hari = $hari;
    	}
    
	public function tampilHari() 
	{
        return $this->hari;
    	}
}
	
