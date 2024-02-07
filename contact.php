<?php
include("header.php");

?>


        <!-- page-title -->
        <section class="page-title p_relative centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-section -->
        <section class="contact-section pt_150 pb_150">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="content-box mr_70">
                            <div class="sec-title mb_45">
                                <h2>Contact with the team</h2>
                            </div>
                            <ul class="info-list clearfix">
                                <li>
                                    <div class="icon"><i class="icon-43"></i></div>
                                    <h4>Location</h4>
                                    <p>New Hyde Park, NY 11040</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="icon-4"></i></div>
                                    <h4>Phone no</h4>
                                    <p><a href="tel:913336660021" style="color:black;">(+91) 333 666 0021</a></p>
                                </li>
                                <li>
                                    <div class="icon"><i class="icon-2"></i></div>
                                    <h4>Email</h4>
                                    <p><a href="mailto:support@example.com" style="color:black;">support@example.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" action="final_email/email/mail.php" id="contact-form" class="default-form"> 
                                <div class="row clearfix">
                                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 form-group bg-white py-3 ">
                                        <input type="file" name="phone" required="" placeholder="Phone">
                                    </div> -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your email" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                        <button class="theme-btn btn-one shadow" type="submit" name="send"><span>Send Message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

        <!-- google-map-section -->
       
        <!-- google-map-section end -->


       <?php
       include("footer.php");
       ?>