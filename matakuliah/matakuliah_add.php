<?php

if (isset($_POST['Submit'])) {
    $id       = $_POST['Id'];
    $kode     = $_POST['Kode'];
    $Nama   = $_POST['Nama'];
    $SKS       = $_POST['SKS'];
    $Semester    = $_POST['Semester'];

    $result = mysqli_query($con, "INSERT INTO matakuliah(id,kode,nama,SKS,Semester) VALUES('$id','$kode','$nama','$SKS','$Semester')");

    header("Location:?page=matakuliah-show");
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Matakuliah</strong>
            </div>

            <div class="card-body">
                <form method="POST" action="?page=matakuliah-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="nim" class="control-label">ID</label>
                        <input type="text" class="form-control" name="Id" placeholder="Masukan ID..." required>
                    </div>

                    <div class="form-group">
                        <label for="nama" class="ontrol-label">Kode</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Kode ..." required>
                    </div>

                    <div class="form-group">
                        <label for="nama" class="control-label">Nama</label>
                        <select class="form-control" name="Nama">
                            <option disabled selected> Pilih </option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="control-label">SKS</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan SKS..." required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email" class="control-label">Semester</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan Semester..." required>
                        </div>
                    </div>

                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">

                </form>
            </div>
        </div>
    </div>
</div>