<?php
if (file_exists('appointments.txt')) {
    $appointments = file_get_contents('appointments.txt');
    echo nl2br(htmlspecialchars($appointments));
} else {
    echo "The appointments file does not exist.";
}
?>
