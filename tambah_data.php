<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>
<form method="post">
    Nama: <input type="text" name="nama" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" name="submit" value="Simpan">
</form>

