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
                                <h2 class="section-title text-uppercase">Test Direction</h2>
                                <p class="section-lead mt-2">Please read the following passage below.</p>

                            </div>
                            <div class="card-body border mx-4">
                                <p class="card-text">1. In <b>LISTENING COMPREHENSION SECTION</b>, you will listen to two talks, and the answer 11 questions.</p>
                                <p class="card-text">2. In the <b>STRUCTURE & WRITTEN EXPRESSION SECTION</b>, you will read a passage and answer 14 questions.</p>
                                <p class="card-text">3. In the <b>READING COMPREHENSION SECTION</b>, you will read a paragraph and answer 14 questions.</p>
                                <p class="card-text">4. When you finish all three sections, you will see your score.</p>
                                <p class="card-text">5. When you are ready to begin test, click on the Next at the bottom right.</p>
                            </div>
                            <div class="card-footer mt-3 text-right">
                                <a href="http://127.0.0.1:8000/toefl-example-exam"><b>Next</b> <span class="fa fa-arrow-right"></span></a>
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
