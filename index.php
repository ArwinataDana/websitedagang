<?php
if (isset($_POST['nama'])) {
    $nama = htmlspecialchars($_POST['nama']); 
    echo "Halo, $nama! Selamat datang di website sederhana ini 😊";
} else {
    echo '
    <form method="post">
        Masukkan Nama: <input type="text" name="nama" required>
        <button type="submit">Kirim</button>
    </form>
    ';
}
?>
