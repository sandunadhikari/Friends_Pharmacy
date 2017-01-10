<?php include '../database/dbconnect.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Invoice</title>
        <link rel="stylesheet" href="css/orderbill.css" media="all" />
    </head>
    <body>
        <header class="clearfix">
            <div id="logo">
                <img src="../public/image/logo_green.png">
            </div>
            <div id="company">
                <h2 class="name">Friends Pharmacy</h2>
                <div>Kirulapone</div>
                <div>(+94) 519-0450</div>
                <div>Reg No:A5SH1120GB21</div>
                <div><a href="mailto:company@example.com">friendsPharmacy@gmail.com</a></div>
            </div>


        </header>
        <?php
        $mail = $_GET["email"];
        $queryn = "SELECT first_name,last_name FROM customer where email = '$mail'";
        $resultq = mysqli_query($mysqli, $queryn) or die(mysqli_error($mysqli));
        $row = mysqli_fetch_array($resultq)
        ?>

        <div id="details" class="clearfix">
            <div id="client">
                <div class="to">INVOICE TO:</div>
                <h2 class="name"><?php echo $row[0].' '.$row[1]?></h2>
                <div class="email"><a href=<?php $mail ;?> ><?php echo $mail;?></a></div>
            </div>
            <div id="invoice">
                <h1>INVOICE -</h1>
                <div class="date">Date of Invoice: <?php echo date("d/m/Y") ?></div>
                
            </div>
        </div>


        <?php
        if (isset($_GET["order_no"])) {
            $no = $_GET["order_no"];
            
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
            $c = 0;
            $total =0;
            while ($row = mysqli_fetch_array($resultq)) {
                $c++;
                $medname = urlencode($row[1]);
                $queryp = "SELECT price FROM stock where medicine_name = '$medname' and dosage = '$row[2]' ";
                $resultp = mysqli_query($mysqli, $queryp) or die(mysqli_error($mysqli));
                $rowp = mysqli_fetch_array($resultp);
                $amount = $row[3] * $rowp[0];
                $total += $amount;                $result = $result . "
                    <tbody>
                <tr>
                    <td class='no'>$c</td>
                    <td class='desc'>$row[1]</td>
                    <td class='dosage'>$row[2]</td>
                    <td class='unit'>Rs.$rowp[0].00</td>
                    <td class='qty'>$row[3]</td>
                    <td class='total'>Rs$amount.00</td>
                </tr>
                
";
            }
            $result = $result . "
                </tbody>
        <tfoot>
                 <tr>
            <td colspan='1'></td>
            <td colspan='4'>SUBTOTAL</td>
            <td>Rs$total.00</td>
        </tr>
        <tr>
            <td colspan='2'></td>
            <td colspan='3'>DISCOUNT</td>
            <td>$1,300.00</td>
        </tr>
        <tr>
            <td colspan='2'></td>
            <td colspan='3'>GRAND TOTAL</td>
            <td>Rs$total.00</td>
        </tr>
    </tfoot>
</table>

            ";
            echo $result;
        }
        ?>









        <div id="thanks">Thank you!</div>
        <a title="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;" >PRINT</a>
        <footer>
            Invoice was created on a computer and is valid without the signature and seal.
        </footer>
    </body>
</html>


