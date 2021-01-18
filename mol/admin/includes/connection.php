<?php
session_start();
$conn = mysqli_connect("localhost","root","","mol");
    if(!$conn){
        die("cannot connecto to server");
    }