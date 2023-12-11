@extends('layouts.app');
@section('title','Buku Tamu')
@section('content')
@push('css')
<style>
    h1,
    h2,
    p,
    a {
        font-family: sans-serif;
        font-weight: normal;
    }

    .container .bg-tengah {
        background: url('{{ asset('asset/img/backgound.png') }}') center center no-repeat;
        /* Replace 'path/to/your/background/image.jpg' with the actual path to your background image */
        background-size: cover;
        height: 400px;
    }

    .bg-tengah .button-home {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        align-items: center;
        gap: 2.5rem;
        margin-left: 5%;
        justify-items: center;
    }

    .container .header .img-head {
        width: 90%;
        margin-top: 0.5rem;
        height: 120px;
        margin-left: 50px;
        border-radius: 10px;
    }

    .container .header .img-tulisan {
        color: #FFFF00;
        font-weight: bold;
        font-family: 'san-serif';
        width: 30%;
        text-align: center;
        display: inline-block;
        position: absolute;
        transform: translateX(-1090px);
        margin-top: 6px;
        font-size: 30px;
    }

    .container .header .img-tut {
        width: 7%;
        text-align: center;
        display: inline-block;
        position: absolute;
        transform: translateX(-1170px);
        margin-top: 20px;

    }

    .container .header .img-home {
        width: 7%;
        text-align: center;
        display: inline-block;
        position: absolute;
        transform: translateX(-150px);
        margin-top: 20px;

    }
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<link rel="stylesheet" href="{{ asset('asset/font-awesome-4.7.0/css/font-awesome.css') }}">

@endpush
<div class="row row-not-refresh">
    <div class="container  text-center" style="">
        <div class="header">
            <img src="{{ asset('asset/img/head.png') }}" alt="" class="img-head">
            <img src="{{ asset('asset/img/tulisan.png') }}" alt="" class="img-tulisan">
            <img src="{{ asset('asset/img/tut.png') }}" alt="" class="img-tut">
            <a href="/">
                <img src="{{ asset('asset/img/home.png') }}" alt="" class="img-home">
            </a>

        </div>
    </div>
    {{-- <div class="container  text-center" style="">
        <a href="/">
            <img src="{{ asset('asset/img/home.png') }}" class="card-img-top" style="background: none; width: 10%;"
    alt="...">
    </a>
</div> --}}
{{-- Input Buku Tamu --}}
<div class="col-lg-5 grid-margin border-0 mb-3 mt-4">
    <div class="card" style="background: none;">
        <div class="card-body" id="buku_form">
            <h4 class="card-title text-center">Form Buku Tamu</h4>
            <form class="forms-sample" action="{{ route('buku.tamu.store') }}" method="POST" id="bukutamu_form">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') @enderror" name="name" value="{{ old('name') }}" id="name"
                        placeholder="Nama" />
                </div>
                <div class="form-group">
                    <label for="instansi">Instansi</label>
                    <input type="text" class="form-control" name="instansi" id="instansi" value="{{ old('instansi') }}" placeholder="Instansi" />
                </div>
                <div class="form-group">
                    <label for="hp">Nomor Hp</label>
                    <input type="text" class="form-control" name="hp" id="hp" value="{{ old('hp') }}" placeholder="Nomor Hp" />
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" class="form-control" name="tujuan" id="tujuan" value="{{ old('tujuan') }}" placeholder="Tujuan" />
                </div>
                <div class="form-group mt-2" style="float: inline-end;">
                    <button class="btn btn-danger mx-2" type="reset">Clear</button>
                    <button type="submit" class="btn btn-primary "> Submit </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Tabel Buku Tamu --}}
