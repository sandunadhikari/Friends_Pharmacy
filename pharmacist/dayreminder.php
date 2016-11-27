<?php

include ("../Entities/dayreminderEntity.php");
require 'message/text2.php';
date_default_timezone_set('Asia/Colombo');
$host = "localhost";
$user = "root";
$passwd = "";
$database = "friends_pharmacy";
$mysqli = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());
$curhour = date("H");
$curdate = date('y:m:d');
$query = "SELECT * FROM reminderday where enddate>CURDATE() AND (time1=$curhour OR time2=$curhour OR time3=$curhour)";
$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
$reminderArray = array();
while ($row = mysqli_fetch_array($result)) {

    $reminder_id = $row[0];
    $nic = $row[1];
    $contactno = $row[2];
    $medname = $row[3];
    $instruction = $row[4];
    $quantity = $row[5];
    $time1 = $row[6];
    $time2 = $row[7];
    $time3 = $row[8];
    $startdate = $row[9];
    $enddate = $row[10];

    //Create stock objects and store them in an array.
    $dayreminder = new dayreminderEntity($reminder_id, $nic, $contactno, $medname, $instruction, $quantity, $time1, $time2, $time3, $startdate, $enddate);
    array_push($reminderArray, $dayreminder);
}
mysqli_close($mysqli);
print_r($reminderArray);

$text = new text();
foreach ($reminderArray as $key => $dayreminder) {
    echo $dayreminder->medname;
    echo $dayreminder->contactno;
    echo $dayreminder->instruction;
    echo $dayreminder->quantity;
    echo $dayreminder->time;

    $text->msg($dayreminder->medname, $dayreminder->instruction, $dayreminder->quantity, $dayreminder->time,$dayreminder->contactno);
    //$reminder->contactno
}
?>
