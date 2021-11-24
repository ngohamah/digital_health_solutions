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
                    <a href="about.php" class="active" ><i class="fab fa-font-awesome-flag"></i> About Us</a> 
                    <a href="pricing.php"><i class="fas fa-money-bill"></i> Pricing</a> 
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
            <div class="about-us">
                <div>
                    <h2>Mission</h2>
                    <p>To deliver quality health care services for an improved healthy lifestyle.</p>
                </div>
                <div>
                    <h2>Vision</h2>
                    <p>To create a generation free from preventable chronic health diseases.</p>
                </div>
                <div>
                    <h2>What we do</h2>
                    <p>We are a digital health company with a health care platform where we help our registered members live a healthy 
                        lifestyle by reminding them to take their BP and blood sugar levels regularly, so when they enter the information, 
                        our system, in turn, alerts them if they are on the right track or not and our system also keeps a record of our 
                        patients' records and connects them to our health coaches. We also offer health tips for quality self-care quality assurance on our platform.</p>
                </div>
            </div>
            <div class="mtt-header">
                <h2>Meet the team</h2>
                <p>Meet some of our team members and advisors</p>
            </div>
            <div class="center-people">
                <h2>DHS Team</h2>
                <span><img src="images/testimonials-1.jpg" alt="image 1"/>
                   <p>EMO ETUC<br>co-founder & CTO</p>
                </span>
                <span><img src="images/testimonials-2.jpg" alt="image 1"/>
                    <p>ROPAFADZO SICHIWE <br>co-founder & CEO</p>
                 </span>
                 <span><img src="images/testimonials-3.jpg" alt="image 1"/>
                    <p>SAMANTHA MAVUNGA<br>Quality lead</p>
                 </span>
                 <span><img src="images/testimonials-4.jpg" alt="image 1"/>
                    <p>STEPHEN OFORI<br>Clinical lead</p>
                 </span>
            </div>
            <div class="center-people">
                <h2>Advisors</h2>
                <span><img src="images/testimonials-5.jpg" alt="image 1"/>
                    <p>TYRELL MARK<br>Venture Capital Expert</p>
                 </span>
                 <span><img src="images/advisor2.png" alt="image 1"/>
                    <p>MARK ROGERS<br>Product Design Expert</p>
                 </span>
                 <span><img src="images/advisor3.png" alt="image 1"/>
                    <p>ANDREW CHACHO<br>Healthcare Specialist</p>
                 </span>
                 <span><img src="images/advisor4.png" alt="image 1"/>
                    <p>EDWARD FLEMING <br>Technology expert</p>
                 </span>
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