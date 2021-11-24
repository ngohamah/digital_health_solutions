<?php require("database_credentials.php");
    session_start();
    $uname=$_SESSION["uname"];

    $conn = new mysqli(servername,username,password,dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   

    /*get customer information */

    $sql = "Select person_id, fname, lname, username, dob, 
    location, contact, plan, pass from person where username='$uname'";

    $results= $conn->query($sql);
    
    $rows = mysqli_fetch_assoc($results);

    //get health personnel credentials
    if($results->num_rows==1){
        $pid=$rows["person_id"];
        $fname=$rows["fname"];
        $lname=$rows["lname"];
        $dob=$rows["dob"];
        $location=$rows["location"];
        $contact=$rows["contact"];
    }


    //getting infos from cart table
    $sql = "Select * from cart where cid='$pid'";
    $results = $conn->query($sql);

    //deleting from cart
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql ="DELETE FROM `cart` WHERE id='$id'";
        $conn->query($sql);
    }

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
        <style>
            th{padding:5px;  background-color: #04AA6D;}

            td{ padding:8px; border:1px solid gray;}

            tr{border:1px solid #04AA6D; }

            td a.btn{
                background:white;
                color:darkred;
                font-size:1.1em;
                padding:5px 20px;
                text-decoration:none;
                margin:auto;
            }

            .btn:hover{
                background-color:darkred;
                color:white;
            }
        </style>
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
                    <form action="messagecoach.php" method="post">
                        <div class="dashboard-healthstatus-special">
                            <span class="profile-pic"><img src="images/user-interface.png" alt="ui" class="profile-avatar"> </span> 
                            <div class="coach-profile">
                                <h4>Customer information</h4>
                                <span><label>Name:</label><p><?php echo $fname." ".$lname?></p></span>
                                <span style="margin-bottom:-15px; margin-top:10px;"><label style="margin-right:5px;">Date of birth:</label><?php echo $dob?></span>
                                <span><label>Location:</label><p><?php echo $location?></p></span>
                                <span><label>Contact:</label><p><?php echo $contact?></p></span>
                            </div>
                            <div class="left-profile" style="height:400px">
                                <h3>Cart</h3>
                                <span>
                                    <table style="
                                                width:90%;
                                                margin:auto;
                                                font-size:14px;
                                                border-collapse: collapse;
                                                padding:5px;
                                                border-radius:5px;
                                                margin:auto;
                                                
                                            "
                                        >
                                        <tr>
                                            <th>transactionID</th>
                                            <th>CustomerID</th>
                                            <th>ProductID</th>
                                            <th>Product_name</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        <tr>

                                        <?php
                                            $num = mysqli_num_rows($results);
                                            if($num>0){
                                                while($rows = mysqli_fetch_assoc($results)){
                                                    echo "
                                                        <tr style='text-align:center;'>
                                                            <td>".$rows['id']."</td>
                                                            <td>".$rows['cid']."</td>
                                                            <td>".$rows['pid']."</td>
                                                            <td>".$rows['name']."</td>
                                                            <td>".$rows['quantity']."</td>
                                                            <td>
                                                                <a href='cart.php?id=".$rows['id']."' class='btn'>Delete</a>
                                                            </td>
                                                        </tr>
                                                    ";
                                                }
                                            }
                                        ?>
                                    </table>
                                </span>
                                <span></span>
                            </div>
                            <input type="submit" name="release-cart" value="Release Cart" />
                        </div>
                    </form>
                </div>
            </div>
            <?php $conn->close() ?>
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