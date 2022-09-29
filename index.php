<?php

if(isset($_POST['email']))
{
    $email = $_POST['email'];

    #use Phppot\Subscriber;

    require_once 'Model/subscribers.php';
    $subscriber = new Subscriber();
    $registrationResponse = $subscriber->subscribeEmail();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="cont1 container">
        <nav>
            <div class="logo">
                <img src="./assets/images/logo.jpeg" alt="" srcset="">
            </div>
            <div class="toggle"></div>
            <div class="navbar">
                <ul class="navbar_list">
                    <li><a href="#footer">contact us</a></li>
                    <li><a href="#priceing">priceing</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="./user-registration.php">signup</a></li>
                </ul>
            </div>
        </nav>
        <div class="header">
            <div class="headertext">
                <h1 class="abcd">WAKE UP!</h1>
                <h2>It's time to take action</h2>
                <p>Find affordable personal trainer worldwide and get personalized training in the palm of your hand</p>
                <form action="login.php" method="post">
                    <button type="submit">login here</button>
                </form>
            </div>
            <div class="headerimg">
                <img src="./assets/images/header_img.png" alt="">
                <img src="./assets/images/rocket.png" alt="" class="rocket">
                <img src="./assets/images/chat.png" alt="" class="chat">
            </div>
        </div>

    </div>


    <!-- javascript for toggling navbar -->
    <script>
        const toggle = document.querySelector('.toggle')
        const navbar = document.querySelector('.navbar')
        toggle.onclick = function() {
            toggle.classList.toggle('active')
            navbar.classList.toggle('active')
        }
    </script>

    <!-- second container -->
    <div class="cont2 container">

        <div class="textbox">
            <h2>WHAT'S INCLUDED?</h2>
            <p>Our 1-2-1 Personal Training Packages run for either 6 weeks initially, with the option to continuing on a
                month-to-month basis without any sticky long-term contracts, making our partnership entirely results
                driven</p>
        </div>

        <div class="cards">
            <div class="card card1">
                <img src="./assets/images/card1.png" alt="" srcset="">
                <div class="card_content">
                    <h5 style="padding-top:10px;">your trasformation roadmap</h5>
                    <p>where you and your coach will work together to break down your long term goals into step-by-step
                        targets, so there’s a crystal clear vision and path to take you away from frustration, and
                        towards your ideal physique, fitness, strength and energy levels</p>
                </div>
            </div>
            <div class="card card2">
                <img src="./assets/images/card2.png" alt="" srcset="">
                <div class="card_content">
                    <h5>100% bespoke programme design</h5>
                    <p>following an in-depth movement assessment and based on your roadmap. we don't do cookie-cutter,
                        everything is designed with your progress and lifstyle in mind</p>
                </div>
            </div>
            <dic class="card card2">
                <img src="./assets/images/card3.png" alt="" srcset="">
                <div class="card_content">
                    <h5 style="padding-top:10px;">1-2-1 neutrition coaching</h5>
                    <p>to ensure all the works your're putting in at the studio? is reflected by your results. without
                        the restritive diets or strict eating re-gimes-take back control and make progress on your
                        terms, with our expert, non-judgement guidance</p>
                </div>
            </dic>
        </div>
    </div>



    <!-- third container -->
    <div class="cont3 container">

        <h2>pricing</h2>

        <div class="cont3_cards" id="priceing">
            <div class="cont3_card">
                <img src="./assets/images/pricetag.png" alt="" srcset="">
                <h3>basic</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                <form action="login.php" method="post"><button type="submit">$150.00</button></form>
            </div>
            <div class="cont3_card">
                <img src="./assets/images/pricetag.png" alt="" srcset="">
                <h3>professional</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                <form action="login.php" method="post">
                    <button type="submit">$200.00</button>
                </form>
            </div>
            <div class="cont3_card">
                <img src="./assets/images/pricetag.png" alt="" srcset="">
                <h3>unlimited</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                <form action="login.php" method="post">
                    <button type="submit">$250.00</button>
                </form>
            </div>
        </div>
    </div>


    <!-- fourth container -->
    <div class="cont4 container" id="features">

        <div class="leftimg">
            <img src="./assets/images/bcg1.png" alt="" srcset="">
        </div>
        <div class="rightcontent">
            <h1>athlete check-ins every 6-8 weeks</h1>
            <p>to review exactly where we’re at compared to our vision set within the Transformation Roadmap- so we can keep you 100% on track, and make any adjustments we need so life never gets in the way of you and your goals again​.</p>
        </div>
        <div class="leftcontent">
            <h1>a covid-secure training environment</h1>
            <p>being a private,client-only studio gives us the chance to be head and shoulders above the industry standards with mask upon entry, social disancing protocos ad-hered to (so you don't need to weare a mask when training!). no sharing of equipment, disinfecting systems between sessions and ample sanitizer stations around the gym, we put your health and safety first.</p>
        </div>
        <div class="rightimg">
            <img src="./assets/images/bcg2.png" alt="" srcset="">
        </div>
    </div>


    <!-- fifth container -->
    <div class="cont5 container">
        <h1>our statistics</h1>
        <div class="numbers">
            <div class="count">
                <h1>1240+</h1>
                <p>Club</p>
            </div>
            <div class="count">
                <h1>2000+</h1>
                <p>Active Member</p>
            </div>
            <div class="count">
                <h1>1.000+</h1>
                <p>Community</p>
            </div>
        </div>
    </div>


    <!-- sixth container -->
    <div class="cont6 container">
        <p>personal training is an ideal choice for busy men and women that are tired of not looking or feeling happy
            with their health, strength & physique, and feel ready to invest in themselves for the fastest. most
            effective results possible.</p>
        <h2>1-2-1 <br /> personal training</h2>
    </div>

    <!-- seventh container -->
    <div class="cont7 container" id="footer">
        <div class="subscribe">
            <h1>SUBSCRIBE</h1>

            <form name="subscribe" action="" method="post">
                <input type="email" placeholder="Your Email" name="email" id="email">
                <button name="subscribe" id="subscribe">subscribe</button>
            </form>
            <!-- <script type="text/javascript">
        console.log("<?php echo "$email" ?>");
    </script> -->

        </div>
        <div class="footer">
            <div class="info footeritems">
                <div class="textcontent">
                    <h2>1-2-1 personal training</h2>
                    <p>never fiil "out of shape" again. Personal Training with us allows you to not only hit your short
                        termg goals (whether it's feeling confident on the beach, fitting back into clothes that have
                        been relegated to the back of the wardrobe, or anything in between),but you'll also have the
                        tools to ensure the chages you make with us? you can maintain, and build upon for life.</p>
                </div>
                <div class="footer-icons">
                    <img class="footer-logos" src="./assets/images/Instagram.png" alt="">
                    <img class="footer-logos" src="./assets/images/Facebook.png" alt="">
                    <img class="footer-logos" src="./assets/images/Twitter.png" alt="">
                    <img class="footer-logos" src="./assets/images/WhatsApp.png" alt="">
                </div>
            </div>
            <div class="about footeritems">
                <h2>ABOUT</h2>
                <ul class="list">
                    <li><a href="">History</a></li>
                    <li><a href="">Our Team</a></li>
                    <li><a href="">Brand Guidelines</a></li>
                    <li><a href="">Terms & Condition</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="services footeritems">
                <h2>SERVICES</h2>
                <ul class="list">
                    <li><a href="">How to Order</a></li>
                    <li><a href="">Our Product</a></li>
                    <li><a href="">Payment Method</a></li>
                </ul>

            </div>
            <div class="other footeritems">
                <h2>OTHER</h2>
                <ul class="list">
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Privacy</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>