<html>
    <head>
        <?php require("../includes/_header.php"); ?>
        <link rel="stylesheet" type="text/css" href="css/reminder.css" />
        <title>Reminders</title>
        <style>
            #medicineList {
                background-color: lavender;
                width: 280px;
                left: 200px;
                position: relative;
                list-style: none;

            }
        </style>
        <script>

            $(document).ready(function() {
                $("#ch1").click(function() {
                    $(".weekdays").hide();
                    $(".day").toggle();
                });
                $("#ch2").click(function() {
                    $(".day").hide();
                    $(".weekdays").toggle();
                });

                $("#t2").click(function() {
                    $(".ts2").toggle();

                });
                $("#t3").click(function() {
                    $(".ts2").toggle();
                    $(".ts3").toggle();
                });

            });
            $(document).ready(function() {
                $('#txtmedname').keyup(function() {
                    var query = $(this).val();
                    if (query != '')
                    {
                        $.ajax({
                            url: "Search.php",
                            method: "POST",
                            data: {query: query},
                            success: function(data)
                            {
                                $('#medicineList').fadeIn();
                                $('#medicineList').html(data);
                            }
                        });
                    }
                });
                $(document).on('click', 'li', function() {
                    $('#txtMedicineName').val($(this).text());
                    $('#medicineList').fadeOut();


                });
            });
        </script>
    </head>
    <body>
        <?php require_once("../includes/navigation.php") ?>
        <div class="customer_template_container" style=" padding-left:13px; padding-top:70px;">
            <h2 style="text-align:center;">Reminders</h2>
            <form name="myForm" action="#" method ="post">
                <fieldset>
                    <label>Medicine Name: </label>
                    <input type="text" class="inputField" name="txtmedname" id ='txtmedname' autocomplete="off" placeholder="Ex: Amoxil"/><br/>
                    <div id='medicineList'></div> 
                    <p></p>
                    <label>Instruction: </label>
                    <select class = "type" name="ins">
                        <option value="Take before meal">Take before meal</option>
                        <option value="Take after meal">Take after meal</option>
                        <option value="Take during meal">Take during meal</option>
                        <option value="Take on an empty stomach">Take on an empty stomach</option>
                        <option value="Take with milk">Take with milk</option>
                    </select></br>
                    <p></p>
                    <label>Quantity: </label>
                    <input type="number" class="inputField" name="qty" autocomplete="off"/><br/>
                    <p></p>
                    <label >Schedule type: </label><br>
                    <input type="checkbox" name="daybox" id="ch1" value="Every Days"> Every Days<br>
                    <input type="checkbox" name="weekdaybox" id="ch2" value="Every Weekdays"> Every Weekdays
                    <p></p>
                    <div class="day">
                        <label>Frequency: </label>
                        <select class = "type" name="frq">
                            <option value="1">Every 1 day</option>
                            <option value="2">Every 2 day</option>
                            <option value="3">Every 3 day</option>
                            <option value="4">Every 4 day</option>
                            <option value="5">Every 5 day</option>
                            <option value="1">Every 6 day</option>
                            <option value="2">Every 7 day</option>
                            <option value="3">Every 14 day</option>
                            <option value="4">Every 21 day</option>
                            <option value="5">Every 30 day</option>
                            <option value="5">Every 60 day</option>
                        </select></br>
                        <div class="timeselect">
                            <input type="checkbox"  name="time1" value="time1" id="t1" />One time <br>
                            <input type="checkbox"  name="time2" value="time2"id="t2"/>Two times <br>
                            <input type="checkbox"  name="time3" value="time3" id="t3"/>Three times <br>
                            <p></p>
                        </div>
                        <label>Time(24 hour):</label>
                        <div class="ts1">
                            <select id="time1" name="daytime1">
                                <option value="0">00</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                                <option value="6">06</option>
                                <option value="7">07</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                            </select>
                        </div>
                        <div class="ts2">
                            <select id="time2" name="daytime2">
                                <option value="fr1">00</option>
                                <option value="fr2">01</option>
                                <option value="fr3">02</option>
                                <option value="fr4">03</option>
                                <option value="fr5">04</option>
                                <option value="fr5">05</option>
                                <option value="fr5">06</option>
                                <option value="fr5">07</option>
                                <option value="8">08</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="fr3">11</option>
                                <option value="fr4">12</option>
                                <option value="fr5">13</option>
                                <option value="fr5">14</option>
                                <option value="fr5">15</option>
                                <option value="8">16</option>
                                <option value="fr3">17</option>
                                <option value="fr4">18</option>
                                <option value="fr5">19</option>
                                <option value="fr5">20</option>
                                <option value="fr5">21</option>
                                <option value="8">22</option>
                                <option value="fr5">21</option>
                                <option value="8">22</option>
                                <option value="fr5">23</option>
                                <option value="8">24</option>
                            </select></br>
                        </div>
                        <div class="ts3">
                            <select id="time3" name="daytime3">
                                <option value="fr1">00</option>
                                <option value="fr2">01</option>
                                <option value="fr3">02</option>
                                <option value="fr4">03</option>
                                <option value="fr5">04</option>
                                <option value="fr5">05</option>
                                <option value="fr5">06</option>
                                <option value="fr5">07</option>
                                <option value="8">08</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="fr3">11</option>
                                <option value="fr4">12</option>
                                <option value="fr5">13</option>
                                <option value="fr5">14</option>
                                <option value="fr5">15</option>
                                <option value="8">16</option>
                                <option value="fr3">17</option>
                                <option value="fr4">18</option>
                                <option value="fr5">19</option>
                                <option value="fr5">20</option>
                                <option value="fr5">21</option>
                                <option value="8">22</option>
                                <option value="fr5">21</option>
                                <option value="8">22</option>
                                <option value="fr5">23</option>
                                <option value="8">24</option>
                            </select><br>
                        </div>
                        <p></p>
                    </div>
                    <div class="weekdays">
                        <label>Week Days: </label>
                        <input type="checkbox"  name="monday" value="monday" />MONDAY <br />
                        <input type="checkbox"  name="tuesday" value="tuesday" />TUESAY <br />
                        <input type="checkbox"  name="wednesday" value="wednesday" />WEDNESDAY <br />
                        <div class='ch1'>
                            <input type="checkbox"  name="thursday" value="thursday" />THURSDAY <br />
                            <input type="checkbox"  name="friday" value="friday" />FRIDAY <br />
                            <input type="checkbox"  name="saturday" value="saturday" />SATURDAY <br />
                            <input type="checkbox"  name="sunday" value="sunday" />SUNDAY <br />
                        </div>
                        <p></p>
                        <label>Time(24 hour):</label>
                        <div class="ts1">
                            <select id="time" name="weektime" >
                                <option value="0">00</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                                <option value="6">06</option>
                                <option value="7">07</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                            </select>
                        </div>

                        <p></p>
                        <label>Start Date: </label>
                        <input type="date" id="entryDate" class="inputField" name="startdate"  /><br/>
                        <p></p>
                        <label>End Date: </label>
                        <input type="date" id="entryDate" class="inputField" name="enddate" /><br/>

                    </div>

                    <input type='submit' name = 'btnsubmitrem'><br/> 
                </fieldset>
            </form>
        </div>		
        <?php require_once("../includes/_footer.php") ?>

    </body>
