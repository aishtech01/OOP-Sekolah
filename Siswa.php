<?php 
include 'Sekolah.php';

class Siswa  {
public $nsiswa;
	public function namaSiswa($nsiswa) {
        $this->nsiswa = $nsiswa;
    }
    
	public function tampilNamasiswa() {
        return $this->nsiswa;
    }



}