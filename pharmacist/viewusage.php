<html>
<head>
	 <link rel="stylesheet" href="css/stockstyles.css" />
         <script src="js/jquery-2.0.0.js"></script>
        <script src="js/moment.min.js"></script>
        
        <style>
            td {text-align: center;}
        </style>
        <script>
            $(function(){
               loadusage(); 
            });
            
            function loadusage(){
                $.ajax({
                    url:"rest1.php",
                    async:true,
                    type:"GET",
                    data : {
                        action: $('#action').val(),
                        medtype : $('#medtype').val(),
                        search : $('#search').val(),
                        period: $('#period').val()
                   },
                })
                .done(function(data){
                    var records = JSON.parse(data);
                    var tbl_bdy =
                    document.getElementById("table-body");
                    tbl_bdy.innerHTML = '';
                    /*
                        <th>Name</th>
                        <th>Category</th>
                        <th>Batch Number</th>
                        <th>Supplier</th>
                        <th>Quantity</th>
                        <th>Entry Date</th>
                        <th>Production Date</th>
                        <th>Expire Date</th>
                        <th>Buying Price</th>
                        <th>Selling Price</th>
                    */
                    for (var i=0; i < records.length; i++){
                        var row = "<tr>";
                        row +="<td>" + records[i].date + "</td>";
                        row +="<td>" + records[i].medicine_name + "</td>";
                        row +="<td>" + records[i].category + "</td>";
                        row +="<td>" + records[i].batch_no + "</td>";
                        row +="<td>" + records[i].supplier + "</td>";
                        row +="<td>" + records[i].quantity + "</td>";
                        if(records[i].buying_price === undefined)
                            row +="<td>-</td>";
                        else
                            row +="<td>" + records[i].buying_price + "</td>";
                        if(records[i].selling_price === undefined)
                            row +="<td>-</td>";
                        else
                        row +="<td>" + records[i].selling_price+ "</td></tr>";
                        tbl_bdy.innerHTML += row;
                    }
                    })
                }
            
            function getStartDate() {
                var limit = $('#period').val();
                var d = new Date();
                switch(limit) {                    
                    case '1': {
                        d.setFullYear(d.getYear()-1);
                    }
                    break;
                    case '2': {
                        d.setMonth(d.getMonth()-1);
                    } 
                    break;
                    case '3': {
                        d.setDate(d.getDate()-7);
                    }
                    break;
                    case '4':{
                        d.setDate(d.getDate()-1);
                    }
                    break;
                    default: {
                        d = 'null';
                    }
                }
                return d;
            }
        </script>
            
    <?php require('../includes/_header.php'); ?>
	
</head>

<body>
    
    <?php require_once("../includes/navigation.php") ?>
    
    <!--content goes here -->
    <div class="customer_template_container">
        
         <b>View Usage</b>

        <div class="top-bar">
           <!-- <div class="left-float" style="padding-top:5px;">
                   Type
                <select name="action" id="action" onchange='loadusage()'>
                    <option value="1">Bought</option>
                    <option value="2">Sold</option>
                </select>
            </div>-->
            <div class="left-float" style="padding-top:5px;">
                Search By:
                <select name="medtype" id="medtype" onchange='loadusage()'>
                  <option value="1">Medicine Name</option>
                  <option value="2">Batch Number</option>
                  <option value="3">Category</option>
                </select>
                <input type="text" name="search" id="search" placeholder="Search" oninput='loadusage()'/>
            </div>
            <div class="left-float" style="padding-top:5px;">
               Period
                <select name="period" id="period" onchange="loadusage()">
                    <option value="1">One Year</option>
                    <option value="2">One Month</option>
                    <option value="3">One Week</option>
                    <option value="4">One Day</option>
                </select>
            </div>
            <div class="left-float">
                <span class="icon"><img src="Zoom-icon.png" height="40" width="40" /></span>
            </div>
            <div>
                
            </div>
        </div>
        
        <div class="content">
            <table border="0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Batch Number</th>
                        <th>Supplier</th>
                        <th>Quantity</th>
                        <th>
                            <select name="action" id="action" onchange='loadusage()' style='background-color:rgb(214,244,185);'>
                                <option value="1">Bought</option>
                                <option value="2">Sold</option>
                            </select>
                        </th>
                    </tr>
                </thead>
                <tbody id="table-body">
                </tbody>
            </table>
        </div>
        
        <?php // echo $content; ?>
    </div>		
	
    
    <?php require_once('../includes/_footer.php') ?>
    
</body>

</html>