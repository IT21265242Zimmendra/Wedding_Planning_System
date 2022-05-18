<?php
    require('config.php');
    require('cid.php');

?>

<!DOCTYPE html>
<html>
<link rel = "stylesheet" href = "./../CSS/cart.css?v=<?php echo time(); ?>">
<form >
    <div class ="container">
        <h1>Cart</h1>
    <div>
    <div class="buttons">
        <button class = btnpayment>Payment</button>
        <button class = addmore>Add Category</button>
    </div>
    </form>
</html>


<?php 

    $sql = "select c.Category_Name,v.Name, p.Package_Name,p.price
    from vendors v,package p,category c,customer_package cp
    Where p.vid = v.vid and v.category_name = c.Category_Name and cp.pid = p.pid and cp.Cid ='$id'";
  



    $result = $con->query($sql); 
 
    

    if($result->num_rows>0)
    {
        echo "<table border = '1'><tr><th></th><th>Category</th><th>Vendor</th><th>Item Name</th></th><th>Price</th></tr>";

       

        while($row = $result ->fetch_assoc())
        {
                $vendor = $row["Name"];
                
                echo "<tr>";
                echo "<td>" . "<button>"."-</button></td>";
                echo "<td >".$row["Category_Name"]."</td>";
                echo "<td>".$row["Name"]."</td>";
                echo "<td>"."<a href = ''>".$row["Package_Name"]."</a>"."</td>";
                echo "<td>".$row["price"]."</td>";
                echo "</tr>";


                
        }
        echo "</table>";
    }
    

    else{
        echo "<script> alert('No record')</script>";
        echo "No result";
    }
    $con->close();


?>


<?php


?>
    
<style>      


    </style>