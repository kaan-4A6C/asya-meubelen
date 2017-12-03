<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $time = date("j - n - Y");

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        htmlspecialchars($name, ENT_QUOTES,'UTF-8');
        htmlspecialchars($email, ENT_QUOTES,'UTF-8');
        htmlspecialchars($message, ENT_QUOTES,'UTF-8');
        htmlspecialchars($time, ENT_QUOTES,'UTF-8');
        htmlspecialchars($ip, ENT_QUOTES,'UTF-8');

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "rijschool";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO guestbook (name, email, message, date, ip) VALUES('$name', '$email', '$message', '$time','$ip')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-succes'>Dankje wel <strong>$name !</strong> We hebben je bericht ontavangen</div";
            // echo "<fieldset><div id='success_page'><h4 class='remove-bottom'>Uw bericht is succesvol verzonden!.</h4><p>Thank you <strong>$name</strong>, wij zullen zo spoedig mogelijk contact met u opnemen</p></div></fieldset>";
        } else {
            echo "<b>Error: </b> " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
