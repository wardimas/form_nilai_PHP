<?php

$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];
$nilai_akhir = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;
$ar_siswa = [$nama_siswa,$mata_kuliah,$nilai_uts,$nilai_uas,$nilai_tugas,$nilai_akhir]
?>
 <h3>Daftar Nilai Siswa</h3>
 <table border="1" width="100%">
 <thead>
 <tr>
 <th>Nama</th><th>Mata Kuliah</th><th>UTS</th>
 <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
 </tr>
 </thead>
 <tbody>
 <?php

 if (isset($_POST['proses'])) {
 for ($i = 0;$i < count($ar_siswa);$i++) {
echo '<td>'.$ar_siswa[$i].'</td>';
   
}
echo '</tr>';
 }
 ?>
 </tbody>
 </table>