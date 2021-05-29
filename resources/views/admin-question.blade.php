<!DOCTYPE html>
<html lang="en">
@include('layouts-admin.header')

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            @include('layouts-admin.navbar')

            @include('layouts-admin.sidebar')

            <!-- Main Content -->
            <div class="main-content" style="min-height: 633px;">
                <section class="section">
                    <div class="section-header">
                        <h1>Soal Ujian</h1>
                    </div>
                    <div class="section-body">
                        <div class="d-flex justify-content-between">
                            {{-- <h2 class="section-title">Data Soal</h2> --}}
                            {{-- <p class="section-lead">
                                Examples for opt-in styling of tables (given their prevalent use in JavaScript plugins)
                                with Bootstrap.
                            </p> --}}
                            <select class="form-control col-3" id="section">
                                @foreach ($sections as $s)
                                <option value="{{$s['id']}}">{{$s['name']}}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-success mb-3 trigger--fire-modal-2" data-toggle="modal"
                                data-target="#modal" onclick="insert();">
                                <i class="fa fa-plus"></i> Tambah</button>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table id="table" class="table" style="cursor: pointer;">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 5%">No</th>
                                            <th scope="col">Pertanyaan</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div th:fragment="modal" class="modal fade bd-example-modal-lg" id="modal" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
                        aria-hidden="true" style="z-index:9999999">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nomor 1 - 5</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="insertForm" class="px-4">
                                    <div class="modal-body">
                                        <div class="form-group justify-content-between row">
                                            <div class="col-12">
                                                <div class="my-2">
                                                    <label class="col-form-label">Audio :</label>
                                                    <input type="file" id="id" class="form-control form-control-sm"
                                                    accept="audio/*">
                                                </div>
                                                <div class="my-2">
                                                    <label class="col-form-label">Nomor 1 :</label>
                                                    <input class="form-control form-control-sm value" type="text" id="question">
                                                </div>
                                                <div class="mt-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                            id="A">
                                                        <label id="label-A" class="form-check-label" for="A">
                                                            This morning he definitely wants some coffee.
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
                                                    <div class="row text-info ml-1">
                                                        <a class="form-check-label" href="#">
                                                            <i class="fa fa-plus"></i>
                                                            Tambah Jawaban.
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row text-info">
                                            <a class="form-check-label" href="#">
                                                <i class="fa fa-plus"></i>
                                                Tambah Soal.
                                            </a>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger text-white" style="cursor: pointer"
                                            onclick="hapus()"><span class="fa fa-trash fa-sm"></span> Hapus</a>
                                            <a class="btn btn-primary text-white" style="cursor: pointer"
                                            onclick="save()"><span class="fa fa-save fa-sm"></span> Simpan</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            @include('layouts-admin.footer')

        </div>
    </div>

    @include('layouts-admin.script')
    <script src="{{ asset('assets/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/summernote/summernote-audio.js') }}"></script>

    <script type="text/javascript">
        $(document).off('focusin.modal');
        var table = $('#table').DataTable({
            processing: true,
            serverside: true,
            ajax: {
                type: "GET",
                url: '{{ asset('/api/question/getAll') }}',
                // url: '{{ asset('/questions') }}',
            },
            columns: [{
                    "data": null,
                    "orderable": false
                },
                {
                    "data": "value"
                }
            ],
            order: []
        });
        table.on('order.dt search.dt', function () {
            table.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
        $('#table tbody').on('click',
            'td:nth-child(0), td:nth-child(1), td:nth-child(2), td:nth-child(3), td:nth-child(4)',
            function () {
                var data = table.row(this).data();
                var id = data["id"];
                alert(id)
            });

        function insert() {

        }

        function save() {
            var question = new Object();
            question.value = $('#value').summernote('code');
            $.ajax({
                url: '{{ asset('/api/question/save') }}',
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: JSON.stringify(question),
                contentType: "application/json; charset=utf-8",
                success: function () {
                    $('#table').DataTable().ajax.reload();
                    alert("Data berhasil disimpan");
                    $('#modal').modal('toggle');
                    document.getElementById('insertForm').reset();
                },
                error: function (errormessage) {
                    alert(errormessage.responseText);
                }
            });
        }

        $('.value').summernote({
            // toolbar: [
            //     ['style', ['style']],
            //     ['font', ['bold', 'underline', 'clear']],
            //     ['fontname', ['fontname']],
            //     ['color', ['color']],
            //     ['para', ['ul', 'ol', 'paragraph']],
            //     ['view', ['codeview']],
            //     ['insert', ['picture', 'audio']],
            // ],
            theme: 'monokai',
            toolbar: false,
            popover: {
                air: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']]
                ]
            },
            dialogsInBody: true,
        });

        $(".note-modal").on('shown.bs.modal', function (e) {
            $(".modal-title").text("");
        });

    </script>

</body>

</html>
