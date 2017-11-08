<?php
include 'Siswa.php';

class Guru extends Siswa  {
	
	public function namaGuru($nama) {
        $this->nama = $nama;
    }
    public function setNip($nip){
        $this->nip = $nip;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setNohp($nohp){
        $this->nohp=$nohp;
    }

  

    public function tampilNamaguru() {
        return $this->nama;
    }

    public function getNip() {
        return $this->nip;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNohp() {
        return $this->nohp;
    }

   
}