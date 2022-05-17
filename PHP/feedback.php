<?php
     require('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/feedback.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="header">

        </div class=headr>
        <div>
            <form method="post"  action="feedbackphp.php" >
                <div class="container">
                    <h1>Feedback</h1>
                    <p>We would love to hear your comments and suggestions!</p>
                    <label>Your Feedback</label><br>
                    <textarea id="feedBack" name="fdesc" maxlength="500" required ></textarea><br><br>

                    <label>Upload Image</label><br>
                    <input type="file" id="fileToUpload" name="fileToUpload" accept="image/*" required><br><br>

                    <div class="button">
                        <button type="Submit" name="btnSubmit">Submit Feedback</button>
                    </div> <br>  

                    <table width="500px" border="1" frame=void rules=rows>
                        <thead>
                            <tr>
                                <th class="text">Your Feedback</th>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT*
                                FROM feedback WHERE Cid='ID001'";
                        $result = $conn->query($sql);?>
                         <?php while($row = $result->fetch_assoc()){?>
                             <tr class="row">
                             <td class="text"><?php echo $row['Description']?></td>
                             <td>
                                 <a href="feedback.php?edit=<?php echo $row['Description']; ?>" class="edit_btn" >EDIT</a>
                             </td>
                             <td>
                                 <a href="phpcode.php?del=<?php echo $row['Fid']; ?>" class="del_btn">DELETE</a>
                             </td>
                         </tr>
                        <?php } ?>
                            
                    </table>



                </div>
                
            </form>
            

        </div>
        

    </body>
</html>