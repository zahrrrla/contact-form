<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="success.css">
</head>
<body>
    <section class="contact centered">
        <div class="container">

        <?php

$servername = "localhost";
$username = "root";  
$password = ""; 
$dbname = "contact_form_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$NIM = $_POST['NIM'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$saran = $_POST['saran'];

$sql = "INSERT INTO contacts (name, NIM, kelas, jenis_kelamin, email, telp, saran) 
        VALUES ('$name', '$NIM', '$kelas', '$jenis_kelamin', '$email', '$telp', '$saran')";

if ($conn->query($sql) === TRUE) {
    echo "<h2><br><br><br><br><br><br><br><br>Terima kasih telah memberi saran, $name.</h2>";
    echo "<p>Kami sangat menerima saran apapun.<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>></p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

        </div>
    </section>
</body>
</html>
