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
                    <a href="/products" class="btn btn-warning">Lihat Menu</a>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/image/hero-image.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Tutor Section -->
    <div class="container text-center my-5">
        <h2 class="fw-bold text-decoration-underline">Langkah Sederhana</h2>
        <div class="row mt-4">
            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-sm-0 p-1">
                <div class="card">
                    <div class="card-body d-flex flex-sm-column flex-row align-items-center justify-content-evenly">
                        <i class="bi bi-cart-plus ukuran-ikon ikon-1"></i>
                        <h5 class="card-title">Pilih Produk</h5>
                    </div>
                </div>
            </div>  
            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-sm-0 p-1">
                <div class="card">
                    <div class="card-body d-flex flex-sm-column flex-row align-items-center justify-content-evenly">
                        <i class="bi bi-cash-stack ukuran-ikon ikon-2"></i>
                        <h5 class="card-title">Bayar Pesanan</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-sm-0 p-1">
                <div class="card">
                    <div class="card-body d-flex flex-sm-column flex-row align-items-center justify-content-evenly">
                        <i class="bi bi-box2-heart-fill ukuran-ikon ikon-3"></i>
                        <h5 class="card-title">Pengiriman</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-sm-0 p-1">
                <div class="card">
                    <div class="card-body d-flex flex-sm-column flex-row align-items-center justify-content-evenly">
                        <i class="bi bi-bag-heart-fill ukuran-ikon ikon-4"></i>
                        <h5 class="card-title">Nikmati Produk Kami</h5>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- Info Tutor Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about mb-5">
        <div class="container">
            <div class="section-header text-center mb-3">
                <h2 class="fw-bold text-decoration-underline">About Us</h2>
            </div>

            <div class="row gy-4">
                <div class="col-lg-6 about-img img-fluid" style="background-image: url(assets/image/gambar-rempeyek.jpg);">
                </div>
                <div class="col-lg-6 d-flex align-items-end">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            UMKM ILHAMUMTAZA Oleh-Oleh Jambi adalah UMKM makanan ringan yang menghadirkan cita rasa autentik Jambi ke dalam setiap produk. Berikut beberapa keunggulan yang dimiliki oleh ILHAMUMTAZA Oleh-Oleh Jambi. 
                        </p>
                        <ul>
                            <li>ILHAMUMTAZA menggunakan bumbu khas Langkok Jambi yang terbuat dari bahan-bahan alami terpilih untuk menciptakan rempeyek lezat, renyah, gurih dan sehat.
                            </li>
                            <li>Produk ILHAMUMTAZA Oleh-Oleh Jambi hadir di berbagai kota besar di Indonesia
                            </li>
                            <li>ILHAMUMTAZA Oleh-Oleh Jambi telah menerima sejumlah penghargaan yang merupakan bukti bahwa produk kami dihargai dan diterima oleh masyarakat.
                            </li>
                        </ul>
                        <p>
                            Kami berkomitmen untuk tetap terus berusaha menghadirkan variasi baru dan perubahan yang segar dalam produk kami. Kami memahami bahwa keberhasilan jangka panjang bergantung pada kemampuan kami untuk beradaptasi dengan perubahan selera dan preferensi pelanggan.
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
            <div class="section-header text-center mb-3">
                <h2 class="fw-bold text-decoration-underline">Contact</h2>
            </div>

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
                    <button type="submit" class="rounded-pill btn btn-danger">Send Message</button>
                </div>
            </form>
            <!--End Contact Form -->

        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Footer ======= -->
    
    <!-- End Footer -->
@endsection
