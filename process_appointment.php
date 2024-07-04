<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $message = htmlspecialchars($_POST['message']);

    $appointment = "Nama: $name\nEmail: $email\nTanggal: $date\nWaktu: $time\nPesan: $message\n\n";
    file_put_contents('appointments.txt', $appointment, FILE_APPEND);

    echo "Janji temu berhasil dibuat.";
} else {
    echo "Invalid request.";
    
}

?>
