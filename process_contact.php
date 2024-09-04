<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['Nama'];
    $nim = $_POST['Nim'];
    $email = $_POST['Email'];
    $kelas = $_POST['Kelas'];
    $saran = $_POST['Saran'];

    $sql = "INSERT INTO contacts (Nama, NIM, Email, Kelas, Saran) VALUES ('$nama', '$nim', '$email', '$kelas', '$saran')";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_data.php"); // Redirect ke halaman view_data.php setelah berhasil submit
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
