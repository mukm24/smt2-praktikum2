<div class="container">
    <div class="row">
        <div class="col-12 py-4">
            <a href="index.php?page=form" class="btn btn-danger">Tambah</a>
        </div>
        <div class="col-12 py-4">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Matkul</th>
                        <th>Nilai UTS </th>
                        <th>Nilai UAS</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai Akhir</th>
                        <th>Grade</th>
                        <th>Predikat</th>
                        <th>Kelulusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $datas) {
                        $nilai_akhir = (30 * $datas['uts'] / 100) + (35 * $datas['uas'] / 100) + (35 * $datas['nilai_tugas'] / 100);
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $datas['nim'] ?></td>
                            <td><?= $datas['nama'] ?></td>
                            <td><?= $datas['matkul'] ?></td>
                            <td><?= $datas['uts'] ?></td>
                            <td><?= $datas['uas'] ?></td>
                            <td><?= $datas['nilai_tugas'] ?></td>
                            <td><?= number_format($nilai_akhir, 2, ',', '.') ?></td>
                            <td><?php grade($nilai_akhir) ?></td>
                            <td><?php predikat($nilai_akhir) ?></td>
                            <td><?php kelulusan($nilai_akhir) ?></td>
                        </tr>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>