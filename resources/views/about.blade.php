@extends('layouts.mainLayout')

@section('container')
    <div id="menu" class="menu p-4 page-hero text-center">
        <div class="section-header">
            <h2>{{ $page }}</h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center text-center text-sm-start">
            <div class="col-12 col-sm-6">
                <img src="assets/image/owner-ilhamumtaza-wider.jpeg" alt="Foto Owner Ilhamum-taza" height="400" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6">
                <p class="fs-3 fw-bold">Mengapa Memilih Kami?</p>
                <p>Ilhamum-Taza adalah UMKM makanan ringan di Jambi yang memiliki pengalaman dalam produksi dan pengolahan makanan seperti kerupuk. Kami menggunakan bumbu khas Langkok Jambi yang terbuat dari bahan-bahan alami yang dipilih dengan teliti. Dengan demikian, kami menghasilkan rempeyek yang lezat, renyah, gurih dan sehat</p>
                <a href="/products" class="btn btn-warning">Lihat Menu</a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <p class="fs-3 fw-bold">Mengapa Memilih Kami?</p> 
            </div>
            <div class="col-10 text-center lh-base">
                <p>UMKMILHAMMUM-TAZA Oleh-Oleh Jambi adalah sebuah UMKM makanan ringan seperti kerupuk yang telah berpengalaman sejak tahun 2004. UMKM ILHAMMUM-TAZA Oleh-Oleh Jambi adalah sebuah usaha mikro kecil menengah (UMKM) yang bergerak di bidang produksi makanan ringan khas Indonesia, yaitu rempeyek dan tempe. Diproduksi dan diolah dengan bumbu khas langkok Jambi dari bahan-bahan pilihan yang alami sehingga menghasilkan rempeyek yang enak, renyah, gurih dan sehat.</p>
                <p>Selalu mengikuti pola tren bisnis masa kini membuat UMKM ILHAMMUM-TAZA Oleh-Oleh Jambi berkembang sangat pesat, sekarang tak hanya bisa dinikmati masyarakat kota Jambi tapi telah ada di beberapa kota besar di Indonesia.. UMKM ILHAMMUM-TAZA Oleh-Oleh Jambi telah menerima banyak penghargaan, yang telah mendorong mereka untuk memajukan dan terus berinovasi. Tujuannya adalah agar produk mereka dapat dinikmati oleh semua kalangan masyarakat dengan harga yang sangat terjangkau.</p>

            </div>
        </div>
    </div>
@endsection
