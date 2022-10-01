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
                        <a class="btn btn-outline-success" href="#">Search</a>
                        <a class="btn btn-outline-success" href="register.php">Register</a>
                        <a class="btn btn-outline-success" href="login.php">Login</a>
                    </form>
                </div>
            </div>
            <div class="slideshow-container">
                <div class="mySlides fade carousal-item">
                    <img src="images/slideshow1.jpg" style="width:100%; height:100%;">
                    <div class="text"><h3>We put the patient at the center </h3>
                        <p>According to WHO, more Africans are dying early from diseases like obesity, high blood pressure, 
                        diabetes and cancer. At the same time, our mental health is suffering with more people with untreated depression 
                        and anxiety than ever before.We aim to change that using proven evidence-based interventions at scale.</p>
                    </div>
                </div>
        
                <div class="mySlides fade carousal-item">
                    <img src="images/slideshow2.jpg" style="width:100%; height:100%;">
                    <div class="text"><h3>We love what we do</h3>
                    <p>Managing an illness or a long-term disease such as Diabetes or 
                        Hypertension can be challenging especially when you are 
                        confronted with the realities of daily living in the African context. 
                        Using evidence-based person-centered approaches, DHS has developed a platform 
                        of 24/7 support for you.</p>
                    </div>
                </div>

                <div class="mySlides fade carousal-item">
                    <img id="event" src="images/teemu-paananen-bzdhc5b3Bxs-unsplash.jpg" style="width:100%; height:100%;">
                    <div class="text"><h3>EVENTS</h3>
                    <p>We provide a series of events to raise awareness of the health necessities. Our events will 
                        get you started on the path to a healthier and potentially more productive lifestyle, 
                        as well as help you scale your impact through experiential learning and mentorship from 
                        qualified health changemakers.</p></div>
                </div>

            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            <div class="services">
                <div class="service-item"> 
                        <img src="images/alexandr-podvalny-WOxddhzhC1w-unsplash.jpg" alt="service01" class="item">
                        <span class="caption">
                            <h4>Blood Pressure</h4>
                            <p style="display:block; width:60%; margin:auto;margin-top:5px; line-height:1.5;">Our recommendations and tailored mentorship would fast track your health status<br><button>view details</button></p>
                        </span>
                </div>
                <div class="service-item">
                    <img src="images/anna-pelzer-IGfIGP5ONV0-unsplash.jpg" alt="service01" class="item"> 
                    <span class="caption">
                        <h4>Blood Sugar</h4>
                        <p style="display:block; width:60%; margin:auto;margin-top:5px; line-height:1.5;">Our recommendations and tailored mentorship would fast track your health status<br><button>view details</button></p>
                    </span>
                </div>
                <div class="service-item">
                    <img src="images/departments-1.jpg" alt="service01" class="item"> 
                    <span class="caption">
                        <h4>Health Tips</h4>
                        <p style="display:block; width:60%; margin:auto;margin-top:5px; line-height:1.5;">Get logged in doing small things that greatly improve your health.<br><button>view details</button></p>
                    </span>
                </div>
            </div>

            <div class="other">
                <hr>
                <h2 style="margin-top:30px;">Health Tips</h2>
                <div class="accordion">
                    <div class="accordion__question">
                        <p>+ Blood Pressure</p>
          
                    </div>
                    <div class="accordion__answer">
                        <table class="bp">
                            <tr class="first">
                                <th>Blood Pressure range</th>
                                <th>Category</th>
                                <th class="tip">Tip</th>
                            </tr>
                            <tr class="second">
                                <td>100/60 to 120/80mmHg</td>
                                <td>Normal</td>
                                <td>Congratulations! Your blood pressure is in the normal range. 
                                    Keep up the excellent work!</td>
                            </tr>
                            <tr>
                                <td>120/80 to 139/89mmHg</td>
                                <td>Borderline</td>
                                <td>Dear patient, your blood pressure is on the borderline. The 
                                    good news is, you can manage it back on track. Visit your nearest 
                                    health clinic for more information and contact your health coach for 
                                    self-care guidance.</td>
                            </tr>
                            <tr>
                                <td>140/90mmHg</td>
                                <td>High</td>
                                <td>Dear patient, your blood pressure is high. The good news is it can
                                    be reduced and managed. Please visit the nearest clinic for proper
                                    assessment and management. Do also contact your health coach for
                                    self-care guidance.</td>
                            </tr>
                        </table>
          
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion__question">
                        <p>+ Blood Sugar</p>
          
                    </div>
                    <div class="accordion__answer">
                        <table class="bp">
                            <tr class="first">
                                <th>Blood Glucose range</th>
                                <th>Status</th>
                                <th class="tip">Tip</th>
                            </tr>
                            <tr class="second">
                                <td>Below 100mg/dl</td>
                                <td>Not diabetic</td>
                                <td>Congratulations! Your blood glucose level is the normal range.</td>
                            </tr>
                            <tr>
                                <td>100-125mg/dl</td>
                                <td>Pre-diabetes</td>
                                <td>Your blood glucose level is moderately higher than the normal range.
                                     Please visit the nearby clinic for adequate guidelines on how to 
                                     keep your blood sugar levels within safer limits. Also contact your 
                                     health coach for self-care guidance.</td>
                            </tr>
                            <tr>
                                <td>126mg/dl and above</td>
                                <td>Diabetic</td>
                                <td>Dear patient, your blood glucose level is high and needs medical 
                                    attention. Please visit the nearest clinic for more assessment and 
                                    quality healthcare support. Also contact your health coach for self-care 
                                    guidance.</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="faqs">
                    <hr style="margin-top:30px; padding:0; ">
                    <h2 style="margin-top:20px;">FAQs</h2>
                    <div class="layout">
                        <div class="accordion">
                            <div class="accordion__question">
                                <p>How long can one be a member?</p>

                            </div>
                            <div class="accordion__answer">
                                <p>Either monthly or yearly depending on the subscription
                                    plan you choose.
                                </p>
                
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__question">
                                <p>How many hours can I spend with my health coach?</p>
                
                            </div>
                            <div class="accordion__answer">
                                <p>
                                    Typically, this is decided during your first meeting with your
                                    health coach.
                                </p>
                
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__question">
                                <p>How long has DHS been operating?</p>

                            </div>
                            <div class="accordion__answer">
                                <p>For the past 5 years</p>
                
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__question">
                                <p>How effective are the services offered by DHS</p>

                            </div>
                            <div class="accordion__answer">
                                <p>Typically, our patients start seeing improvement
                                    after the first 4 weeks of the program.
                                </p>
                
                            </div>
                        </div>
                    </div>
                    <hr style="margin:40px 0;">
                </div>
            </div>
            <div class="doctor">
                
                <!-- <img src="images/unplash01.jpg" alt="standing doctor" /> -->
                <span class="caption2">
                    <h4>Live a longer, healthier happier, life</h4>
                    <p style="display:block; width:60%; margin:auto;">Our framework incorporates elements from several evidence-based 
                        approaches including the Wagner Chronic Care model - improvement 
                        in health requires an approach that incorporates patient, provider, 
                        community and system level interventions.</p>
                </span>
            </div>
            <div class="partners">
                <h2> Partners & Recognition </h2>
                <div>
                    <img src="images/partner1.png" alt="" class="img-partner"/>
                    <img src="images/partner2.png" alt="" class="img-partner"/>
                    <img src="images/partner3.jpg" alt="" class="img-partner"/>
                    <img src="images/partner4.jpg" alt="" class="img-partner"/>
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
        <script>
            let answers=document.querySelectorAll(".accordion");
            answers.forEach((event)=>{
                event.addEventListener('click',()=>{
                    if(event.classList.contains("active")){
                        event.classList.remove("active");
                    }
                    else{
                        event.classList.add("active");
                    }
                })
            })
        </script>
        <script src="javascript/myscript.js"></script>   
        <script src="https://kit.fontawesome.com/20ada9a44a.js" crossorigin="anonymous"></script> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="javascript/responses.js"></script>
        <script src="javascript/chat.js"></script>
    </body>
</html> 