<?php
$connect = mysqli_connect("localhost", "root", "", "classes");
if (session_id() =='' ){
    session_start();
}
?>