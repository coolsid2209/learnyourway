<?php

session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Your Way</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.png" image/x-icon">

</head>

<body>

    <div class="container">

        <header >

            <a href="about.html" class="logo"><img src="icon.png">Learn<span>Your</span><span>Way</span></a>

            <div id="menu" class="fas fa-bars"></div>
            <nav class="navbar">
                <a href="pdf.html" target="_blank">Documents</a>
                <a href="Quizes.html" target="_blank">Quizes</a>
                <a href="price.html" target="_blank">Buy</a>
                <a href="dictionary.html" target="_blank">dictionary</a>
                <?php
                if($_SESSION['auth']==1){
                ?>
                &emsp;<i class="fas fa-user">&nbsp;<?php echo $_SESSION['name'];?></i>
                <a href="logout.php">Logout</a>


                <?php    
                }
                else{
                ?>
                <a href="login.html"><i class="fas fa-user"></i>&nbsp;Login/Signup</a>
                <?php
                }?>
            </nav>

        </header>

        <!-- home section  -->

        <section class="home">

            <div class="content">
                <h3>Start your journey of success
                    with us to make learning easier for you</h3>
                <marquee><h1>A Journey to Excellence....</h1></marquee>

            </div>

            <div class="image">
                <img src="pics/image1.png" alt="">
            </div>
            
            <!-- quiz section  -->
</br>


            <section class="test">
                <div class="choose">
                <h2> Quizes</h2>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                        <div class="flip-card-front">
                           
                                <img src="pics/html.jpeg" alt="" style="width:300px;height:300px;">
                                <center><a href="htmlquiz.html" class="btn" target="_blank">HTML Quiz</a></center>
                            
                        </div>
                <div class="flip-card-back">
                    </br>
            </br>
                    
                    <p>This quiz is about html</p>
                    <p>It checks your basic concept about this topic. </p>
                    <p>Before taking this test you can check our documentation section to get a overview about HTML</p>
            </br>
            <p>Hope this quiz helpful for you</p>
                </div>
                </div>
                </div>
                <div class="flip-card">
                <div class="flip-card-inner">
                        <div class="flip-card-front">
                            
                                <img src="pics/css.jpeg" alt="" style="width:300px;height:300px;">
                                <center><a href="cssquiz.html" class="btn" target="_blank">CSS Quiz</a></center>
                            
                        </div>
                <div class="flip-card-back">
            </br>
            </br>
                    
                    <p>This quiz is about css</p>
                    <p>It checks your basic concept about this topic. </p>
                    <p>Before taking this test you can check our documentation section to get a overview about CSS</p>
            </br>
            <p>Hope this quiz helpful for you</p>
                </div>
                </div>
                </div>
                
            </section>
           



            <!-- footer section  -->
           
            <section class="footer">
 </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                
            
                <div class="box-container">

                    <div class="box">
                        <h3>about us</h3>
                        <p>This, learn your way, is an e-learning site made 
                         for students who can't afford to buy every books.<a href="about.html">More</a></p>
                    </div>

                    <div class="box">
                        <h3>quick links</h3>
                          <a href="https://forms.gle/VAujcTNveiCkR1hr7" target="_blank">Feedback form</a>
                    </div>

                    <div class="box">
                        <h3>follow us</h3>
                        <a href="#">facebook</a>
                        <a href="#">twitter</a>
                        <a href="#">instagram</a>
                        <a href="#">linkedin</a>
                    </div>

                    <div class="box">
                        <h3>contact us</h3>
                        <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
                        <p> <i class="fas fa-envelope"></i>learnyourway@gmail.com </p>
                        <p> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </p>
                    </div>

                </div>


            </section>

    </div>
    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>