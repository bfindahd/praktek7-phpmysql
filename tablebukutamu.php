<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktek7";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

//create database
$sql = "CREATE TABLE buku_tamu(
    id_bt INT(10) PRIMARY KEY,
    nama VARCHAR(40) NOT NULL,
    email VARCHAR(30) NOT NULL,
    isi text NOT NULL
)";

if (mysqli_query($conn, $sql)){
    echo "Database created successfully";
} else {
    echo "Error creating database". mysqli_error($conn);
}

mysqli_close($conn);
?>