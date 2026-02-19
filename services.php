<?php
session_start(); // Start a session to check if the user is logged in (if needed)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pour warmth into every sip with Cozy Cups</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="Servicesimg.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">🍵COZY CUPS</div>
            <ul>
                
                <li><a href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
            <div>
                <?php if (isset($_SESSION["user_id"])): ?>
                    <a href="../CozyCups/user_profile_manager.php">
    <button class="user-button">
        <img class="user" src="../CozyCups/images/user.png" alt="User Profile">
    </button>
</a>

                <?php else: ?>
                    
                    <a href="../signup.php"  style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Sign Up</a>
                    <br><a href="../index.php"  style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Log in</a>
                <?php endif; ?>
            </div>
            
    
           
        </nav>
    </header>

    <div class="service-card">
        <h3>The below services were crafted to make this site more user-friendly</h3>
        <div class="serviceinfo">
        <p>An user friendly platform where customers can search for items, customize and purchase mugs directly from the seller .This platform consist of a user friendly interface for customers and a uniquely designed back end for admins to manage inventory ,orders and customer data.  </p>
        
        <br>
        
            <div class="bulkordertxt">
            <img class="bulkorder" src="Servicesimg/bulk-order.png">
            <div class="abt-service">
                <br><br>
            
             <h4>Bulk Order and Corporate Services:</h4>
            <br>
            Bulk Ordering: If one offers discounts or services for bulk orders for events, corporate gifting, etc., they should highlight that. Also, mention how customers can place large orders.
            Corporate Branding: Indicate whether you have logo printing or other corporate branding services available to businesses.
            Example content:
            
            "Need to make a large order for your event or company? Cozy Cups has bulk discounts available and business custom branding. Let us put your logo or design onto our mugs to create the perfect gift or promotional item."
            </p>
            </div>
            
            </div>
            <br><br>

            <div class="Wrappingtxt">
                <div class="abt-service1">
                  <br><br>
            <p>
            <h4>Wrapping and Personalised Messages:</h4>
            
            Wrapping: If you have any wrapping service for gifts, introduce it here. Explain the different kinds of wrapping you might have, including eco-friendly wrapping, and if there is an additional cost for these.
            Personalised Messages: Give the customer the option to include personalized messages with their orders, especially for gifts.
            Example content:
            
            "Is it a gift? Make it extra special with our wrapping and personalized message options. Each mug is handsomely presented and ready to put a smile on someone's face."
            </p>  
                </div>
            
            <img class="Wrapping" src="Servicesimg/wrapping.jpg">
            </div>
            <br><br>

            <div class="Shippingtxt">
            <img class="Shipping" src="Servicesimg/shipping.jpg">
            <div class="abt-service">
                <br>
            <p>
            <h4>Shipping and Delivery Service:</h4>
            <br>
            Standard and Express Shipping: Include information about shipping options, timescales, and costs for both local and international deliveries.
            Order Tracking: Explain how customers can track their orders once they are dispatched. Include a link to the order tracking page if applicable.
            Free Shipping Threshold: Indicate whether free shipping is available for orders greater than a certain value threshold.
            Example Content:
            
            "We deliver your mugs with safety and on time. Select from one of our standard, express, or international varieties. Track your order all the way. Free shipping over £50."
            </p> 
            </div>
           
            </div>
            <br><br>


            <div class="Exchangetxt">
                <div class="abt-service1">
                   <br><br>
                <p>
                    <h4>Returns and Exchanges:</h4>
                <br>
                Return Policy: Clearly state your return or exchange policies in the event of faulty or damaged goods. Also, include guidelines a customer will follow in the process of initiating a return.
    Satisfaction Guarantee: Mention any satisfaction guarantees, such as providing a free replacement in case of an incorrect personalized design.
                
    "At Cozy Cups, customer satisfaction is number one. If you aren't satisfied with your purchase, we allow hassle-free returns and exchanges. Please contact us within 14 days of receipt of the mug."
                </p> 
                </div>
                
                <img class="Exchanges" src="Servicesimg/exchanges.avif">
                </div>
                <br><br>


                <div class="mugcaretxt">
                    <img class="mugcare" src="Servicesimg/mugcare.webp">
                    <div class="abt-service">
                       <br>
                    <p>
                       <h4> Mug Care Instructions:</h4>
                    <br>
                    Also, let them know how to maintain the mugs, whether they are dishwasher safe, how to use them in the microwave, and cleaning tips that can give a longer life to the mug.
    Example content:
                        
    "For keeping your mugs fresh, we recommend hand washing for custom designs. Our mugs are safe to use in the microwave unless otherwise stated."
                    </p> 
                    </div>
                    
                    </div>
                    <br><br>


                    <div class="customersupporttxt">
                        <div class="abt-service">
                          <br><br>
                        <p>
                           <h4> Customer Support:</h4>
                        <br>
                        Help Center: Provide a help center link or a frequently asked question section where customers can find more information about the products, placing orders, and how to manage their accounts.
                        Live Chat and Contact Information: Provide information regarding customer support-online chat, email address, or phone number where customers can make inquiries.
                        Example content:
                         
                         "Need help with your order? Have questions about our products? Contact our friendly customer service team via live chat, or email us at support ."
                            <br>
                           
                        </div>
                        </p>
                        <img class="customersupport" src="Servicesimg/customersupport.jpg">
                        </div>
                        <br><br>

            
                </div>
                </div>
    </section>

    <footer> 
        <br>
        &copy;2024 COZY CUPS. All Rights Reserved.
    </footer>
    
    <div style="background-color: rgb(156, 58, 28); height: 350px; width: 100%;">
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; column-gap: 10px; row-gap: 20px; margin-bottom: 30px;">
            <div>
                <h5>Information</h5>
                <a class="footbar" href="about.php">About us</a><br>
                <a class="footbar" href="about.php">Our story</a><br>
                <a class="footbar" href="about.php">Sustainability Commitment</a>
            </div>

            <div>
                <h5>Customer Service</h5>
                <a class="footbar" href="contact.php">Contact Us</a><br>
                <a class="footbar" href="">Email: support@cozycups.com</a><br>
                <a class="footbar" href="contact.php">FAQ's</a><br>
                <a class="footbar" href="services.php">Return Policy</a>
            </div>

            <div>
                <h5>Follow us</h5>
                <a class="footbar" href="contact.php">Facebook</a><br>
                <a class="footbar" href="contact.php">Threads</a><br>
                <a class="footbar" href="contact.php">X</a><br>
                <a class="footbar" href="services.php">Instagram</a>
            </div>

            <div>
                <h5>Legal Information</h5>
                <a class="footbar" href="privacy.php">Terms & Conditions</a><br>
                <a class="footbar" href="privacy.php">Privacy Policy</a><br>
                <a class="footbar" href="privacy.php">Cookie Policy</a><br>
            </div>

            <div>
                <h5>Accessibility</h5>
                <a class="footbar" href="contact.php">Accessibility Policy</a><br>
            </div>

            <div class="footerimgs">
                <img src="footerimgs/amex.png">
                <img src="footerimgs/applepay.jpg">
                <img src="footerimgs/mastercard.jpg">
                <img src="footerimgs/visa.png">
            </div>
        </div>
        <a href="services.php" class="cta-button">Explore Services</a>
    </div>

    <script src="app.js"></script>
</body>
</html>
