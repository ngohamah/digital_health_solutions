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

    /*get health personnel assigned to the patient*/ 

    //getting patient id
    $sql = "Select person_id from person where username='$uname'";
    $results = $conn->query($sql);
    $rows = mysqli_fetch_assoc($results);
    $pid=$rows["person_id"];

    //getting health personnel id
    $sql="SELECT `patientID`, `healthpersonnelID` FROM `patient_healthpersonnel` WHERE `patientID`='$pid'";
    $results = $conn->query($sql);
    $rows = mysqli_fetch_assoc($results);
    $hid=$rows["healthpersonnelID"];

    //getting health personnel infos
    $sql = "Select person_id, fname, lname, username, dob, 
    location, contact, plan, pass from person where person_id='$hid'";

    $results= $conn->query($sql);
    
    $rows = mysqli_fetch_assoc($results);

    //get health personnel credentials
    if($results->num_rows==1){
        $person_id=$rows["person_id"];
        $fname=$rows["fname"];
        $lname=$rows["lname"];
        $dob=$rows["dob"];
        $location=$rows["location"];
        $contact=$rows["contact"];
        $plan=$rows["plan"];
        $pass=$rows["pass"];
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
                                <h4>Health Coach</h4>
                                <span><label>Name:</label><p><?php echo $fname." ".$lname?></p></span>
                                <span style="margin-bottom:-15px; margin-top:10px;"><label style="margin-right:5px;">Date of birth:</label><?php echo $dob?></span>
                                <span><label>Location:</label><p><?php echo $location?></p></span>
                                <span><label>Contact:</label><p><?php echo $contact?></p></span>
                            </div>
                            <div class="left-profile">
                                <h3>Message</h3>
                                <textarea placeholder="Start typing..." name="messagetocoach"></textarea>
                            </div>

                            <?php
                                //check if message has been sent.
                                if(isset($_POST["messagecoach"])){
                                    $messagetocoach = $_POST["messagetocoach"];

                                    //insert into table message to coach
                                    $sql = "INSERT INTO `patient_healthpersonnel`(`patientID`, `healthpersonnelID`, 
                                    `messageToHealthPersonnel`) VALUES ('$person_id','$hid','$messagetocoach')";                                    
                                }
                            ?>

                            <div class="messagetocoach">
                                <small style="display: block; width:80%; margin-right:5px; float:left;">
                                    <?php
                                        if(isset($_POST["messagetocoach"])){
                                            if ($conn->query($sql) === TRUE) {
                                                echo $messagetocoach;
                                            } else {
                                                echo "No recent message sent to coach. ";
                                            }
                                        }
                                    
                                        //code to delete message.
                                        if(isset($_POST["deletemessage"])){
                                            
                                            // sql to delete a record
                                            $sql = "UPDATE `patient_healthpersonnel` SET `messageToHealthPersonnel`='deleted'
                                            WHERE `patientID`='$pid'";
                                            
                                            $sql ="UPDATE `patient_healthpersonnel` SET `messageFromHealthPersonnel`='Love you too' WHERE `patientID`=1";

                                            if ($conn->query($sql) === TRUE) {
                                                echo "Previous message deleted";
                                            } else {
                                                echo "Error deleting record: " . $conn->error;
                                            }
                                        }
                                    ?>
                                </small>
                                <input type="submit" name="deletemessage" value="Delete" 
                                style="
                                    display:block;
                                    width:12%;
                                    min: height 25px;
                                    border-radius:20px;
                                    float:right;
                                    margin:0;
                                    padding:5px;
                                    background-color:red;
                                    border:none;
                                ">
                            </div>
                            <div class="messagefromcoach">
                                <small>
                                    <?php
                                        //check if coach has sent a message
                                        $sql="SELECT `messageFromHealthPersonnel` FROM `patient_healthpersonnel` WHERE `patientID`='$pid'
                                        AND `messageToHealthPersonnel`='$messagetocoach'";

                                        $results = $conn->query($sql);
                                        $rows = mysqli_fetch_assoc($results);
                                        $messagefromcoach=$rows["messageFromHealthPersonnel"];
                                        
                                        if ($messagefromcoach != NULL) {
                                            echo $messagefromcoach;
                                        } else {
                                            echo "No recent message from coach";
                                        }
                                    ?>
                                </small>
                            </div>
                            <input type="submit" name="messagecoach" value="Send Message" />
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