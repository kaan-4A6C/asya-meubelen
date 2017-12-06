<?php
require_once("dbc.php");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $time = date("Y-n-d");

    htmlspecialchars($name, ENT_QUOTES,'UTF-8');
    htmlspecialchars($message, ENT_QUOTES,'UTF-8');
    htmlspecialchars($time, ENT_QUOTES,'UTF-8');

    $sql = "INSERT INTO review (name, message, date) VALUES(:name, :message, :time)";
    $sth = $dbc->prepare($sql);
    $sth->execute([
        ":name" => $name,
        ":message" => $message,
        ":date" => $date
    ]);
}
?>
<div class='alert alert-succes text-center'>Dankje wel <strong><?php $name ?> !</strong> We hebben je bericht ontvangen</div>
