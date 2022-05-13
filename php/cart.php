<?php
    require('config.php');
    require('cid.php');

?>

<!DOCTYPE html>
<html>
<form >
    <div class ="container">
        <h1>Cart</h1>
    <div>
    <div class="buttons">
        <button class = btnpayment>Payment</button>
        <button class = addmore>Add Category</button>
    </div>
</html>

<script>

function deleteCategory(category)
{
    console.log(category);
}
   

</script>
    

<?php 

    $sql = "select c.Name,p.Package_Name,p.price
    from vendors v,package p,category c,customer_package cp
    Where p.vid = v.vid and v.category_name = c.name and cp.pid = p.pid and cp.Cid ='$id'";
  



    $result = $con->query($sql); 
 
    

    if($result->num_rows>0)
    {
        echo "<table border = '1'><tr><th></th><th>Category</th><th>Item Name</th></th><th>Price</th></tr>";

       

        while($row = $result ->fetch_assoc())
        {
                $category = $row["Name"];

                echo "<script> deleteCategory('$category') </script> ";
                
                echo "<tr>";
                echo "<td>" . "<button onclick = deleteCategory( '$category' )>". "-</button></td>";
                echo "<td >".$row["Name"]."</td>";
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
<style>      
h1{
    color:white;
}  
body{
    background-image: url("./../images/formimages.png") ;
    background-size:cover;
    box-sizing: border-box;
    font: Arial, Helvetica, sans-serif;
}
.container{

background-color: rgba(0, 0, 0, 0.24);
margin: auto auto auto;
padding: 40px;
border-radius: 8px;
box-shadow: 0 0 10px #000;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
width: 500px;
height: 320px;
}

tr:nth-child(even)
{
background-color: #800000;
}

tr:hover {
 background-color: green;
}
th {

text-align: left;
background-color: grey;
color: black;
width:400px;

}
td,th {
border: 1px solid #ddd;
width:400px;
color:white;
}
table{
font-family: Arial, Helvetica, sans-serif;
width:500px;
position: absolute;
top:30%;
margin-left:-1%;

}
.btnpayment{
    position:absolute;
    top:80%;
    margin-left:65%;
    background-color: #4CAF50; 
     border: none;
     color: white;
    padding: 10px 32px;
    text-align: center;
    font-size: 14px;
    cursor: pointer;

  
    
}
.btnpayment:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.addmore{
    position:absolute;
    top:80%;
    background-color: #4169e1;
     border: none;
     color: white;
    padding: 10px 10px;
    text-align: center;
    font-size: 14px;
    cursor: pointer;
}
.addmore:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

a{
    text-decoration: none;
    color: white;
}

    </style>