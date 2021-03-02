<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    
<?php

$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];
$nilai_akhir = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;
$ar_siswa = [$nama_siswa,$mata_kuliah,$nilai_uts,$nilai_uas,$nilai_tugas,$nilai_akhir]
?>
<br />
<br />
<div class="animate__animated animate__fadeInTopLeft animate__infinite" style="color:red">
 <h3 style="text-align:center">Daftar Nilai Siswa</h3>
 </div>
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
 </body>
</html>
