<?php
include 'Jadwal.php';

$jadwal1 = new Jadwal();
echo "Jadwal : ". $jadwal1->hari("Senin")."<br>";
echo "Mata Pelajaran : ". $jadwal1->namamapel("Seni Budaya")."<br>";
echo "Nama Guru : " . $jadwal1->namaguru("Deni Sudiana, S.Pd.I")."<br>";
echo "Kelas : " . $jadwal1->namakelas("X TKJ")."<br>";
echo "========Daftar Siswa=======<br>";
echo $jadwal1->namasiswa("Yunita")."<br>";
echo $jadwal1->namasiswa("Rina")."<br><br>";

$jadwal2 = new Jadwal();
echo "Jadwal : ". $jadwal2->hari("Selasa")."<br>";
echo "Mata Pelajaran : ". $jadwal2->namamapel("Matematika")."<br>";
echo "Nama Guru : " . $jadwal2->namaguru("Asep Saepudin,S.Pd")."<br>";
echo "Kelas : " . $jadwal2->namakelas("X TKJ")."<br>";
echo "========Daftar Siswa=======<br>";
echo $jadwal2->namasiswa("Yunita")."<br>";
echo $jadwal2->namasiswa("Rina")."<br>";
