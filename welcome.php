<html>
<body>

Welcome <?php echo $_POST["nama"]; ?><br>
Your Email adress is: <?php echo $_POST["email"]; ?>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="progate";
$email=$_POST["email"];
$nama=$_POST["nama"];
$komentar=$_POST["komentar"];

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

$sql = "INSERT INTO tugas (email, nama, komentar)
VALUES ('$email', '$nama', '$komentar')";

if ($conn -> query($sql) === TRUE) {
    echo "New records created succesfully";
} else {
    echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<a href="http:/localhost/index.php">Data yang terdaftar</a>

</body>
</html> 