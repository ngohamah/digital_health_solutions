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
                    <a href="pricing.php" class="active" ><i class="fas fa-money-bill"></i> Pricing</a> 
                    <a href="contact.php"><i class="fas fa-id-badge"></i> Contact</a>  
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
            <div class="pricing">
                <div class="price-box-basic">
                    <h4>Basic plan</h4><hr>
                    <span>
                        <p>Access to the monthly margazines.</p><hr>
                        <p>Monthly Tele-Education Classes</p><hr>
                        <p>Blood Sugar Level Testing at health center</p><hr>
                        <p>Blood Sugar Level Testing at health center</p><hr>
                    </span>
                    <div class="subscribe-button">    
                        <a><p class="fees">Monthly Fees: $20<br>Yearly Fees: $240</p></a>
                        <a href="register.php" class="subscribe"> Monthly Subscription</a>
                        <a href="register.php" class="subscribe"> Yearly Subscription</a>
                    </div>
                </div>
                <div class="price-box-premium">
                    <h4>Premium plan</h4>
                    <span> 
                        <p>Basic plan plus</p><hr>
                        <p>Consultation with a Health Coach</p><hr>
                        <p>Face to Face Home Visits</p><hr>
                        <p>Consultation with a Self-care Specialist</p><hr>
                        <p>Virtual Exercise Classes</p><hr>
                        <p>Private Coaching Group</p><hr>
                        <p>Personalised Action Plan</p><hr>
                    </span>
                    <div class="subscribe-button">
                        <a> <p class="fees">Monthly Fees: $80<br>Yearly Fees: $900</p></a>
                        <a href="register.php" class="subscribe"> Monthly Subscription</a>
                        <a href="register.php" class="subscribe"> Yearly Subscription</a>
                    </div>
                </div>
                <div class="inbetween">
                </div>
            </div>
            <div class="testimonials">
                
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