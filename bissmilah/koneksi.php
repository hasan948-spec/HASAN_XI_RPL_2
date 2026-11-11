<?php
$db = mysqli_connect("localhost", "root", "", "db_kasir");

if (!$db) {
    die("database tidak di temukan: " . mysqli_connect_error());
}
?>