<!DOCTYPE html>
<html lang="en">

@include('layouts-auth.header')

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-primary">
                            <div class="section-body">
                                <h2 class="section-title">Pendaftaran Berhasil</h2>
                                <p class="section-lead mt-2">Terima kasih atas kepercayaan anda karena telah mendaftar Toefl pada laman kami. <br>
                                selanjutnya silahkan cek secara berkala email @if ($message = Session::get('email')) <b>{{ $message }}</b> @else anda @endif untuk mendapatkan update informasi terkait pendaftaran anda.</p>
                                <div class="card-header ml-4">
                                    <h4><a href="/"> <span class="fa fa-arrow-left"></span> Kembali</a></h4>
                                </div>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                        @include('layouts-auth.footer')
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts-auth.script')

</body>

</html>
