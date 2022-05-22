<?php
    require ('config.php');
?>



<html>
    <head>
        <link rel="stylesheet" href="../css/InvC.css">
    </head>
    <body>

        <header>
            <!----------------------------------------Header------------------------------------------->
            <div class="header">
                <div class = "container1">
                    <div class="navbar">
                        <div class = "logo1">
                            <img src = "./../IMAGES/logo.png" width = "125px">
                        </div>
                        <nav>
                            <ul>
                                <li> <a href="#" class="active1">Home</a></li>
                                <li> <a href="#"class="active1">Categories</a></li>
                                <li> <a href="#" class="active1">About Us</a></li>
                            </ul>
                        </nav>
                            <div class="sign-in">
                                <button class="visitorbtn">Sign Up</button>
                                <button class="visitorbtn">Log In</button>
                            </div>
                    </div> 
    
                    </div>
                </div>
            </div>
        </header>
        <!-------------------------------------------------Body------------------------------------------------->

        <form>
            <h1>Sahani Michelle</h1>
        
        <div class="layout">
            <div id="slider"> <!--------------Slideshow----------->
                <figure>
                    <img src="../images/IC001.jpg">
                    <img src="../images/IC009.jpg">
                    <img src="../images/IC0010.jpg">
                    <img src="../images/IC0011.jpg">
                </figure>

                <br><br>
                <div class="specs">
                    <!-----------------------------Selecting the design----------------------->
                    <label>Design</label><br>
                    <select name="designs">
                        <option value="001">Design 001</option>
                        <option value="002">Design 002</option>
                        <option value="003">Design 003</option>
                        <option value="004">Design 004</option>

                    </select>

                    <br><br>
                    <!---------------------Color selector------------------->
                    <label>Color</label><br>
                    <select name="color">
                        <option value="White">White</option>
                        <option value="Black">Black</option>
                        <option value="Beige">Beige</option>
                        <option value="PWhite">Pale White</option>
                        <option value="Purple">Purple</option>
                        <option value="Pink">Pink</option>
                    </select>

                    <br><br>

                    <?php
                        $sql="select price from package where vid = '31'";
                        $sql="select price from package where vid = '31'";
                        $sql="select price from package where vid = '31'";
                    ?>

                    <label>Price/card</label><br>
                    <textarea name="price"></textarea>
                    <br>
                    <!------------------Selecting the quantity------------------->
                    <label>Quantity</label><br>
                    <input type="number" name="quantity" min="25" max="500">

                    <br><br>
                    <label>Total Price</label><br>
                    <textarea name="tot"></textarea>
                    <br>
                    
                </div>
                
            </div>
            <div class="desc">
                <br><br>
                <h3>Description</h3>
                <p>From Engagement Invitations to Wedding Invitations to Cake Boxes, Order of Service, RSVP's, Place Cards, Menu's, Thank you Cards and Serviette Rings, have Sahani Michelle make it specially themed and stand-alone distinctive.

Your special day will long linger in the memory. We can do elegant or romantic. We can be cool or frolicsome. We can take sophisticated simplicity and add a regal touch. We can go all out extravagant with tasteful glitter. We will help make your big day utterly 'you' and spectacularly memorable.</p>
                
                <br><br>
                <h3>Location</h3>
                <p>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.124446479289!2d79.8724087!3d6.8868769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd17f6cab7daeedd!2sSahani%20Michelle!5e0!3m2!1sen!2slk!4v1653220090399!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>

                <br><br><br><br><br>
                <input class="Confirmbtn" type="submit" name="confirm" value="Confirm">

            </div>
        </div>
        </form>

        <!----------------------------------------Footer------------------------------------------->
        
        <footer>

            <div class="footer">
                    
                <img src="./../IMAGES/logo.png" class="logo2" height="10%" width="10%">
                    <img src="./../IMAGES/play-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../IMAGES/app-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../IMAGES/Contact us.png" class="bind1" height="10%" width="10%">
                    

                <img src="./../IMAGES/fb.png" class="bind2"  width="3%">
                <img src="./../IMAGES/inster.png" class="bind2" width="3%">
                <img src="./../IMAGES/tw.png" class="bind2" width="3%">
                
            </div>
            
        </footer>
    </body>
</html>