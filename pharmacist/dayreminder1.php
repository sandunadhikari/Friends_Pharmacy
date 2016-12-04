<html>
<head>
        <title>Day reminders</title>
    <?php require('../includes/_header.php'); ?>
    <link href="css/dayreminder1.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script>
        
        
        $(function() {
            getdetails();
        })
        
        function getdetails() {
            $.ajax({
                url: "dayreminderdb.php",
                async: true,
                type: "GET",
                data: {
                    type: "get",
                    search: $('#search').val()
                }
            })
            
            .done(function(data) {
                var records = JSON.parse(data);
                var tbl = document.getElementById("tbl");
                tbl.innerHTML = '';
                
                
                for(var i=0; i < records.length; i++) {
                    var row = "<tr>";
                    row += "<td >" + records[i].nic + "</td>";
                    row += "<td>" + records[i].contactno + "</td>";
                    row += "<td>" + records[i].medname + "</td>";
                    row += "<td>" + records[i].instruction + "</td>";
                    row += "<td>" + records[i].Quantity + "</td>";
                    row += "<td>" + records[i].time1+ "</td>";
                    row += "<td>" + records[i].time2+ "</td>";
                    row += "<td>" + records[i].time3+ "</td>";
                    row += "<td>" + records[i].startdate+ "</td>";
                    row += "<td>" + records[i].enddate+ "</td>";
                    row += "</tr>";
                    tbl.innerHTML += row;
                }
            });
        } 
    </script>

</head>
    <body>
       <?php require_once("../includes/navigation.php") ?>
              
       <div id="d1">
        <form action="dayreminder1.php" method="post">
           <input type="text" id="search" name="search" oninput="return getdetails()" placeholder="Customer name" autocomplete="off"><br><br>
      
       
           <div class="d2">  
                <table border="1">
                <thead>
                    <th>NIC</th>
                    <th>ContactNO</th>
                    <th>Medicine name</th>
                    <th>Instructions</th>
                    <th>Quantity</th>
                    <th>Time1</th>
                    <th>Time2</th>
                    <th>Time3</th>
                    <th>Start date</th>
                    <th>End date</th>
                    
                </thead>
                    <tbody id="tbl">
                    </tbody>
                </table>
            
        
        </div>
          
            
            
            </form>
    </div>
   
    </body>
</html>