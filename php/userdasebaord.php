<?php
    require('config.php');
    require('cid.php');

?>
<html>
    <link rel="stylesheet" href="./../css/styleauserbashboard.css">
    <head>
        <style>
            body{
    margin:0;
    padding: 0;
    background-image: url("./../images/userdashboard.jpg"); 
    background-size: cover;
    background-color: aliceblue;


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
	width: 1000px;
	height: 320px;
}

tr:nth-child(even)
{
	background-color: #f2f2f2;
}

 tr:hover {
	 background-color: #ddd;
}
th {
	
	text-align: left;
	background-color: #FFC0CB;
	color: white;
    width:400px;
  
  }
  td,th {
	border: 1px solid #ddd;
    width:400px;
  }
  table{
	font-family: Arial, Helvetica, sans-serif;
	width:997.9px;
    position: absolute;
    top:30%;
    margin-left:11%;
    
  }
 .addfeedback{
    position:absolute;
    top:80%;
    margin-left:0%;
    background-color: #c68a93;
     border: none;
     color: white;
    padding: 10px 10px;
    text-align: center;
    font-size: 14px;
    border-style:none;
  }
  
  .addmoreitems{
    position:absolute;
    top:80%;
    margin-left:83%;
    background-color: #4169e1;
     border: none;
     color: white;
    padding: 10px 10px;
    text-align: center;
    font-size: 14px;
  }
  
  .addfeedback:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
  .addmoreitems:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
  h1{
      top:0%;
      position:absolute;
  }

  
  </style>
    </head>
    <body>
        <div class ="container">
          <h1>User dashboard</h1>  

           <button class = "addfeedback" >Add feedback</button>
           <button class = "addmoreitems" >Add more Items</button>
           
            
        </div>
    </body>
</html>

<?php 
    $sql = "select o.OrderId, Order_date, o.Amount, p.Package_Name, v.Name, p.price  
    from orders o , customer c, customer_package cp, package p, vendors v 
    Where o.Cid = c.Cid and c.Cid = cp.cid and cp.Pid = p.Pid and p.Vid = v.Vid and c.Cid ='$id'";
    $order = "";
    $count = 0;



    $result = $con->query($sql); 
    $packages = "";
    $vendors = "";
    $prices = "";

    

    if($result->num_rows>0)
    {
        echo "<table border = '1'><tr><th>Order Id</th><th>order date</th></th><th>Amount</th></th><th>Package Name</th></th><th>Name </th><th>Price</th></tr>";

        $numRows = $result -> num_rows;

        $num1 = 0;
        $num2 = 1;
        $num3 = 2;

        while($row = $result ->fetch_assoc())
        {

            if ( $order != $row["OrderId"])
            {
               

                if ($count != 0)
                {
                    echo "<script> document.getElementById('$num1').innerHTML = '$packages' </script>";
                    echo "<script> document.getElementById('$num2').innerHTML = '$vendors' </script>"; 
                    echo "<script> document.getElementById('$num3').innerHTML = '$prices' </script>";
                    $packages = "";
                    $vendors = "";
                    $prices = "";
                    $num1 += 3;
                    $num2 += 3;
                    $num3 += 3;
                }



                $order = $row["OrderId"];
                echo "<tr>";
                echo "<td >".$row["OrderId"]."</td>";
                echo "<td>".$row["Order_date"]."</td>";
                echo "<td>".$row["Amount"]."</td>";
                echo "<td id = '$num1' > </td>";
                echo "<td id = '$num2' > </td>";
                echo "<td id = '$num3' > </td>";
                echo "</tr>";
            }


            $count++;
            $packages = $packages.$row["Package_Name"]. "</br>";
            $vendors = $vendors.$row["Name"]."</br>";
            $prices = $prices.$row["price"]."</br>";
            

            if ($count == $numRows)
            {
                echo "<script> document.getElementById('$num1').innerHTML = '$packages' </script>";
                echo "<script> document.getElementById('$num2').innerHTML = '$vendors' </script>"; 
                echo "<script> document.getElementById('$num3').innerHTML = '$prices' </script>";

            }
            
           /*else
            {
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".""."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".""."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" "<td>".$row["Package_Name"]."</td>"  "<td>".$row["Name"]."</td>" "<td>".$row["price"]"</td>" " </br>";
            }*/


        }
        echo "</table>";
    }

    else{
        echo "<script> alert('No record')</script>";
        echo "No result";
    }
    $con->close();

?>
