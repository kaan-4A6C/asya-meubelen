<?php

    try {
        //$dbc = new PDO("mysql:host=localhost;dbname=rijschool", "root", "");
        $dbc = new PDO("mysql:host=mysql-c6.argewebhosting.nl;dbname=asyameube", "asyameube", "x3v%hC5y");
        $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    // IMPORTANT
    // Define your server login details in here, host can be left as localhost
    // $host = "db.durmusdag.nl";
    // $user = "md280038db240313";
    // $pass = "TJLX2qCN";
    // $database = "md280038db240313";
    //
    // //Connecting to MySQL server now...
    // mysql_connect("$host","$user","$pass") or die (mysql_error());
    //
    // //Select database
    // mysql_select_db ("$database") or die (mysql_error());
    //
    // $conn = mysql_connect('ftp.asyameubelen.nl','asyamebe','x3v%hC5y');
    // if(!$conn) die("Failed to connect to database!");
    // $status = mysql_select_db('asyamebe', $conn);
    // if(!$status) die("Failed to select database!");
    // $sql ="SELECT name, message, date FROM review ORDER BY id DESC";
?>
