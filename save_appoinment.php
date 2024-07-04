<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $tanggal = $_POST["tanggal"];
    $layanan = $_POST["layanan"];
    $waktu = $_POST["waktu"];
    
    $appointment = "Nama: $nama, Email: $email, Tanggal: $tanggal, Waktu: $waktu\n";
    
    $file = fopen("appointments.txt", "a");
    fwrite($file, $appointment);
    fclose($file);
    
    echo "Janji temu berhasil disimpan!";
} else {
    echo "Metode tidak diizinkan.";
}
?>