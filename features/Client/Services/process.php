<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simonpera";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function tiket_masuk($conn) {
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $email = htmlspecialchars($_POST["email"]);
    $tglpesan = htmlspecialchars($_POST["tglpesan"]);
    $jenis = htmlspecialchars($_POST["jenis"]);

    $sql = "INSERT INTO tiket_masuk (nama, alamat, nohp, email, tglpesan, jenis) VALUES ('$nama', '$alamat', '$nohp', '$email', '$tglpesan', '$jenis')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\n" . $conn->error . "')</script>";
    }

    $conn->close();
    header("Location: http://localhost/SIMONPERA2/features/Client/Services/index.php");
    exit();
}

function prewedding($conn) {
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $email = htmlspecialchars($_POST["email"]);
    $tglpesan = htmlspecialchars($_POST["tglpesan"]);
    $jenis = htmlspecialchars($_POST["jenis"]);

    $sql = "INSERT INTO prewedding (nama, alamat, nohp, email, tglpesan, jenis) VALUES ('$nama', '$alamat', '$nohp', '$email', '$tglpesan', '$jenis')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\n" . $conn->error . "')</script>";
    }

    $conn->close();
    header("Location: http://localhost/SIMONPERA2/features/Client/Services/index.php");
    exit();
}

function lapangan($conn) {
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $email = htmlspecialchars($_POST["email"]);
    $tglpesan = htmlspecialchars($_POST["tglpesan"]);
    $jenis = htmlspecialchars($_POST["jenis"]);

    $sql = "INSERT INTO lapangan (nama, alamat, nohp, email, tglpesan, jenis) VALUES ('$nama', '$alamat', '$nohp', '$email', '$tglpesan', '$jenis')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\n" . $conn->error . "')</script>";
    }

    $conn->close();
    header("Location: http://localhost/SIMONPERA2/features/Client/Services/index.php");
    exit();
}

function rapat($conn) {
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $email = htmlspecialchars($_POST["email"]);
    $tglpesan = htmlspecialchars($_POST["tglpesan"]);
    $jenis = htmlspecialchars($_POST["jenis"]);

    $sql = "INSERT INTO rapat (nama, alamat, nohp, email, tglpesan, jenis) VALUES ('$nama', '$alamat', '$nohp', '$email', '$tglpesan', '$jenis')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\n" . $conn->error . "')</script>";
    }

    $conn->close();
    header("Location: http://localhost/SIMONPERA2/features/Client/Services/index.php");
    exit();
}

function guide($conn) {
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $email = htmlspecialchars($_POST["email"]);
    $tglpesan = htmlspecialchars($_POST["tglpesan"]);
    $jenis = htmlspecialchars($_POST["jenis"]);

    $sql = "INSERT INTO guide (nama, alamat, nohp, email, tglpesan, jenis) VALUES ('$nama', '$alamat', '$nohp', '$email', '$tglpesan', '$jenis')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\n" . $conn->error . "')</script>";
    }

    $conn->close();
    header("Location: http://localhost/SIMONPERA2/features/Client/Services/index.php");
    exit();
}

$choice = $_POST["layanan"];
switch ($choice) {
    case "tiketmasuk":
        tiket_masuk($conn);
        break;
    case "tiketmasuk":
        prewedding($conn);
        break;
    case "tiketmasuk":
        lapangan($conn);
        break;
    case "tiketmasuk":
        rapat($conn);
        break;
    case "tiketmasuk":
        guide($conn);
        break;
}