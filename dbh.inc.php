<?php

$conn = mysqli_connect('localhost', 'root', '', 'contactform');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
