
<?php
require 'orderController.php';
$title = "Customer orders";
$orderController = new orderController();

if (isset($_GET["confirmed"])) {
    $orderController->removeOrder($_GET["confirmed"]);
    $orderTable = $orderController->orderConfirmTable("confirmed");
    $content = $orderTable;
} else {
    $orderTable = $orderController->orderConfirmTable("confirmed");
    $content = "<div style='float:left'>
        <table style='position:relative; left:30px;'>
        <tr>
            <td>Email</td>
            <td><input type='text' name='email' id='email' placeholder='search' oninput='loadcustomers()'/></td>
            <tr>
            </table>
            <div id='List' style='position:relative; left:120px;'>$orderTable</div> 
            </div>";
}
include 'template.php';
?>
<script>
    $(document).ready(function() {
        $('#email').keyup(function() {
            var query = $(this).val();
            $.ajax({
                url: "searchMail.php",
                method: "POST",
                data: {query: query},
                success: function(data)
                {
                    $('#sortable').fadeIn();
                    $('#List').html(data);
                }
            });

        });

    });

</script>