<?php 
require('setSession.php');
?>
 <!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "./../css/ordertable.css?v=<?php echo time(); ?>">

    </head>
    <body>
    <div class="container">
           <nav>
               <img src = "./../images/logo.png" class = "logo">
               <div class = "details">
                    <img src = "./../images/pro.png" class = "logo1">
                
                    <a href = "#" class = "btn"><?php $name ?></a>
                    <div class="admin-content">
                        <ul>
                            <li><a href="./../php/adminsetting.php">Settings</a></li>
                            <li><a href="./../html/Visitor.html">Log Out</a></li>
                         
                        </ul>
                    </div>
               </div>
           </nav>
       </div>
       <div class ="container1">
    <?php
$sql = "SELECT * FROM orders";
$result = $con ->query($sql);


    if($result->num_rows>0)
    {
        echo "<table border = '1'><tr><th>Order Id</th><th>order date</th></th><th>Amount</th></th><th>CID</th><th style='width:50%'></th></tr>";
    while($row = $result->fetch_assoc()){  

        $OrderId = $row["OrderId"];

        echo "<tr>";
        echo "<td >".$row["OrderId"]."</td>";
        echo "<td>".$row["Order_date"]."</td>";
        echo "<td>".$row["Amount"]."</a>"."</td>";
        echo "<td>".$row["Cid"]."</td>";
        echo "<td width = '50%'>" . "<button type = 'submit'>"."<a href = 'deleteorder.php?id=". $OrderId. "'>Delete Order</a></button></td>";
    }


}
?>
</div>
</body>
