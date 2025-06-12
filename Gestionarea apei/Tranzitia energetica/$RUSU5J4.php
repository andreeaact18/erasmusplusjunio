<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

$conec  = new mysqli($servername, $username, $password, $dbname);

if($conec -> connect_error){
    die("Connection failed" . $conec -> connect_error);
}

$sql1 = "INSERT INTO Ejemplo (firstname, lastname, email)
VALUES('JUAN', 'DFH', ' ejemplo@gmail.com')";

if($conec -> query($sql1) === TRUE){
    echo "Data inserted";
}else{
    echo "Error creating data: " . $conec -> error;
}

$conec -> close();

?>