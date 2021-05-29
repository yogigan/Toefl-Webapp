<!DOCTYPE html>
<html lang="en">

@include('layouts-auth.header')

<body>
    <div id="app">
        <canvas id="canv"></canvas>
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-primary">
                            <div class="section-body">
                                <h2 class="section-title text-uppercase">1. LISTENING COMPREHENSION SECTION</h2>
                                <table class="section-lead mt-3 ml-5">
                                    <tbody>
                                        <tr>
                                            <td>Durasi Ujian</td>
                                            <td>&nbsp; : &nbsp;</td>
                                            <td>30 menit</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Soal</td>
                                            <td>&nbsp; : &nbsp;</td>
                                            <td>20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="card-header">
                                <h4>Listen to an example :</h4>
                            </div> --}}
                            <div class="card-body mx-2">
                                <div id="questions" class="question mb-3">
                                    <b>Listen to an example :</b>
                                    <p>On the recording, you will hear:</p>
                                    <div class="gap-example player-accessible mt-3">
                                        <audio>
                                            <source
                                                src="https://greghub.github.io/green-audio-player/examples/audio/example-2.mp3"
                                                type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                                <span>In your test, you will read:</span>
                                <div class="mb-3">
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
                                <p>You learn from the conversation that the man thought the exam was very difficult and
                                that the
                                woman disagreed with the man. The best answer to the question, "What does the woman
                                mean?" is
                                (D), "It wasn't that hard." Therefore, the correct choice is (D)</p>
                            </div>
                            <div class="card-footer mt-3 text-right">
                                <a href="http://127.0.0.1:8000/toefl-exam"><b>Start Exam</b> <span
                                        class="fa fa-arrow-right"></span></a>
                            </div>
                        </div>
                        @include('layouts-auth.footer')
                    </div>
                </div>
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
