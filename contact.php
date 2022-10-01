<?php require("database_credentials.php");

    //create connection
    $conn = new mysqli(servername,username,password,dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
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
                    <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                    <a href="about.php"><i class="fab fa-font-awesome-flag"></i> About Us</a> 
                    <a href="pricing.php"><i class="fas fa-money-bill"></i> Pricing</a> 
                    <a href="contact.php" class="active" ><i class="fas fa-id-badge"></i> Contact</a>  
                </div>
                <div class="navdiv-2">
                    <form>
                        <input class="searchbox" type="search" placeholder="Search" aria-label="Search">
                        <a class="btn btn-outline-success" >Search</a>
                        <a class="btn btn-outline-success" href="register.php">Register</a>
                        <a class="btn btn-outline-success" href="login.php">Login</a>
                    </form>
                </div>
            </div>
            <div class="contact">
                <div>
                    <h2>Contact Us</h2>
                 </div>
            </div>
            <?php   
                if(isset($_POST["submit"])){
                    $fname = $_POST["firstname"];
                    $lname = $_POST["lastname"];
                    $location = $_POST["Location"];
                    $subject = $_POST["subject"];
                
                    //insert query
                    $sql = "INSERT INTO `contact-form`(`fname`, `lname`, `location`, `subject`) 
                    VALUES ('$fname','$lname','$location','$subject')";
                }

            ?>
            <div class="ccontainer">
                <form action="contact.php" method="post">
                    <h1 class="contact-h1"><strong>Please enter your details below and a representative will get back to 
                        you or call us instead (+233 559 551 799)</strong></h1>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                
                    <label for="location">Location</label>
                    <input type="text" id="location" name="Location" placeholder="Your current location">
                    
                
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    <small>
                        <?php
                            if(isset($_POST["submit"])){
                                if ($conn->query($sql) === TRUE) {
                                    echo "<p style='color:green;'>Message sent</p>";
                                } else {
                                    echo "<p style='color:red;'>Error sending message</p>";
                                }
                            }
                        ?>
                    </small>
                    <input type="submit" value="Submit" name="submit">
                </form>
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
                    <a href="index.php#event">Events</a>
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