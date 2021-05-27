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
                                <h2 class="section-title">Pendaftaran Toefl</h2>
                                <p class="section-lead">Silahkan lengkapi form dibawah ini untuk mendaftar toefl.</p>
                                <div class="card-header">
                                    <h4>Form Pendaftaran</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" action="{{url('registerToefl')}}" method="post"
                                    novalidate>
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Lengkap *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="name" class="form-control" required
                                                placeholder="nama lengkap">
                                            <div class="invalid-feedback">
                                                Nama lengkap tidak boleh kosong.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                            </div>
                                            <input type="email" name="email" class="form-control phone-number" required
                                                placeholder="email">
                                            <div class="invalid-feedback">
                                                Email tidak boleh kosong / format email salah.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor HP *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                            </div>
                                            <input type="number" name="phone" maxlength="20"
                                                class="form-control phone-number" required placeholder="08xxxxxxxxxx">
                                            <div class="invalid-feedback">
                                                Nomor HP tidak boleh kosong.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jadwal *</label>
                                        <div class="input-group">
                                            <select class="form-control" name="schedule" required>
                                                <option selected disabled value="">-- Pilih Jadwal --</option>
                                                @foreach ($Schedule as $s)
                                                <option value="{{$s['id']}}">
                                                    {{date('d, F Y', strtotime($s['start_date']))}}
                                                    {{date('h:i', strtotime($s['start_date']))}}-
                                                    {{date('h:i', strtotime($s['end_date']))}} |
                                                    {{$s['title']}}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Jadwal tidak boleh kosong.
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input" id="agree"
                                                required>
                                            <label class="custom-control-label" for="agree">Saya setuju dengan syarat
                                                dan ketentuan.</label>
                                            <div class="invalid-feedback">
                                                Anda harus menyetujui syarat dan ketentuan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn btn-lg btn-primary text-white btn-block">DAFTAR</button>
                                    </div>
                                </form>
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
