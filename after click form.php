<?php
    require('config.php');
    require('cid.php');

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel = "stylesheet" href = "css/afterclickform.css">
     <script>


        function addImage(index)
      {
            const Images = [ "images/grand-kandyan.jpg" ];

            document.getElementById("vendorImage").style.backgroundImage = "url(" + Images[index] + ")";
            document.getElementById("vendorImage").style.backgroundSize = "contain";

       }

     </script>

     <style>

            <?php
                echo "<script> addImage(0); </script>";
            ?>
            </div>
                       
            <div class="description">
                <?php 
                    $sql = "select description from vendors where vid = 'VD001'";
                    $result = $con->query($sql);

                    if($result ->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            echo $row ["description"];
                        }
            
                    }
                    else
                    {
                        echo "<script>alert('No record')</srcipt>";
                        echo "no result";
                    } 

                    $con->close();
                ?>
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

    </form>
  </body>
</html>