<?php 
// koneksi database
include '../Database.php';
 
// menangkap data yang di kirim dari form

$Name = $_POST['Name'];
$Age = $_POST['Age'];
$conn = connectToDb();

// menginput data ke database
mysqli_query($conn,"INSERT INTO forum (SubmitID, Name , Age) VALUES ('', '$Name','$Age')");

// mengalihkan halaman kembali ke index.php
header("location:../Main.php");
closeDb($conn)

?>