</html>
<?php
if (isset($_POST['btnsubmitrem'])) {
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $database = "friends_pharmacy";
    $mysqli = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());


    $nic = $_GET["nic"];
    $contactno = $_GET["cno"];
    $medname = $_POST["txtmedname"];
    $instruction = $_POST["ins"];
    $quantity = $_POST["qty"];
    $startdate = $_POST["startdate"];
    $time1 = 100;
    $time2 = 100;
    $time3 = 100;




    if (isset($_POST["daybox"])) {

        if (isset($_POST["time1"])) {
            $time1 = $_POST["daytime1"];
        }
        if (isset($_POST["time2"])) {
            $time1 = $_POST["daytime1"];
            $time2 = $_POST["daytime2"];
        }
        if (isset($_POST["time3"])) {
            $time1 = $_POST["daytime1"];
            $time2 = $_POST["daytime2"];
            $time3 = $_POST["daytime3"];
        }

        $dayadd = $_POST["frq"];


        $query = "INSERT INTO reminderday
            (nic, contactno,medname, instruction, quantity, time1,time2,time3, startdate, enddate)
             VALUES
             ('$nic', '$contactno','$medname', '$instruction', '$quantity', '$time1','$time2','$time3', CURDATE(), CURDATE()+ $dayadd)";


        if (mysqli_query($mysqli, $query)) {
            echo '<script language="javascript">';
            echo 'alert(" Day reminder is added Successfully")';
            echo '</script>';
        }
    } else {

        $time = $_POST["weektime"];
        $startdate = $_POST["startdate"];
        $enddate = $_POST["enddate"];
        $Monday = 0;
        $Tuesday = 0;
        $Wednesday = 0;
        $Thursday = 0;
        $Friday = 0;
        $Satday = 0;
        $Sunday = 0;


        if (isset($_POST["monday"])) {
            $Monday = 1;
        }
        if (isset($_POST["tuesday"])) {
            $Tuesday = 1;
        }
        if (isset($_POST["wednesday"])) {
            $Wednesday = 1;
        }
        if (isset($_POST["thursday"])) {
            $Thursday = 1;
        }
        if (isset($_POST["friday"])) {
            $Friday = 1;
        }
        if (isset($_POST["satday"])) {
            $Satday = 1;
        }
        if (isset($_POST["sunday"])) {
            $Sunday = 1;
        }

        $query = "INSERT INTO reminderweekday
            (nic, contactno,medname, instruction, quantity,time,startdate,enddate,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday)
             VALUES
             ('$nic', '$contactno','$medname', '$instruction', '$quantity','$time','$startdate','$enddate','$Monday','$Tuesday','$Wednesday','$Thursday','$Friday','$Satday','$Sunday')";


        if (mysqli_query($mysqli, $query)) {
            echo '<script language="javascript">';
            echo 'alert(" week reminder is added Successfully")';
            echo '</script>';
        }
    }



    mysqli_close($mysqli);
}
?>

