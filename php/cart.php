<?php
    require('setCid.php');


    $_SESSION['cart'] = array();
?>

<!DOCTYPE html>
<html>
    <head>
            <link rel = "stylesheet" href = "./../CSS/cart.css?v=<?php echo time(); ?>">
        </script>
    </head>


        <form >
            <div class ="container">
                <h1>Cart</h1>
            </div>
            <div class="buttons">
                <a href="./../html/paymentmethod.html" class="button">Payment</a>
                <a href="./../php/userCategory.php" class="addmore">Add Category</a>
            </div>
        </form>
</html>


<?php 

    $sql = "select c.Category_Name,v.Name, p.Package_Name,p.price, p.pid
    from vendors v,package p,category c,customer_package cp
    Where p.vid = v.vid and v.category_name = c.Category_Name and cp.pid = p.pid and cp.Cid ='$cid'";
    
  



    $result = $con->query($sql); 
 
    

    if($result->num_rows>0)
    {
        echo "<table border = '1'><tr><th style='width:20%'></th><th>Category</th><th>Vendor</th><th>Item Name</th></th><th>Price</th></tr>";
        $totalPrice = 0;

        while($row = $result ->fetch_assoc())
        {
                $pid = $row["pid"];
                $pid = intval($pid);
                array_push($_SESSION['cart'],$row["Category_Name"]); 

                echo "<tr>";
                echo "<td width = '20%'>" . "<button type = 'submit' class = 'deletebtn'>"."<a href = 'deleteItem.php?id=$pid'>delete</a></button></td>";
                echo "<td >".$row["Category_Name"]."</td>";
                echo "<td>".$row["Name"]."</td>";
                echo "<td>"."<a href = ''>".$row["Package_Name"]."</a>"."</td>";
                echo "<td>".$row["price"]."</td>";
                $totalPrice += $row["price"];
                echo "</tr>";


                
        }
        
        echo "<tr> <td width = '20%'>Total Price</td><td></td><td></td><td></td><td>$totalPrice</td></tr>";
        echo "</table>";

        $_SESSION['Totalprice'] = $totalPrice;
    }
    

   

?>

