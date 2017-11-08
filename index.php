<?php
include 'Jadwal.php';

$jadwal1 = new Jadwal();
<<<<<<< HEAD
$jadwal1->namaGuru("Yuni");
$jadwal1->namaMapel("Bahasa Indonesia");
$jadwal1->namaKelas("X TKJ");
$jadwal1->namaSiswa("Riyani");

echo "Mata Pelajaran : ".$jadwal1->tampilMapel()."<br>";
echo "Nama Guru : ".$jadwal1->tampilNamaguru()."<br>";
echo "Kelas : ".$jadwal1->tampilKelas()."<br>";
echo "Nama Siswa : ".$jadwal1->tampilNamasiswa()."<br>";

=======
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
>>>>>>> efde075c20ad85819f29444a0d2b0f9b658a725f
