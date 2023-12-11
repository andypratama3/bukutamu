{{-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<style type="text/css">

body {
	background-image: url();
	background-repeat: no-repeat;
}
.style1 {
	color: #0000FF;
	font-style: italic;
}

</style></head>
</head>
<body>
<table width="1026" height="599" border="0" align="center">
  <tr>
    <th width="1020" height="108" background="img/head.png" scope="row"><table width="1023" height="82" border="0">
      <tr>
        <th width="166" scope="row"><div align="center"><img src="img/tut.png" alt="tut" width="104" height="100" /></div></th>
        <td width="193"><div align="center"><img src="img/tulisan.png" alt="lpmp" width="406" height="115" /></div></td>
        <td width="232"><div align="right"></div></td>
        <td width="414">&nbsp;</td>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th height="418" background="img/backgound.png" scope="row"><blockquote>
      <blockquote>
        <p align="center"><a href="index1.php"><img src="img/menu1.png" alt="menu1" width="375" height="130" border="0" /></a><a href="polling-Copy.php"><img src="img/menu2.png" alt="menu 2" width="375" height="130" border="0" /></a></p>
        <p align="center"><a href="http://192.168.1.2/perpus/index.php?p=form"><img src="img/menu3.png" alt="registrasi" width="375" height="130" border="0" /></a></p>
      </blockquote>
    </blockquote></th>
  </tr>
  <tr>
    <th height="38" bgcolor="#FFFF00" scope="row"><span class="style1"><marquee>Selamat Datang....... di Perpustakaan LPMP Kalimantan Timur .... </marquee></span></th>
  </tr>
</table>
<p>
<!DOCTYPE html>
<html>

<body>

	<style>
	h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}

	.jam-digital-malasngoding {
		overflow: hidden;
		width: 330px;
		margin: 20px auto;
		border: 5px solid rgba(0,0,255,0.4);
	}
	.kotak{
		float: left;
		width: 100px;
		height: 100px;
		background-color: rgba(212,250,0,0.4);
	}
	.kotak1{
		float: left;
		width: 15px;
		height: 100px;
		background-color: rgba(212,250,0,0.4);
	}
	.jam-digital-malasngoding p {
		color: rgba(0,0,255,0.9);
		font-size: 50px;
		text-align: center;
		margin-top: 30px;
	}

</style>

<div class="jam-digital-malasngoding">
	<div class="kotak">
		<p id="jam"></p>
	</div>
		<div class="kotak1">
		<p>:</p>
	</div>

	<div class="kotak">
		<p id="menit"></p>
	</div>
	<div class="kotak1">
		<p>:</p>
	</div>
	<div class="kotak">
		<p id="detik"></p>
	</div>
</div>

<script>
	window.setTimeout("waktu()", 1000);

	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
</script>
</body>
</html>
&nbsp;</p>
<p>&nbsp;</p>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            body{
                overflow: hidden;
            }
            h1,h2,p,a{
                font-family: sans-serif;
                font-weight: normal;
            }
            .container .bg-tengah {
                background: url('{{ asset('asset/img/backgound.png') }}') center center no-repeat; /* Replace 'path/to/your/background/image.jpg' with the actual path to your background image */
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
            .container .header .img-tulisan{
                color: #FFFF00;
                font-weight: bold;
                font-family: 'san-serif';
                width: 30%;
                text-align: center;
                display: inline-block;
                position: absolute;
                transform: translateX(-870px);
                margin-top: 6px;
                font-size: 30px;
            }
            .container .header .img-tut{
                width: 7%;
                text-align: center;
                display: inline-block;
                position: absolute;
                transform: translateX(-970px);
                margin-top: 20px;

            }
            .jam-digital-malasngoding {
                overflow: hidden;
                width: 340px;
                margin-top: 5px;
                border: 5px solid rgba(0,0,255,0.4);
            }
            .kotak{
                float: left;
                width: 100px;
                height: 100px;
                background-color: rgba(212,250,0,0.4);
            }
            .kotak1{
                float: left;
                width: 15px;
                height: 100px;
                background-color: rgba(212,250,0,0.4);
            }
            .jam-digital-malasngoding p {
                color: rgba(0,0,255,0.9);
                font-size: 50px;
                text-align: center;
                margin-top: 30px;
            }

        </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('asset/img/head.png') }}" alt="" class="img-head">
            <img src="{{ asset('asset/img/tulisan.png') }}" alt="" class="img-tulisan">
            <img src="{{ asset('asset/img/tut.png') }}" alt="" class="img-tut">
        </div>
        <div class="row bg-tengah" style="padding: 20px;">
            <div class="button-home">
                <div class="col-md-6 mt-5 box">
                    <div class="form-group" style="width: 45%; margin-right: 5%;">
                        <div class="card border-0" style="width: 25rem;" style="background: none;">
                            <a href="{{ route('buku.tamu.index') }}">
                                <img src="{{ asset('asset/img/menu1.png') }}" class="card-img-top" style="background: none;" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 box">
                    <div class="form-group" style="width: 45%; margin-right: 5%;">
                        <div class="card border-0" style="width: 25rem;" style="background: none;">
                            <a href="{{ route('survei.index') }}">
                                <img src="{{ asset('asset/img/menu2.png') }}" class="card-img-top" style="background: none;" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mx-3 mt-8">
            <div class="form-group" style="background-color: #FFFF00;">
                <marquee>Selamat Datang....... di Perpustakaan LPMP Kalimantan Timur .... </marquee>
            </div>
        </div>
        <center>
        <div class="jam-digital-malasngoding">
            <div class="kotak">
                <p id="jam"></p>
            </div>
                <div class="kotak1">
                <p>:</p>
            </div>

            <div class="kotak">
                <p id="menit"></p>
            </div>
            <div class="kotak1">
                <p>:</p>
            </div>
            <div class="kotak">
                <p id="detik"></p>
            </div>
        </div>
    </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

<script>
window.setTimeout("waktu()", 1000);

function waktu() {
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = waktu.getHours();
    document.getElementById("menit").innerHTML = waktu.getMinutes();
    document.getElementById("detik").innerHTML = waktu.getSeconds();
}
</script>
</html>
