@extends('layouts.dashboard.dashboard')
@section('title','Buku Tamu')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<link rel="stylesheet" href="{{ asset('asset/font-awesome-4.7.0/css/font-awesome.css') }}">
@endpush
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Data Buku Tamu</h4>
          <div class="row">
            <div class="col-4">
                <label for="">Tanggal Mulai</label>
                <div class="form-group">
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <label for="">Tanggal Selesai</label>
                <div class="form-group">
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <?php $years = range(2010, strftime("%Y", time())); ?>
                <label for="">Tahun</label>
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <?php foreach($years as $year) : ?>
                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
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
</div>
<input type="hidden" id="buku_tamuData" value="{{ route('get.dataBukuTamuDashboard') }}">
@push('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
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
        $('#bukuTamu_table').on('click', '#btn-delete', function () {
            var id = $(this).data('id');
            var url = '{{ route("dashboard.bukutamu.destroy", ":id") }}';
            url = url.replace(':id', id);
            swal({
                title: 'Anda yakin?',
                text: 'Data yang sudah dihapus tidak dapat dikembalikan!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    // Send a DELETE request
                    $.ajax({
                        url: url,
                        type: 'DELETE', // Use the DELETE method
                        success: function (data) {
                            reloadTable('#bukuTamu_table');
                            window.location.href = '{{ route("dashboard.bukutamu.index") }}'
                            // swal({
                            //     title: 'Berhasil',
                            //     text: data.success,
                            //     icon: 'success',
                            //     dangerMode: true,
                            // });
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
@endsection
