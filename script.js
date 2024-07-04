document.addEventListener('DOMContentLoaded', function() {
    fetch('view_appointments.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('appointments').innerHTML = data;
        });
});
