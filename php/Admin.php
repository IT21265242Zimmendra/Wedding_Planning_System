<?php
    require('config.php');

?>


<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "Admin.css">

    </head>

    <body>
       <div class="container">
           <nav>
               <img src = "logo.png" class = "logo">
               <div class = "details">
                    <img src = "download.png" class = "logo1">
                    <a href = "#" class = "btn">Username</a>
               </div>
               
           </nav>
       </div>
       <div class="card-1">
        <div class="card1">
           
            <div class="info">
                <h2 id = "01">$150000</h2>
                <h2 id = "title-card1">Total Number of Customers</h2>
            </div>
            

        </div>
        <div class="card2">
            
            <div class="info">
                <h2 id = "02" >$150000</h2>
                <h2 id = "title-card1">Total Revenue</h2>
            </div>
           

        </div>
        <div class="card3">
            
            <div class="info">
                <h2 id = "03">$150000</h2>
                <h2 id = "title-card1">Most Clicked Vendor</h2>
            </div>
            

        </div>
        </div>
        <div class="card-2">
            <div class="card4">
                
                <div class="info">
                    <h2 id = "04" >$150000</h2>
                    <h2 id = "title-card1">Most Clicked Category</h2>
                </div>

            </div>
            <div class="card5">
                
                <div class="info">
                    <h2>$150000</h2>
                    <h2 id = "title-card1">Total Revenue</h2>
                </div>
                
                </div> 

        </div>
       



       </div>


       <?php

         $noOfCustomers = 0;
         $totalRevenue = 0;
         $sql = "select * from Customer";

         if( $result = $con -> query($sql))
         {
             if ($result -> num_rows > 0)
             {
                 while($row = $result -> fetch_assoc())
                 {
                    $noOfCustomers += 1;
                 }
             }
         }

         $sql = "select * from Orders";

         if( $result = $con -> query($sql))
         {
             if ($result -> num_rows > 0)
             {
                 while($row = $result -> fetch_assoc())
                 {
                    $totalRevenue += $row["Amount"];
                 }
             }
         }
         
         $sql = "select Name from vendors Where Number_of_Clicks = ( select max(Number_of_Clicks) from  vendors )";
         $result = $con -> query($sql);
         $maxVendor = "";
   
         while ($row = $result->fetch_assoc()) {
            $maxVendor = $row['Name'];
        }

        $sql = "select Name from category Where Number_of_Clicks = ( select max(Number_of_Clicks) from  category)";
         $result = $con -> query($sql);
         $maxCate = "";
   
         while ($row = $result->fetch_assoc()) {
            $maxCate = $row['Name'];
        }

         echo '<script>'. 

            "let counts=setInterval(updated);
             let upto=0;
             function updated(){
                var count= document.getElementById('01');
                count.innerHTML=++upto;
                if(upto == '$noOfCustomers')
                {
                    clearInterval(counts);
                }
            }"
             . '</script>';
 


         echo '<script>'. "document.getElementById('02').innerHTML = '$totalRevenue';". '</script>';
         echo '<script>'. "document.getElementById('03').innerHTML = '$maxVendor';". '</script>';
         echo '<script>'. "document.getElementById('04').innerHTML = '$maxCate';". '</script>';




       ?>
    </body>



</html>
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-image: url("./../code knight/Wedding_Planning_System/images/sinhala wedding.jpg");
    
}

.logo{
    padding: 20px;
}

header{
    background:black;
    display: flex;
    width: 100%;
    height: 30vh;
}



.container{
    width: 100%;
    height: 100%;
}

nav{
    background-color: black;
    width: 100%;
    height: 30vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

nav .logo{
    width: 250px;
    cursor: pointer;
}

nav .logo1{
    width: 30px;
    margin-right: 10px;
}


nav .details{
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-color: #fff;
    padding: 15px 30px;
    border: 1px solid #fff;
    border-radius: 30px;
    margin-right: 5%;
    cursor: pointer;
    
}

nav .details a{
    text-decoration: none;
    color: #fff;
}

.card-1{
    display:grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 10px;
    padding: 100px;
}

.card-2{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap: 0px;
    padding: 100px;
    margin-top: -15%;
}


 .card1, .card2, .card3{
    width: 100%;
    height:40vh;
    margin: 2%;
    border-radius: 8px;
    z-index: 0;

}

.card4, .card5
 {
    width: 70%;
    height:40vh;
    border-radius: 8px;
    z-index: 0;
 }

.card1{
    background-image: url("bg1.jpg");
    background-size: cover;
}

.card2{
    background-image: url("bg2.png"); 
    background-size: cover;
}

.card3{
    background-image: url("bg3.png"); 
    background-size: cover;
}

.card4{
    background-image: url("bg4.png"); 
    background-size: cover;
}

.card5{
    background-image: url("bg5.png"); 
    background-size: cover;
}

 

 .card4
 {
     margin-left: 28%;
 }

 .info{
     padding: 80px;
     text-align:center;
 }

 .info h2{
     line-height: 50px;
 }

 #title-card1{
     font-size: 15px;
 }
    </style>
