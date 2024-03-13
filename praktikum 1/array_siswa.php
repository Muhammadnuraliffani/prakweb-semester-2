<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    ?>
    <h3>Keterangan Siswa</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Tugas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nama_siswa; ?></td>
                <td><?php echo $mata_kuliah; ?></td>
                <td><?php echo $nilai_uts; ?></td>
                <td><?php echo $nilai_uas; ?></td>
                <td><?php echo $nilai_tugas; ?></td>
            </tr>
        </tbody>
    </table>
<?php } ?>