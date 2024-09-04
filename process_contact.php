<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama = htmlspecialchars($_POST['Nama']);
    $Nim = htmlspecialchars($_POST['Nim']);
    $Email = htmlspecialchars($_POST['Email']);
    $Kelas = htmlspecialchars($_POST['Kelas']);
    $Saran = htmlspecialchars($_POST['Saran']);

    $sql = "INSERT INTO contacts (Nama, Nim, Email, Kelas, Saran) VALUES (:Nama, :Nim, :Email, :Kelas, :Saran)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':Nama', $Nama);
    $stmt->bindParam(':Nim', $Nim);
    $stmt->bindParam(':Email', $Email);
    $stmt->bindParam(':Kelas', $Kelas);
    $stmt->bindParam(':Saran', $Saran);

    if ($stmt->execute()) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was an error sending your message.";
    }
}
?>
