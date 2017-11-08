<?php
include 'Guru.php';

class Mapel extends Guru  {
	public function namaMapel($mapel) 
	{
        $this->mapel = $mapel;
    }

	public function tampilMapel() 
	{
        return $this->mapel;
    }


}