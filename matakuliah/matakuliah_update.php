<?php

if (isset($_POST['update'])) {
    $id       = $_POST['Id'];
    $nim      = $_POST['nama'];
    $nama     = $_POST['SKS'];
    $jk       = $_POST['Semester'];


    // update user data
    $result = mysqli_query($con, "UPDATE matakuliah SET
nim='$nim',nama='$nama',alamat='$alamat',jenis_kelamin='$jk',email='$email',telepon='$telepon' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location:?page=matakuliah-show");
}
