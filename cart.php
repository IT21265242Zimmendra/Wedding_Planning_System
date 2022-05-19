<?php
    require('config.php');
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
    <div>
    <div class="buttons">
        <button type = "submit" class = btnpayment name = "Payment" onclick = "location.href = 'paymentmethod.html'">Payment</button>
        <button class = addmore>Add Category</button>
    </div>
    </form>
</html>


<?php 

    $sql = "select c.Category_Name,v.Name, p.Package_Name,p.price, p.pid
    from vendors v,package p,category c,customer_package cp
    Where p.vid = v.vid and v.category_name = c.Category_Name and cp.pid = p.pid and cp.Cid ='ID001'";
  



    $result = $con->query($sql); 
 
    

    if($result->num_rows>0)
    {
        echo "<table border = '1'><tr><th></th><th>Category</th><th>Vendor</th><th>Item Name</th></th><th>Price</th></tr>";

       

        while($row = $result ->fetch_assoc())
        {
                $pid = $row["pid"];
                
                echo "<tr>";
                echo "<td>" . "<button type = 'submit'>"."<a href = 'deleteItem.php?id=$pid'>-</a></button></td>";
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


?>

