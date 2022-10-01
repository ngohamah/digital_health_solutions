
<?php require("database_credentials.php");
     // Create connection
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
            <div class="register">
              <form onsubmit="return validate()" action="#" method="post">
            
                <div class="rcontainer">
                  <h1>Register</h1>
                  <p>Please fill in this form to create an account.</p>
                  <hr>
                  <label for="Firstname"><b>Firstname</b></label>
                  <input type="text" placeholder="Enter firstname" name="fname" id="fname" required>

                  <label for="Lastname"><b>Lastname</b></label>
                  <input type="text" placeholder="Enter Lastname" name="lname" id="lname" required>

                  <label for="Username"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

                  <label for="dob"><b>Date Of Birth</b></label>
                  <input type="date" placeholder="Enter date of birth" name="dob" id="dob" required>

                  <label for="Location"><b>Location</b></label>
                  <input type="text" placeholder="Enter Location" name="loc" id="loc" required>

                  <label for="phonenumber"><b>Phone Number</b></label>
                  <input type="text" placeholder="Enter Phone Numer" name="pnum" id="pnum" required>

                  <label for="sub_plan"><b>Choose Subscription Plan</b></label>
                  <select id="subs" name="subs">
                    <option value="basic-monthly">Basic Monthly ($20) </option>
                    <option value="basic-yearly">Basic Yearly ($240)</option>
                    <option value="premium-monthly">Premium Monthly ($80)</option>
                    <option value="premium-yearly">Premium Yearly ($900)</option>
                  </select>
                  
                  <label for="psw"><b>Password (8 characters minimum)</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" id="psw" minilength="8" required>

                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                  <small>
                      <?php
                        //query
                        if(isset($_POST['submit'])){
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $username = $_POST['uname'];
                            $dob = $_POST['dob'];
                            $location = $_POST['loc'];
                            $pnum = $_POST['pnum'];
                            $plan = $_POST['subs'];
                            $psw = $_POST['psw'];
                            $psw_repeat= $_POST['psw-repeat'];
                            
                            if($psw==$psw_repeat)
                            {
                                $sql="INSERT INTO `person`(`fname`, `lname`, `username`, `dob`, `location`, `contact`, `plan`, `pass`) VALUES ('$fname','$lname','$username','$dob','$location','$pnum','$plan','$psw')";
                                
                                if ($conn->query($sql) === TRUE) {
                                    header("location:login.php");
                                } else {echo "not connecting";}                               
                            }else{
                                echo "<p style='color:red;'Passwords don't match or some fields are empty</p>";
                            }  
                        }
                      ?>
                  </small>
                  <hr>
                  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                  <input type="submit" class="registerbtn" name="submit" value="Register"/>
                </div>
                <div class="rcontainer signin bg">
                  <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                </div>
              </form>
            </div>
            <?php $conn->close()?>
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
        <script type="text/javascript">

        function validate(){
            var fname=document.getElementById("fname");
            var lname=document.getElementById("lname");
            var psw=document.getElementById("psw");
    
            if (fname.value.trim()=="")
            {
                alert("Blank firstname");
                return false;
            }
            else if(lname.value.trim()=="")
            {
                alert("Blank lastname");
                return false;
            }

            else if(psw.value.trim().length<5)
            {
                alert("Password too short")
                return false;
            }

            else{
                return true
            }

        
            }        
        </script>

    </body>
</html>