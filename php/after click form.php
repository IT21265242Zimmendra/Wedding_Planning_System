<?php
    require('config.php');
    require('cid.php');

?>

<!DOCTYPE html>
<html>
<form >
    <div class ="container">
     
                       
        
        
        <div class="description">
       <?php 
       $sql = "select description from vendors where vid = '$vid';"
       $result = $con->query($sql);
       if($result ->num_rows>0){
           while($row=$result->fetch_assoc){
               echo $row ["description"];
           }
           
       }
       else{
           echo "<script>alert('No record')</srcipt>";
           echo "no result";
       }
       $con->close();
                ?>
        </div>
        <div class="mapping">
        
         </div>
        <div class="package">
<nav>
        <ul>
                <li><button><a href="#">package 1</a></button></li>
                <li><button><a href="#">package 2</a></button></li>
                <li><button><a href="#">package 3</a></button></li>
                
            </ul>
</nav>
         </div>
        
    <div>
    </html>
    <style>
body{
    background-image: url("./../images/formimages.png") ;
    background-size:cover;
    box-sizing: border-box;
    font: Arial, Helvetica, sans-serif;
    
    
}
.imagesample{
    height:300px;
    width:auto;
}
.container{

    background-color: rgba(0, 0, 0, 0.24);
	margin: auto auto;
	padding: 40px;
	border-radius: 8px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 500px;
	height: 450px;
}
button{

background-color: rgba(21,13,43,0.24);

padding: 40px;
border-radius: 8px;
box-shadow: 0 0 10px #000;
position: relative;
width: 20%;
height: 3%;
text

}
button:hover{
    width: 25%;
    height: 6%;
}
nav{
    position: absolute;
    top:75%;
}
 ul li{
    list-style-type: none;
    display:inline;
    padding: 10px 10px 5px 5px;
    float:bottom;
    position:relative;
    top:50%;
    margin: 10px 20px ;

}



    </style>