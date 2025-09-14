@extends("layouts.user")
@section("content")

    <!-- start page-title-wrapper -->
    <div class="page-title">
        <div class="container">
            <h1>Kontak BARATALA</h1>
        </div>
    </div>
    <!-- end page-title-wrapper -->

    <!-- start of contact-section -->
    <section class="contact-section">
        <div class="contact-map" id="map"></div>
        <div class="container">
            <div class="row">
                <div class="col col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6">
                    <div class="contact-form">
                        <h3>Form Kontak</h3>
                        <ul>
                            <li><i class="fa fa-home"></i> Tanah Laut, Kalimantan Selatan, Indonesia</li>
                            <li><i class="fa fa-envelope-o"></i> info@baratala.co.id</li>
                            <li><i class="fa fa-phone"></i> +62 8xx-xxxx-xxxx</li>
                        </ul>

                        <h4>Kirim Email</h4>
                        <form class="form contact-validation-active" id="contact-form">
                            <div>
                                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div>
                                <textarea name="note" class="form-control" placeholder="Pesan"></textarea>
                            </div>
                            <div class="submit">
                                <button type="submit">Kirim</button>
                                <span id="loader">
                                    <img src="{{ asset('assets/images/contact-ajax-loader.gif') }}" alt="Loader">
                                </span>
                            </div>
                            <div class="error-handling-messages">
                                <div id="success">Terima kasih, pesan Anda telah terkirim.</div>
                                <div id="error">Terjadi kesalahan saat mengirim. Silakan coba lagi.</div>
                            </div>
                        </form>

                        {{-- Opsional: Jam operasional --}}
                        <div style="margin-top:15px;">
                            <strong>Jam Operasional:</strong> Senin–Jumat, 09.00–17.00 WITA
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end of contact-section -->

@endsection