<div class="col-lg-7 grid-margin stretch-card mt-4" id="Buku_table">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Daftar Tamu</h4>
            {{-- <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <select name="" id="" class="form-control">
                            <option value="">A</option>
                            <option value="">A</option>
                            <option value="">A</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <select name="" id="" class="form-control">
                            <option value="">A</option>
                            <option value="">A</option>
                            <option value="">A</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <select name="" id="" class="form-control">
                            <option value="">A</option>
                            <option value="">A</option>
                            <option value="">A</option>
                        </select>
                    </div>
                </div>
            </div> --}}
            <div class="table-responsive">
                <table class="table" id="bukuTamu_table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Instansi</th>
                            <th>Hp</th>
                            <th>Tujuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modal_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" name="id" id="id_edit" />
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name_edit" placeholder="Nama" />
                </div>
                <div class="form-group">
                    <label for="instansi">Instansi</label>
                    <input type="text" class="form-control" name="instansi" id="instansi_edit" placeholder="Instansi" />
                </div>
                <div class="form-group">
                    <label for="hp">Nomor Hp</label>
                    <input type="text" class="form-control" name="hp" id="hp_edit" placeholder="Nomor Hp" />
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" class="form-control" name="tujuan" id="tujuan_edit" placeholder="Tujuan" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="update_data" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
<input type="hidden" id="buku_tamuData" value="{{ route('get.dataBukuTamu') }}">
@push('js')

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        function reloadTable(id) {
            var table = $(id).DataTable();
            table.cleanData;
            table.ajax.reload();
        }
        $('#bukuTamu_table').DataTable({
            ordering: true,
            pagination: true,
            deferRender: true,
            serverSide: true,
            responsive: true,
            processing: true,
            pageLength: 50,
            ajax: {
                'url': $('#buku_tamuData').val(),
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name',
                    orderable: true
                },
                {
                    data: 'instansi',
                    name: 'instansi',
                    orderable: true
                },
                {
                    data: 'hp',
                    name: 'hp',
                    orderable: true
                },
                {
                    data: 'tujuan',
                    name: 'tujuan',
                    orderable: true
                },
                {
                    data: 'options',
                    name: 'options',
                    orderable: false,
                    searchable: false
                }
            ],
        });
        $('.row-not-refresh').on('submit', '#bukutamu_form', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    reloadTable('#bukuTamu_table');
                    $('#buku_form').load(location.href + " #buku_form");
                    swal({
                        title: 'Berhasil',
                        text: response.success,
                        icon: 'success',
                        dangerMode: true,
                    });
                },
                error: function (error) {
                    if (error.responseJSON && error.responseJSON.errors) {

                        $.each(error.responseJSON.errors, function (key, value) {
                            $('#' + key).addClass('is-invalid');
                            $('#' + key + '_error').html('<div class="text-danger">' + value[0] + '</div>');
                        });
                    } else {
                        console.log(error);
                    }

                }
            });
        });
        $('#bukuTamu_table').on('click', '#button_edit', function (e) {
            var id = $(this).data('id');
            var url = '{{ route("buku.tamu.show", ":id") }}';
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id,
                },
                success: function (datBukuTamu) {
                    $('#id_edit').val(datBukuTamu.data.id);
                    $('#name_edit').val(datBukuTamu.data.name);
                    $('#instansi_edit').val(datBukuTamu.data.instansi);
                    $('#hp_edit').val(datBukuTamu.data.hp);
                    $('#tujuan_edit').val(datBukuTamu.data.tujuan);
                    $('#waktu_edit').val(datBukuTamu.data.waktu);
                },
            });
        });
        $('#update_data').on('click', function () {

            var id = $('#id_edit').val();
            var url = '{{ route("buku.tamu.update", ":id") }}';
            url = url.replace(':id', id);

            var formData = {
                name: $('#name_edit').val(),
                instansi: $('#instansi_edit').val(),
                hp: $('#hp_edit').val(),
                tujuan: $('#tujuan_edit').val(),
                waktu: $('#waktu_edit').val(),
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                type: 'PUT',
                data: formData,
                success: function (response) {
                    $('#modal_edit').modal('hide');
                    reloadTable('#bukuTamu_table');
                },
                error: function (error) {
                    console.error(error);
                },
            });
        });
        $('#bukuTamu_table').on('click', '#btn-delete', function () {
            var id = $(this).data('id');
            var url = '{{ route("buku.tamu.destroy", ":id") }}'; // Use the correct route name "destroy"
            url = url.replace(':id', id);
            swal({
                title: 'Anda yakin?',
                text: 'Data yang sudah dihapus tidak dapat dikembalikan!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    // Send a DELETE request
                    $.ajax({
                        url: url,
                        type: 'DELETE', // Use the DELETE method
                        success: function (data) {
                            reloadTable('#bukuTamu_table');
                            swal({
                                title: 'Berhasil',
                                text: data.success,
                                icon: 'success',
                                dangerMode: true,
                            });
                        },
                    });
                } else {
                    // If the user cancels the deletion, do nothing
                }
            });
        });

    });
</script>
@endpush
