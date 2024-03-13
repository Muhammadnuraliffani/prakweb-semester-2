<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nama_siswa = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $mata_kuliah = isset($_POST['matkul']) ? htmlspecialchars($_POST['matkul']) : '';
    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : 0;
    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : 0;
    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : 0;
    
    $Nilai_Akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
    
    if ($Nilai_Akhir > 100) {
        $predikat = "Super Memuaskan";
       
    }
    elseif($Nilai_Akhir > 85) {
        $predikat = "Sangat Memuaskan";
       
    } elseif ($Nilai_Akhir >= 70) {
        $predikat = "Memuaskan";
      
    } elseif ($Nilai_Akhir >= 56) {
        $predikat = "Cukup";
       
    } elseif ($Nilai_Akhir >= 36) {
        $predikat = "Kurang";
       
    } else {
        $predikat = "Sangat Kurang";
       
    }
    
    
    
    echo "<h3>Keterangan Siswa</h3>";
    echo "<p><strong>Nama:</strong> $nama_siswa</p>";
    echo "<p><strong>Mata Kuliah:</strong> $mata_kuliah</p>";
    echo "<p><strong>Nilai UTS:</strong> $nilai_uts</p>";
    echo "<p><strong>Nilai UAS:</strong> $nilai_uas</p>";
    echo "<p><strong>Nilai Tugas:</strong> $nilai_tugas</p>";
    echo "<p><strong>Nilai Akhir:</strong> $Nilai_Akhir</p>";
    echo "<p><strong>Predikat:</strong> $predikat</p>";
}
?>