@extends('layouts.app');
@section('title','Survei')
@section('content')
@push('css')
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
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
 @media (max-width: 768px)  {
        .container .header .img-head{
            margin: 20px;
        }
        .container .header .img-home{
            margin-top: 30px;
            width: 12%;
        }
        .container .header .img-tulisan{
            transform: translateX(-559px);
            margin-top: 25px;
            width: 50%;
            display: inline-flex;
        }
        .container .header .img-tut{
            transform: translateX(-659px);
            margin-top: 30px;
            width: 12%;
            display: inline-flex;
            justify-items: center;
        }

    }
    @media (max-width:961px)  { /* tablet, landscape iPad, lo-res laptops ands desktops */
        .container .header .img-home{
            margin-top: 30px;
            width: 12%;
        }
        .container .header .img-tulisan{
            transform: translateX(-600px);
            margin-top: 20px;
            width: 50%;

        }
        .container .header .img-tut{
            transform: translateX(-660px);
            margin-top: 40px;
            width: 10%;
            display: inline-flex;
            justify-items: center;
        }
    }
    .row .card .card-body .survei_icon {
        font-size: 6rem;
        margin: 20px;
        display: flex;
    }
        .animasi_icon {
        animation-name: cssAnimation;
        animation-duration: 3s;
        animation-iteration-count: 1;
        animation-timing-function: ease-in-out;
        animation-fill-mode: forwards;
        opacity: 1;
        }

        @keyframes cssAnimation {
        from {
            transform: scale(1);
            opacity: 1;
        }
        to {
            transform: scale(2);
            opacity: 0.5;
        }
        }



</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<link rel="stylesheet" href="{{ asset('asset/font-awesome-4.7.0/css/font-awesome.css') }}">

@endpush
<div class="row row-not-refresh">
    {{-- <div class="container  text-center" style="">
        <div class="header">
            <img src="{{ asset('asset/img/head.png') }}" alt="" class="img-head">
            <img src="{{ asset('asset/img/tulisan.png') }}" alt="" class="img-tulisan">
            <img src="{{ asset('asset/img/tut.png') }}" alt="" class="img-tut">
            <a href="/">
                <img src="{{ asset('asset/img/home.png') }}" alt="" class="img-home">
            </a>

        </div>
    </div> --}}
    {{-- <div class="container  text-center" style="">
        <a href="/">
            <img src="{{ asset('asset/img/home.png') }}" class="card-img-top" style="background: none; width: 10%;"
    alt="...">
    </a>
</div> --}}
{{-- Input Survei --}}
<div class="col-lg-12  d-flex justify-content-center grid-margin border-0 mb-3 mt-4">
    <div class="card" style="background: none;">
        <div class="card-body " id="buku_form">
            <h4 class="card-title text-center">Bagaimana pendapat Anda tentang <strong>Perpustakaan ? </h4>
            <div class="col-md-1 d-flex justify-content-between gap-10">
                <div class="form-group text-center ">
                    <i class="survei_icon em em-anguished"></i>
                    <label for="" id="text-content1">Buruk</label>
                </div>
                <div class="form-group text-center">
                    <i class="survei_icon em em-blush"></i>
                    <label for="" id="text-content2">Baik</label>
                </div>
                <div class="form-group text-center">
                    <i class="survei_icon em em-smiley"></i>
                    <label for="" id="text-content3">Cukup</label>
                </div>
                <div class="form-group text-center">
                    <i class="survei_icon em em-heart_eyes"></i>
                    <label for="" id="text-content4">Sangat Baik</label>
                </div>
            </div>
            <div class="col-md-12 mt-4 text-center">
                <p id="show-text" class="text-center"></p>
            </div>
        </div>
    </div>
