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

    public function idMapel($idmapel) 
	{
        $this->idmapel = $idmapel;
    }

	public function tampilIdmapel() 
	{
        return $this->idmapel;
    }


}
