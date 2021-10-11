<?php get_header(); ?>

    <!--START MAIN AREA-->
    <div class="main-area" id="home">
        <div class="main-area-bg"></div>

        <!--WELCOME AREA CONTENT-->
        <div class="welcome-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                        <div class="welcome-text text-center">
                            <div class="clock-countdown">
                                <div class="site-config" data-date="01/01/2022 00:00:00" data-date-timezone="+0"></div>
                                <div class="coundown-timer">
                                    <div class="single-counter"><span class="days">00</span><span class="normal">Хоног</span></div>
                                    <div class="single-counter"><span class="hours">00</span><span class="normal">Цаг</span></div>
                                    <div class="single-counter"><span class="minutes">00</span><span class="normal">Минут</span></div>
                                    <div class="single-counter"><span class="seconds">00</span><span class="normal">Секунд</span></div>
                                </div>
                            </div>
                            <h3>Hamtdaa</h3>
                            <h1 class="visible-xs">Coming Soon</h1>
                            <h1 class="hidden-xs cd-headline clip is-full-width">
                                <span class="cd-words-wrapper" style="width: 335.602px; overflow: hidden;">
                                    <b class="is-hidden">Coming Soon</b>
                                    <b class="is-hidden">Subscribe To</b>
                                    <b class="is-visible">Get Updates</b>
                                </span>
                            </h1>
                            <div class="subscriber-form">
								<?php echo do_shortcode('[mc4wp_form id="5"]'); ?>
                            </div>
                            <div class="home-button">
                                <a class="contact-button" href="#">Contact Us</a>
                                <a class="info-button" href="#">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-book-mark">
            <ul>
                <li><a href="https://www.facebook.com/ApprenticeMGL/" target="_BLANK"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/ApprenticeMGL/" target="_BLANK"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/apprentice.mn/" target="_BLANK"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="information-contact">
            <ul>
                <li><a class="contact-button" href="#"><i class="fa fa-envelope-o"></i></a></li>
                <li><a class="info-button" href="#"><i class="fa fa-info"></i></a></li>
            </ul>
        </div>
        <!--WELCOME AREA CONTENT END-->

        <!--LEFT CONTACT CONTENT-->
        <div class="left-contact-content" style="overflow: hidden; outline: currentcolor none medium;" tabindex="0">
            <div class="push-content-close"><i class="fa fa-close"></i></div>
            <div class="contact-address-and-details section-padding">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="logo text-center">
                            <img src="<?= get_template_directory_uri(); ?>/assets/logo_black.png" alt="">
                            <h3>The Company</h3>
                        </div>
                    </div>
                </div>
                <div class="contact-details">
                    <div class="col-md-12 col-xs-12">
                        <div class="area-title title-inverse">
                            <div class="title-box"></div>
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="single-contact">
                                <h4>Address:</h4>
                                <p>Chingeltai Duureg, 1r khoroo, Ulaanbaatar, Mongolia</p>
                            </div>
                            <div class="single-contact">
                                <h4>Email:</h4>
                                <p><a href="mailto:i@apprentice.mn">i@apprentice.mn</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="single-contact">
                                <h4>Website:</h4>
                                <p><a href="https://hamtdaa.app/">hamtdaa.app</a></p>
                            </div>
                            <div class="single-contact">
                                <h4>Phone:</h4>
                                <p><a href="tel:+97689192755">+976 8919-2755</a></p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="single-contact">
                                <h4>Follow Us On:</h4>
                                <ul>
									<li><a href="https://www.facebook.com/ApprenticeMGL/" target="_BLANK"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/ApprenticeMGL/" target="_BLANK"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/apprentice.mn/" target="_BLANK"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
						</div>
                    </div>
                    <p class="contact-hidding">Do You Need To Send A Personal Query ? Send Query Now !</p>
                </div>
                <div class="contact-form-area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <h4>Write Your Messge Here</h4>
                            <div class="contact-form">
                                <form action="process.php" id="contact-form" method="post">
                                    <div class="form-group" id="name-field">
                                        <div class="form-input">
                                            <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required="">
                                        </div>
                                    </div>
                                    <div class="form-group" id="email-field">
                                        <div class="form-input">
                                            <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required="">
                                        </div>
                                    </div>
                                    <div class="form-group" id="phone-field">
                                        <div class="form-input">
                                            <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Phone..">
                                        </div>
                                    </div>
                                    <div class="form-group" id="message-field">
                                        <div class="form-input">
                                            <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Message Here..." required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit">Send Message <i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--LEFT CONTACT CONTENT END-->

        <!--RIGHT ABOUT AREA-->
        <div class="right-details-content" style="overflow: hidden; outline: currentcolor none medium;" tabindex="1">
            <div class="push-content-close"><i class="fa fa-close"></i></div>
            <div class="about-area section-padding">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="area-title">
                            <div class="title-box"></div>
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="about-details">
                            <p>Lorem ipsum dolor sit amet, consectetur 
