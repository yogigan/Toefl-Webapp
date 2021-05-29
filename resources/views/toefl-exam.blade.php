<!DOCTYPE html>
<html lang="en">

@include('layouts-auth.header')

<style>
    .pointer {
        cursor: pointer;
    }

    .btn-inactive:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .open>.dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #6777ef;
    }

    .question {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    table {
        border-collapse: separate;
        border-spacing: 0 1em;
    }

</style>

<body>
    <div id="app">
        <canvas id="canv"></canvas>
        <div class="progress border shadow-sm" style="height: 15px; position: fixed; top: 0%; width: 100%; z-index: 99; background-color: #ffffff;">
            <div class="progress-bar" role="progressbar" style="width: 25%;"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <section class="section mt-4">
            <div class="m-3 ml-4">
                <div class="row">
                    <div class="col-12 justify-content-between row">
                        <div class="card card-primary col-md-9 box">
                            <div class="section-body">
                                    <h2 class="section-title">SECTION 1 LISTENING COMPREHENSION </h2>
                                <p class="section-lead">Time-approximately 35 minutes.</p>
                            </div>
                            <div class="card-body">
                                <div id="questions" class="question mb-2">
                                    <b>Questions number 1-5</b>
                                    <div class="gap-example player-accessible mt-3">
                                        <audio>
                                            <source
                                                src="https://greghub.github.io/green-audio-player/examples/audio/example-2.mp3"
                                                type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="row align-self-center border p-2 mt-3">
                                        <div>
                                            <div class="h6" id="questionNumber">1.</div>
                                        </div>
                                        <div class="col-11">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label id="label-A" class="form-check-label" for="A">
                                                    <img id="img-A">
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label class="form-check-label" for="A">
                                                    This morning he definitely wants some coffee.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label class="form-check-label" for="A">
                                                    The coffee tastes extremely good.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label class="form-check-label" for="A">
                                                    The coffee is much better this morning
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-self-center border p-2 mt-3">
                                        <div>
                                            <div class="h6" id="questionNumber">1.</div>
                                        </div>
                                        <div class="col-11">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label id="label-A" class="form-check-label" for="A">
                                                    <img id="img-A">
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label class="form-check-label" for="A">
                                                    This morning he definitely wants some coffee.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label class="form-check-label" for="A">
                                                    The coffee tastes extremely good.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label class="form-check-label" for="A">
                                                    The coffee is much better this morning
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-self-center border p-2 mt-3">
                                        <div>
                                            <div class="h6" id="questionNumber">1.</div>
                                        </div>
                                        <div class="col-11">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label id="label-A" class="form-check-label" for="A">
                                                    <img id="img-A">
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label class="form-check-label" for="A">
                                                    This morning he definitely wants some coffee.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label class="form-check-label" for="A">
                                                    The coffee tastes extremely good.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="A">
                                                <label class="form-check-label" for="A">
                                                    The coffee is much better this morning
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer mt-3">
                                <div class="row justify-content-between">
                                    <a href="http://127.0.0.1:8000/toefl-exam"> <span class="fa fa-arrow-left"></span>
                                        <b>Previous</b></a>
                                    <a href="http://127.0.0.1:8000/toefl-exam"><b>Next</b> <span
                                            class="fa fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary col-md-3" style="position:fixed; right: 1%;">
                        <div class="section-body">
                            <h2 class="section-title">Exam Information</h2>
                        </div>
                        <div class="card-body border mb-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>&nbsp; : &nbsp;</td>
                                        <td>Bachtiar Nur Yogi</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Ujian</td>
                                        <td>&nbsp; : &nbsp;</td>
                                        <td>09:00 - 12:00</td>
                                    </tr>
                                    <tr>
                                        <td>Durasi Ujian</td>
                                        <td>&nbsp; : &nbsp;</td>
                                        <td>30 menit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card card-primary col-md-3" style="position:fixed; right: 1%; top: 45%;">
                        <div class="section-body">
                            <h2 class="section-title">Navigation</h2>
                        </div>
                        <div class="card-body border mb-4">
                            <div class="row justify-content-between mx-2 my-3">
                                <span
                                    class="col-3 text-center btn-primary border border-primary rounded p-2 pointer">1-5</span>
                                <span
                                    class="col-3 text-center btn-inactive border border-primary rounded p-2 pointer">1-5</span>
                                <span
                                    class="col-3 text-center btn-inactive border border-primary rounded p-2 pointer">1-5</span>
                            </div>
                            <div class="row justify-content-between mx-2 my-3">
                                <span
                                    class="col-3 text-center btn-inactive border border-primary rounded p-2 pointer">1-5</span>
                                <span
                                    class="col-3 text-center btn-inactive border border-primary rounded p-2 pointer">1-5</span>
                                <span
                                    class="col-3 text-center btn-inactive border border-primary rounded p-2 pointer">1-5</span>
                            </div>
                            <div class="row justify-content-between mx-2 my-3">
                                <span
                                    class="col-3 text-center btn-inactive border border-primary rounded p-2 pointer">1-5</span>
                                <span
                                    class="col-3 text-center btn-inactive border border-primary rounded p-2 pointer">1-5</span>
                                <span
                                    class="col-3 text-center btn-inactive border border-primary rounded p-2 pointer">1-5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts-auth.footer')
    </div>
    </section>
    </div>

    @include('layouts-auth.script')

    <script src="{{ asset('assets/js/audio-player.js') }}"></script>
    <script src="{{ asset('assets/js/text-to-image.js') }}"></script>

    <script type="text/javascript">
        new GreenAudioPlayer('.gap-example');
        GreenAudioPlayer.init({
            selector: '.player',
            stopOthersOnPlay: true,
            enableKeystrokes: true
        });

    </script>

</body>

</html>
