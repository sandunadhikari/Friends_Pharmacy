<html>
<head>
    
    <link rel="stylesheet" href="css/styles.css"/>
    <style>
        h2{
            position: relative;
               top:70px;
               left:50px;
               
        }
       
        .top bar{
            position: relative;
            left:100px;
        }
        .content{
            position: relative;
            left:80px;
        }
        
    </style>
    <script src="js/jquery-2.0.0.js"></script>
        
        <script>
            $(function(){
                loadcustomers();
                $("#medicine-form").hide();
            });
            function loadcustomers(){
                $.ajax({
                    url: "rest3.php",
                    async: true,
                    type: "GET",
                    data : {
                        type: "search",
                        nic: $('#nic').val(),
                        active: $('#active').val(),
                        search: $('#search').val()
                     }
                })
                .done(function(data){
                    var records = JSON.parse(data);
                    var tbl_bdy =
                    document.getElementById("table_body");
                    tbl_bdy.innerHTML = '';
                    for(var i=0; i < records.length; i++){
                        var name = records[i].first_name + " " + records[i].last_name;
                        var row = "<tr onclick='loadDetails(";
                        row += records[i].nic + ",\""; 
                        row += name + "\",\"";
                        row += records[i].email + "\",";
                        row += records[i].contact_number + ")'>";
                        row += "<td>" + records[i].nic +"</td>";
                        row += "<td>" +  name + "</td>";
                        row +="<td>" + records[i].email + "</td>";
                        row +="<td>" + records[i].contact_number + "</td>";
                        row += "<td><input id='"+records[i].nic+"' type='checkbox' ";
                        if(records[i].active == 1) {
                            row += "checked";
                        }
                        row += " onchange='changeActive(this)'>"
                        row += "</tr>";
                        tbl_bdy.innerHTML += row;
                    }
                });
            }

            function changeActive(elem, nic) {
                console.log(elem.id);
                if(elem.checked) {
                    var active = 1;
                } else {
                    var active = 0;
                }
                $.ajax({
                    url: "rest3.php",
                    async: true,
                    type: "GET",
                    data : {
                        type: "changeActive",
                        nic: elem.id,
                        active: active
                     }
                })
                .done(function(data){});
            }
            
            // function loadDetails(nic, name, email, tp) {
            //     $("#medicine-form").show();
            //     $.ajax({
            //         url: "rest3.php",
            //         async: true,
            //         type: "GET",
            //         data: {
            //             type: "details",
            //             nic: nic
            //         }
            //     })
            //     .done(function(data) {
                    
            //         var records = JSON.parse(data);
            //         document.getElementById("cnic").innerHTML = "NIC: " + nic;
            //         document.getElementById("cname").innerHTML = "Name: " + name;
            //         document.getElementById("cemail").innerHTML = "Email: " + email;
            //         document.getElementById("ctp").innerHTML = "Contact: " + tp;
            //         var medtbl = document.getElementById("ctbl");
            //         medtbl.innerHTML = '';
            //         for(var i=0; i < records.length; i++) {
            //             var tbl = "<tr>" ;
            //             tbl += "<td>" + records[i].medicine_name + "</td>";
            //             tbl += "<td>" + records[i].duration  + "</td>";
            //             tbl += "<td>" + records[i].start_date + "</td>";
            //             tbl += "<td>" + records[i].end_date + "</td>";
            //             tbl += "</tr>";
            //             medtbl.innerHTML += tbl;
            //         }
            //     });
            // }
        </script>
	
    <?php require('../includes/_header.php'); ?>
	
</head>

<body>
         <?php require_once("../includes/navigation.php") ?>
    <h2>Inactive Customers</h2>
    <!--content goes here -->
    <div class="customer_template_container" style=" padding-left:13px; padding-top:70px;">
        <fieldset style="border: 2px solid rgb(106,184,42); background-color: rgb(229, 249, 212); width: 800px; padding:50px;">
        
        
        <div class="top bar">
        <div class="left-float" style="padding-top:5px;">
            <div >
            NIC
            <input type="text" name="nic" id="nic" placeholder="search" oninput="loadcustomers()"/>
            Active
            <select id='active' onchange='loadcustomers()'>
                <option value='1'>Active</option>
                <option value='0'>Inactive</option>
            </select>
            </div>
            </div>
        </div>
        <br>
        
        <div class="content">
            <table border="1" style='width:60%;'>
                <thead>
                    <tr>
                        <th>NIC</th>
                        <th>Customer Name</th>
                        <th>Email Address</th>
                        <th>Contact Number</th>
                        <th>Active?</th>
                    </tr>
                </thead>
                <tbody id="table_body"></tbody>
            </table>
        
        <?php // echo $content; ?>
            </fieldset>
    </div>		
	
    
    <?php require_once('../includes/_footer.php') ?>
    
        
        </div>             

</body>

</html>