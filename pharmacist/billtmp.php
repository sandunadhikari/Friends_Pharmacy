<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Example 2</title>
        <link rel="stylesheet" href="css/style.css" media="all" />
    </head>
    <body>
        <header class="clearfix">
            <div id="logo">
                <img src="../public/image/logo_green.png">
            </div>
            <div id="company">
                <h2 class="name">Friends Pharmacy</h2>
                <div>455 Foggy Heights, AZ 85004, US</div>
                <div>(602) 519-0450</div>
                <div><a href="mailto:company@example.com">company@example.com</a></div>
            </div>

        </header>

        <div id="details" class="clearfix">
            <div id="client">
                <div class="to">INVOICE TO:</div>
                <h2 class="name">John Doe</h2>
                <div class="address">796 Silver Harbour, TX 79273, US</div>
                <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>
            </div>
            <div id="invoice">
                <h1>INVOICE 3-2-1</h1>
                <div class="date">Date of Invoice: 01/06/2014</div>
                <div class="date">Due Date: 30/06/2014</div>
            </div>
        </div>


        <?php
        if (isset($_GET["order_no"])) {
    $no = $_GET["order_no"];
        include '../database/dbconnect.php';
        $query = "SELECT * FROM cust_orders_items where order_no = $no";
        $resultq = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

        $result = "";
        $result = "
       
       <table border='0' cellspacing='0' cellpadding='0'>
            <thead>
                <tr>
                    <th class='no'>#</th>
                    <th class='desc'>DESCRIPTION</th>
                        <th class='dosage'>DOSAGE</th>
                    <th class='unit'>UNIT PRICE</th>
                    <th class='qty'>QUANTITY</th>
                    <th class='total'>TOTAL</th>
                </tr>
            </thead>";
        $c=0;
        while ($row = mysqli_fetch_array($resultq)) {
            $c++;
            $medname = urlencode($row[1]);
            $queryp = "SELECT price FROM stock where medicine_name = '$medname' and dosage = '$row[2]' ";
            $resultp = mysqli_query($mysqli, $queryp) or die(mysqli_error($mysqli));
            $rowp = mysqli_fetch_array($resultp);
            $amount = $row[3] * $rowp[0];
            $result = $result . "
             
                <tr>
                    <td class='no'>$c</td>
                    <td class='desc'>$row[1]</td>
                    <td class='dosage'>$row[2]</td>
                    <td class='unit'>$rowp[0]</td>
                    <td class='qty'>$row[3]</td>
                    <td class='total'>$amount</td>
                </tr>
                <tbody>
";
            
       
        }
         $result = $result . "</table>";
         echo $result;
        }
        ?>


    



        
            <tbody>
                <tr>
                    <td class="no">01</td>
                    <td class="desc"><h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
                    <td class="unit">$40.00</td>
                    <td class="qty">30</td>
                    <td class="total">$1,200.00</td>
                </tr>
                <tr>
                    <td class="no">02</td>
                    <td class="desc"><h3>Website Development</h3>Developing a Content Management System-based Website</td>
                    <td class="unit">$40.00</td>
                    <td class="qty">80</td>
                    <td class="total">$3,200.00</td>
                </tr>
                <tr>
                    <td class="no">03</td>
                    <td class="desc"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
                    <td class="unit">$40.00</td>
                    <td class="qty">20</td>
                    <td class="total">$800.00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">SUBTOTAL</td>
                    <td>$5,200.00</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">TAX 25%</td>
                    <td>$1,300.00</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">GRAND TOTAL</td>
                    <td>$6,500.00</td>
                </tr>
            </tfoot>
        </table>
        <div id="thanks">Thank you!</div>
        <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        </div>

        <footer>
            Invoice was created on a computer and is valid without the signature and seal.
        </footer>
    </body>
</html>


<?php
$no = 21;
include '../database/dbconnect.php';
$query = "SELECT * FROM cust_orders_items where order_no = $no";
$resultq = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

$result = "";
$result = "
       
       <h2 style='text-align:center;'>Order List - $no<h2>
        <table class='sortable'>
                <tr>
                   
                    <th><b>Medicine name</b></th>
                    <th><b>Dosage</b></th>
                    <th><b>unit price (Rs)</b></th>
                    <th><b>Quantity</b></th>
                    <th><b>Amount (Rs)</b></th>
                </tr>";
while ($row = mysqli_fetch_array($resultq)) {
    $medname = urlencode($row[1]);
    $queryp = "SELECT price FROM stock where medicine_name = '$medname' and dosage = '$row[2]' ";
    $resultp = mysqli_query($mysqli, $queryp) or die(mysqli_error($mysqli));
    $rowp = mysqli_fetch_array($resultp);
    $amount = $row[3] * $rowp[0];
    $result = $result . "
                <tr>
                    
                    <td><b>$row[1]</b></td>
                    <td><b>$row[2]</b></td>
                    <td><b>$rowp[0]</b></td>
                    <td><b>$row[3]</b></td>
                    <td><b>$amount</b></td>
                </tr>
";
}
$result = $result . "</table>";
echo $result;
?>