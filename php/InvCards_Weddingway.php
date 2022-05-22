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
            <h1>Wedding Channel.lk</h1>
        
        <div class="layout">
            <div id="slider"> <!--------------Slideshow----------->
                <figure>
                    <img src="../images/IC0012.png">
                    <img src="../images/IC0013.jpg">
                    <img src="../images/IC0014.jpg">
                    <img src="../images/IC0015.jpg">
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
                <p>Plan your dream wedding in one place - Weddingchannel.lk. You are free to select any wedding related service for your Dream Wedding Day from thousands of vendors</p>
                
                <br><br>
                <h3>Location</h3>
                <p>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3392221405998!2d79.99610251464574!3d7.086617418326985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fbf11a590d7b%3A0x5e439bfa1eff6cf7!2sWeddingchannel.lk!5e0!3m2!1sen!2slk!4v1653220703059!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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