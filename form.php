<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Tambah Nilai</h2>
        </div>
        <div class="col-3"></div>
        <div class="col-6">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="mb-2">
                    <label class="form-label">NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukkan Nim">
                </div>
                <div class="mb-2">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="mb-2">
                    <label class="form-label">Mata Kuliah</label>
                    <select name="matkul" class="form-select">
                        <option value="jaringankomputer">Jaringan Komputer</option>
                        <option value="pkn">PKN</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Nilai UTS</label>
                    <input type="number" name="uts" class="form-control" placeholder="Masukkan Nilai UTS">
                </div>
                <div class="mb-2">
                    <label class="form-label">Nilai UAS</label>
                    <input type="number" name="uas" class="form-control" placeholder="Masukkan Nilai UAS">
                </div>
                <div class="mb-2">
                    <label class="form-label">Nilai Tugas</label>
                    <input type="number" name="nilai_tugas" class="form-control" placeholder="Masukkan Nilai Tugas">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</div>