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
<<<<<<< HEAD
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
=======
    	}
}
>>>>>>> 368fee42e9c17d8a300d39e1ca8afcb69adf01de
