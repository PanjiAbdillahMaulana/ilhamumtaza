@extends('layouts.mainLayout')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg mt-md-5 mb-md-5">
        <div class="container mt-md-5">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 class="hero-title">
                        ILHAMUMTAZA<br>Oleh-Oleh Jambi
                    </h2>
                    <p>Menjual makanan ringan khususnya berbagai varian rempeyek dan keripik tempe</p>
                    <div class="d-flex">
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/image/hero-image.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about mb-5">
        <div class="container">
            <div class="section-header">
                <h2>About Us</h2>
                <p>Learn More <span>About Us</span></p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-7 about-img img-fluid" style="background-image: url(assets/image/owner.png) ;">
                </div>
                <div class="col-lg-5 d-flex align-items-end">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li>Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </li>
                            <li>Duis aute irure dolor in reprehenderit in voluptate velit.
                            </li>
                            <li>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.
                            </li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- end menu section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Contact</h2>
                <p>Need Help? <span>Contact Us</span></p>
            </div>

            <div class="mb-3">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.235917756383!2d103.60055101869735!3d-1.613741311823856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25890110b97bd1%3A0x4e479a27848d9d81!2sIlham%20Snack!5e0!3m2!1sen!2sid!4v1685282184412!5m2!1sen!2sid"frameborder="0"
                    allowfullscreen></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-map flex-shrink-0"></i>
                        <div>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-share flex-shrink-0"></i>
                        <div>
                            <h3>Opening Hours</h3>
                            <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                                <strong>Sunday:</strong> Closed
                            </div>
                        </div>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                <div class="row">
                    <div class="col-xl-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            <!--End Contact Form -->

        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            jln. M.Yamin, Lrg. Teladan, RT.31, RW No.58 <br>
                            Kec. Jelutung, Kota Jambi, Jambi 36124<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Contact Us</h4>
                        <p>
                            <strong>Phone:</strong> +62 81274238466<br>
                            <strong>Email:</strong> Ilhamumtaza@gmail.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 8AM</strong> - 4PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>ILHAMUMTAZA Oleh-Oleh Jambi</span></strong>. All Rights Reserved
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->
@endsection
