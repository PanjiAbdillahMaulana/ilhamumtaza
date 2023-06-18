@extends('layouts.mainLayout')

@section('container')
    <div id="menu" class="menu p-4 page-hero text-center">
        <div class="section-header">
            <h2>{{ $page }}</h2>
        </div>
    </div>
    <section id="contact" class="contact my-5">
        <div class="container" data-aos="fade-up">

            <div class="mb-3">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.235917756383!2d103.60055101869735!3d-1.613741311823856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25890110b97bd1%3A0x4e479a27848d9d81!2sIlham%20Snack!5e0!3m2!1sen!2sid!4v1685282184412!5m2!1sen!2sid"frameborder="0"
                    allowfullscreen></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center background-contact">
                        <div class="ms-3 bg-danger rounded-circle kotak d-flex align-items-center justify-content-center">
                            <i class="fs-1 bi bi-map flex-shrink-0"></i>
                        </div>
                        <div class="ms-2 mt-2">
                            <p class="h5">Our Address</p>
                            <p>Jln. M.Yamin, Kec. Jelutung, Kota Jambi, Jambi 36124</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center background-contact">
                        <div class="ms-3 bg-danger rounded-circle kotak d-flex align-items-center justify-content-center">
                            <i class="fs-1 bi bi-envelope flex-shrink-0"></i>
                        </div>
                        <div class="ms-2 mt-2">
                            <p class="h5">Email Us</p>
                            <p>Ilhamumtaza@gmail.com</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center background-contact">
                        <div class="ms-3 bg-danger rounded-circle kotak d-flex align-items-center justify-content-center">
                            <i class="fs-1 bi bi-telephone flex-shrink-0"></i>
                        </div>
                        <div class="ms-2 mt-2">
                            <p class="h5">Call Us</p>
                            <p>+62 81274238466</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center background-contact py-2">
                        <div class="ms-3 bg-danger rounded-circle kotak d-flex align-items-center justify-content-center">
                            <i class="fs-1 bi bi-clock flex-shrink-0"></i>
                        </div>
                        <div class="ms-2 mt-2">
                            <p class="h5">Opening Hours</p>
                            <div><strong>Mon-Sat:</strong> 8AM - 4PM;
                                <strong>Sunday:</strong> Closed
                            </div>
                        </div>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                <div class="row">
                    <div class="col-xl-6 form-group my-2">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-xl-6 form-group my-2">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group my-2">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group my-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="rounded-pill btn btn-danger p-3">Send Message</button>
                </div>
            </form>
            <!--End Contact Form -->

        </div>
    </section>
@endsection