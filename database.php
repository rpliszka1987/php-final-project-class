<?php
// Conect
$con = mysqli_connect("localhost", "root", "root", "chatterbox");

//Test Conection
if (mysqli_connect_errno()){
    echo 'Failed'.mysqli_connect_errno();
}

?>