</div>
{{-- Tabel Buku Tamu --}}
{{-- <div class="col-lg-12 yygrid-margin stretch-card mt-4" id="Buku_table">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Survei Kepuasan</h4>
            <div class="form-group">
                <label for="">Sangat Baik</label>
                <i class="em em-heart_eyes"></i>

            </div>
            <div class="form-group">
                <label for="">Cukup</label>
                <i class="em em-smiley"></i>
            </div>
            <div class="form-group">
                <label for="">Baik</label>
                <i class="em em-blush"></i>
            </div>
            <div class="form-group ">
                <label for="">Buruk</label>
                <i class="em em-anguished"></i>
            </div>
        </div>
        <table class="table">
            <tr>

                <label for="">Sangat Baik</label>
                <i class="em em-heart_eyes"></i>
                <div class="progress"></div>
            </tr>
        </table>
        <tbody>
            <tr>

            </tr>
        </tbody>
    </div>
</div> --}}
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card mx-5">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td>Sangat Baik <i class="em em-heart_eyes"></i>    : </td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $percent_sangatBaik }}%;" aria-valuenow="{{ $percent_sangatBaik }}" aria-valuemin="0" aria-valuemax="100">{{ $percent_sangatBaik ?? 0 }}%</div>
                      </div>
                </td>
              </tr>
              <tr>
                <td>Cukup <i class="em em-smiley"></i>  : </td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $percent_cukup }}%;" aria-valuenow="{{ $percent_cukup }}" aria-valuemin="0" aria-valuemax="100">{{ $percent_cukup ?? 0 }}%</div>
                      </div>
                </td>
              </tr>
              <tr>
                <td>Baik <i class="em em-blush"></i>  : </td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $percent_baik }}%;" aria-valuenow="{{ $percent_baik }}" aria-valuemin="0" aria-valuemax="100">{{ $percent_baik ?? 0 }}%</div>
                      </div>
                </td>
              </tr>
              <tr>
                <td>Buruk <i class="em em-anguished"></i>  : </td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $percent_buruk }}%;" aria-valuenow="{{ $percent_buruk }}" aria-valuemin="0" aria-valuemax="100">{{ $percent_buruk ?? 0 }}%</div>
                      </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@push('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    $(document).ready(function () {
        function reaction(selectedOption) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('survei.store') }}",
                data: {
                    option: selectedOption
                },
                dataType: "json",
                success: function (response) {
                    const text_content = 'Terima Kasih Atas Tanggapan Anda, Anda Memilih ';
                    $('.table-responsive').load(location.href + " .table-responsive");
                    if(response.success === 1){
                        $('.em-anguished').addClass('animasi_icon');
                        $('#show-text').text(text_content + 'Buruk');
                        setTimeout(function () {
                            $('.em-anguished').removeClass('animasi_icon');
                            $('#text-content1').removeClass('animasi_icon');
                        }, 3000);
                    }else if(response.success === 2){
                        $('.em-blush').addClass('animasi_icon');
                        $('#show-text').text(text_content + 'Baik');
                        setTimeout(function () {
                            $('.em-blush').removeClass('animasi_icon');
                            $('#text-content2').removeClass('animasi_icon');
                        }, 3000);
                    }else if(response.success === 3){
                        $('.em-smiley').addClass('animasi_icon');
                        $('#show-text').text(text_content + 'Cukup');
                        setTimeout(function () {
                            $('.em-smiley').removeClass('animasi_icon');
                            $('#text-content3').removeClass('animasi_icon');
                        }, 3000);
                    }else if(response.success === 4){
                        $('.em-heart_eyes').addClass('animasi_icon');
                        $('#show-text').text(text_content + 'Sangat Baik');
                        setTimeout(function () {
                            $('.em-heart_eyes').removeClass('animasi_icon');
                            $('#text-content4').removeClass('animasi_icon');
                        }, 3000);
                    }

                },
                error: function (error) {
                    // Handle AJAX errors here
                    console.error(error);
                }
            });
        }
        $('.survei_icon').click(function (e) {
            var selectedOption = $(this).next('label').text();
            if (selectedOption === 'Sangat Baik' || selectedOption === 'Buruk' || selectedOption === 'Baik' || selectedOption === 'Cukup') {
            reaction(selectedOption);
        }
        });
        setInterval(() => {
            window.location.href = '/';
        }, 120000);
    });
</script>
@endpush
