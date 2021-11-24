<?php require("database_credentials.php");
    session_start();
    $uname=$_SESSION["uname"];

    $conn = new mysqli(servername,username,password,dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "Select item_id, item_name, price, quantity from products";

    $results= $conn->query($sql);    

    $rows1 = mysqli_fetch_assoc($results);
    $product_id1 = $rows1["item_id"];
    $product_name1 =$rows1["item_name"];
    $product_price1 =$rows1["price"];
    $product_qty_avail1=$rows1["quantity"];

    $rows2 = mysqli_fetch_assoc($results);
    $product_id2 = $rows2["item_id"];
    $product_name2 =$rows2["item_name"];
    $product_price2 =$rows2["price"];
    $product_qty_avail2=$rows2["quantity"];

    $rows3 = mysqli_fetch_assoc($results);
    $product_id3 = $rows3["item_id"];
    $product_name3 =$rows3["item_name"];
    $product_price3 =$rows3["price"];
    $product_qty_avail3=$rows3["quantity"];

    $rows4 = mysqli_fetch_assoc($results);
    $product_id4 = $rows4["item_id"];
    $product_name4 =$rows4["item_name"];
    $product_price4 =$rows4["price"];
    $product_qty_avail4=$rows4["quantity"];

    $rows5= mysqli_fetch_assoc($results);
    $product_id5 = $rows5["item_id"];
    $product_name5 =$rows5["item_name"];
    $product_price5 =$rows5["price"];
    $product_qty_avail5=$rows5["quantity"];


    //getting customer id.
    $sql = "Select person_id from person where username='$uname'";
    $results = $conn->query($sql);
    $rows = mysqli_fetch_assoc($results);
    $pid=$rows["person_id"];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Digital Health Solutions</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/chat.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    </head>
    <body>
        <section>
            <div class="navbar" id="top">
                <span><a href="index.php"><img src="images/diabetes.png" alt="logo" class="logo"/></a><p>D H S</p></span>
                <div class="navdiv-1"> 
                    <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                    <a href="about.php"><i class="fab fa-font-awesome-flag"></i> About Us</a> 
                    <a href="pricing.php"><i class="fas fa-money-bill"></i> Pricing</a> 
                    <a href="contact.php"><i class="fas fa-id-badge"></i> Contact</a>  
                </div>
                <div class="navdiv-2">
                    <form>
                        <input class="searchbox" type="search" placeholder="Search" aria-label="Search">
                        <a class="btn btn-outline-success" >Search</a>
                        <a class="btn btn-outline-success" href="register.php">Register</a>
                        <a class="btn btn-outline-success" class="active" href="login.php">Login</a>
                    </form>
                </div>
            </div>
            <div class="dashboard">
                <div class="sidebar">
                    <span><img src="images/home-icon-silhouette.png" alt="home-icon"/><a href="profile.php">Profile</a> </span>
                    <span><img src="images/insurance.png" alt="healthstatus-icon"/><a href="healthstatus.php">Health Status</a> </span>

                    <span><img src="images/cubes.png" alt="products-icon"/><a href="products.php"> Products</a> </span>
                    <span><img src="images/global.png" alt="healthcenter-icon"/><a href="healthcenter.php">Health Center</a> </span>
                    <span><img src="images/message.png" alt="message-icon"/><a href="messagecoach.php">Message Coach</a> </span>
                    <span><img src="images/shopping-cart.png" alt="cart-icon"/><a href="cart.php">Cart</a> </span>
                    <span style="margin-top:150px;"><img src="images/logout.png" alt="logout-icon"/><a href="login.php">Logout</a> </span>
                </div>  
                <div class="display-dashboard">
                    <form action="products.php" method="post">
                        <?php
                            if(isset($_POST["buy5"])){
                                $qty5 = $_POST["quantity5"];

                                //insert into database the transaction details
                                $sql= "INSERT INTO `cart`(`cid`, `pid`, `name`, `quantity`) VALUES 
                                ('$pid','$product_id5','$product_name5','$qty5')";
                            }

                            if(isset($_POST["buy2"])){
                                $qty2 = $_POST["quantity2"];

                                //insert into database the transaction details
                                $sql= "INSERT INTO `cart`(`cid`, `pid`, `name`, `quantity`) VALUES 
                                ('$pid','$product_id2','$product_name2','$qty2')";
                            }
                            
                            if(isset($_POST["buy3"])){
                                $qty3 = $_POST["quantity3"];

                                //insert into database the transaction details
                                $sql= "INSERT INTO `cart`(`cid`, `pid`, `name`, `quantity`) VALUES 
                                ('$pid','$product_id3','$product_name3','$qty3')";
                            }

                            if(isset($_POST["buy4"])){
                                $qty4 = $_POST["quantity4"];

                                //insert into database the transaction details
                                $sql= "INSERT INTO `cart`(`cid`, `pid`, `name`, `quantity`) VALUES 
                                ('$pid','$product_id4','$product_name4','$qty4')";
                            }



                        ?>
                        <div class="dashboard-product">
                            <span class="profile-pic"><img src="images/user-interface.png" alt="ui" class="profile-avatar"> </span> 
                            <div class="left-profile">
                                <span class="product"><img src="images/neil-bates-tAZElyZEm40-unsplash.jpg" alt="product#1"/></span>
                                <span class="description">
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">ID:</bold><?php echo $product_id5 ?></p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Name:</bold><?php echo $product_name5 ?></p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Price:</bold><?php echo $product_price5 ?>GHC</p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Qty avail:</bold><?php echo $product_qty_avail5 ?></p>
                                    <input type="text" name="quantity5" value="1" 
                                        style="
                                            margin-top:2px;
                                            margin-right:2px;
                                            width:50px;
                                            padding:5px;
                                            height:20px;
                                            float:left;
                                            color:black;
                                        ">
                                    <input type="submit" name="buy5" value="Buy">
                                    <small style="color:green;">
                                        <?php
                                            if(isset($_POST["buy5"])){
                                                if ($conn->query($sql) === TRUE) {
                                                    echo "Item sent to cart";
                                                } 
                                            }
                                        ?>
                                    </small>
                                </span>
                                <span class="product"><img src="images/anton-SZ1DDwCPqkE-unsplash.jpg" alt="product#2"/></span>
                                <span class="description">
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">ID:</bold><?php echo $product_id2 ?></p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Name:</bold><?php echo $product_name2 ?></p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Price:</bold><?php echo $product_price2 ?>GHC</p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Qty avail:</bold><?php echo $product_qty_avail2 ?></p>
                                    <input type="text" name="quantity2" value="1" 
                                        style="
                                            margin-top:2px;
                                            margin-right:2px;
                                            width:50px;
                                            padding:5px;
                                            height:20px;
                                            float:left;
                                            color:black;
                                        ">
                                    <input type="submit" name="buy2" value="Buy">
                                    <small style="color:green;">
                                        <?php
                                            if(isset($_POST["buy2"])){
                                                if ($conn->query($sql) === TRUE) {
                                                    echo "Item sent to cart";
                                                } 
                                            }
                                        ?>
                                    </small>
                                </span>
                            </div> 
                            <div class="left-profile">
                                <span class="product"><img src="images/diana-polekhina-1SutQMy6UVU-unsplash.jpg" alt="product#3"/></span>
                                <span class="description">
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">ID:</bold><?php echo $product_id3 ?></p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Name:</bold><?php echo $product_name3 ?></p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Price:</bold><?php echo $product_price3 ?>GHC</p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Qty avail:</bold><?php echo $product_qty_avail3 ?></p>
                                    <input type="text" name="quantity3" value="1" 
                                        style="
                                            margin-top:2px;
                                            margin-right:2px;
                                            width:50px;
                                            padding:5px;
                                            height:20px;
                                            float:left;
                                            color:black;
                                        ">
                                    <input type="submit" name="buy3" value="Buy" >
                                    <small style="color:green;">
                                        <?php
                                            if(isset($_POST["buy3"])){
                                                if ($conn->query($sql) === TRUE) {
                                                    echo "Item sent to cart";
                                                } 
                                            }
                                        ?>
                                    </small>
                                </span>
                                <span class="product"><img src="images/pam-menegakis-12yQhBE8nUc-unsplash.jpg" alt="product#4"/></span>
                                <span class="description">
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">ID:</bold><?php echo $product_id4 ?></p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Name:</bold><?php echo $product_name4 ?></p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Price:</bold><?php echo $product_price4 ?>GHC</p>
                                    <p style="width:150px; display:block;"><bold style="font-weight:600; margin-right:5px;">Qty avail:</bold><?php echo $product_qty_avail4 ?></p>
                                    <input type="text" name="quantity4" value="1" 
                                        style="
                                            margin-top:2px;
                                            margin-right:2px;
                                            width:50px;
                                            padding:5px;
                                            height:20px;
                                            float:left;
                                            color:black;
                                        ">
                                    <input type="submit" name="buy4" value="Buy" >
                                    <small style="color:green;">
                                        <?php
                                            if(isset($_POST["buy4"])){
                                                if ($conn->query($sql) === TRUE) {
                                                    echo "Item sent to cart";
                                                } 
                                            }
                                        ?>
                                    </small>
                                </span>
                            </div>                  
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!---Chat Bar Block-->
        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible"> Chat with Us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
            </button>
            <div class="content">
                <div class="full-chat-block">
                    <!--Message Container-->
                    <div class="outer-container">
                        <div class="chat-container">
                        <!--Message-->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading.....</span></p>
                        </div>
            
                        <!---User Input box-->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                            <input type="text" id="textInput" class="input-box" name="msg" placeholder="Tap 'Enter' to send a message">
                            <p></p>
                            </div>
                            <div class="chat-bar-icons">
                            <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                            onclick="heartButton()"></i>
                            <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                            onclick="sendButton()"></i>
                            </div>
                        </div>
                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="top">
                <div><a href="index.php"><img src="images/diabetes2.png" alt="logo"/></a><p>D H S</p></div>
                <div class="right">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="pricing.php">Pricing</a>
                    <a href="contact.php">Contact</a>
                    <a href="#event">Events</a>
                </div>
                <div class="left">
                    <a href="#top">To top</a>
                    <a href="register.php">Register</a>
                    <a href="login.php">Login</a>
                </div>
            </div>
            <div class="bottom">
                Copyright &copy; DHS 2021
            </div>
        </footer>
        <script src="javascript/myscript.js"></script>   
        <script src="https://kit.fontawesome.com/20ada9a44a.js" crossorigin="anonymous"></script> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="javascript/responses.js"></script>
        <script src="javascript/chat.js"></script>
    </body>
</html>