adipisicing elit. Quas aut quidem numquam! Molestias nisi odio itaque 
eaque vitae dolorem ipsum a, exercitationem laboriosam in quibusdam 
debitis sequi impedit quia officiis, esse ut fuga doloribus voluptas 
magnam quasi quo atque dolorum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur 
adipisicing elit. Quas aut quidem numquam! Molestias nisi odio itaque 
eaque vitae dolorem ipsum a, exercitationem laboriosam in quibusdam 
debitis sequi impedit quia officiis, esse ut fuga doloribus voluptas 
magnam quasi quo atque dolorum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-area padding-bottom">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="area-title">
                            <div class="title-box"></div>
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="single-service text-center">
                            <div class="servive-icon"><i class="fa fa-laptop"></i></div>
                            <h3>Branding</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aut quidem numquam! Molestias nisi odio.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="single-service text-center">
                            <div class="servive-icon"><i class="fa fa-line-chart"></i></div>
                            <h3>Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aut quidem numquam! Molestias nisi odio.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="single-service text-center">
                            <div class="servive-icon"><i class="fa fa-newspaper-o"></i></div>
                            <h3>Web Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aut quidem numquam! Molestias nisi odio.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="single-service text-center">
                            <div class="servive-icon"><i class="fa fa-camera-retro"></i></div>
                            <h3>Photography</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aut quidem numquam! Molestias nisi odio.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-area padding-bottom">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="area-title">
                            <div class="title-box"></div>
                            <h2>Our Project</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="single-gallery">
                            <div class="gallery-thumb">
                                <img src="<?= get_template_directory_uri(); ?>/assets/gallery-1.jpg" alt="">
                            </div>
                            <a href="https://quomodosoft.com/html/csoon/minimal/img/gallery/gallery-1.jpg" class="gallery-view" data-effect="mfp-zoom-in">
                                <h3>Branding Design</h3>
                                <p>Branding and illustration</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="single-gallery">
                            <div class="gallery-thumb">
                                <img src="<?= get_template_directory_uri(); ?>/assets/gallery-2.jpg" alt="">
                            </div>
                            <a href="https://quomodosoft.com/html/csoon/minimal/img/gallery/gallery-2.jpg" class="gallery-view" data-effect="mfp-zoom-in">
                                <h3>Branding Design</h3>
                                <p>Branding and illustration</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="single-gallery">
                            <div class="gallery-thumb">
                                <img src="<?= get_template_directory_uri(); ?>/assets/gallery-3.jpg" alt="">
                            </div>
                            <a href="https://quomodosoft.com/html/csoon/minimal/img/gallery/gallery-3.jpg" class="gallery-view" data-effect="mfp-zoom-in">
                                <h3>Branding Design</h3>
                                <p>Branding and illustration</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="single-gallery">
                            <div class="gallery-thumb">
                                <img src="<?= get_template_directory_uri(); ?>/assets/gallery-4.jpg" alt="">
                            </div>
                            <a href="https://quomodosoft.com/html/csoon/minimal/img/gallery/gallery-4.jpg" class="gallery-view" data-effect="mfp-zoom-in">
                                <h3>Branding Design</h3>
                                <p>Branding and illustration</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area dark-bg">
                <div class="footer-copyright text-center">
                    <p>Copyright © <a href="https://apprentice.mn">Apprentice.mn</a> All Right Reserved.</p>
                </div>
            </div>
        </div>
        <!--RIGHT ABOUT AREA END-->

    </div>
    <!--END MAIN AREA-->
	<?php get_footer(); ?>