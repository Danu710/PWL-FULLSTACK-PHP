<?php
    // $conn = mysqli_connect("localhost","u529203768_simsditp","Danu12345!","u529203768_simsditp");
    $conn = mysqli_connect("127.0.0.1:3306","root","","simsditp");
    if(!$conn){
        echo "gagal";
    }