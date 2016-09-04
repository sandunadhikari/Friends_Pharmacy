
<html>
    <head>
    <title>Update Supplier</title>
    <link href="../styeles/update.css" type="text/css" rel="stylesheet">    
    </head>
    
    <?php
    
    $con=mysqli_connect("localhost","root","")or die("Coudn't connect");
    mysqli_select_db($con,"pharmacy") or die ("coudn't connect to the database");
    $output
    
    
    
    
    
    ?>
    
    
    
   
    
<body>
     <div><img src="../images/logo.png"></div>

    <div id="d1">
       <div id="d4">
                 <form >
                <input id="i1" type="text" name="search" placeholder="Company name">
                     <input type="submit" name="search" value="search>>"<br><br><br>     
                <table>   
                    <tr height=40>
                <td> Supplier ID</td>
                <td><input type="text" name="sid"> </td> 
                    </tr>
                    <tr height=40>
                <td width=170 >Company </td>
                <td><input type="text" name="cname"></td>
                    </tr>
                    
                    <tr height=40>
                <td width=50> Address</td>
                <td><input type="text" name="add"> </td> 
                    </tr>
                    <tr height=40>
                <td width=50> Mobile Number</td>
                <td><input type="text" name="num"> </td>
                         
                    </tr>
                    <tr height=40>
                <td width=50> Land Number</td>
                <td><input type="text" name="num"> </td>
                    <tr height=40>
                <td width=50> Email</td>
                <td><input type="text" name="mail"> </td> 
                    </tr>
                    <tr height=40>
                <td width=50> Drug</td>
                <td><select style="width:170px">
                
                    </select>
                        </td> 
                <td><select style="width:150px">
                <option></option>    
                <option value="penadol">penadol</option>
                <option value="piriton">Priton</option>
                <option value="tsar">Tsar</option>
                <option value="meftal">Meftaal</option>
                    </select> </td>
                <td><select style="width:150px">
                <option></option>    
                <option value="penadol">penadol</option>
                <option value="piriton">Priton</option>
                <option value="tsar">Tsar</option>
                <option value="meftal">Meftaal</option>
                    </select> </td> 
                    </tr>
                    <tr height=40>
                <td width=50> Price</td>
                <td ><input type="text" name="num"> </td>
                 <td ><input type="text" name="num"> </td>
                 <td ><input type="text" name="num"> </td>
                    </tr>  
                
                 
                </div>
                </table><br><br>
                <input id="i2" type="submit" name="go" value="Update supplier">
        
        
        
       
    
    
    
    
    
    </div>
    
    
    
    
    
    
    </body>    


</html>