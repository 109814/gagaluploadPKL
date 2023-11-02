<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Verifikasi Akun anda</title>
</head>
<body>
     <p>
          Halo <b>{{$detail['name']}}</b> !
     </p>
     <br>
     <p>
          Data Diri anda
     </p>
     <table>
          <tr>
               <td>Nama</td>
               <td>:</td>
               <td>{{ $detail['name']}}</td>
          </tr>
          <tr>
               <td>NISN</td>
               <td>:</td>
               <td>{{ $detail['nisn']}}</td>
          </tr>
          <tr>
               <td>Kelas</td>
               <td>:</td>
               <td>{{ $detail['kelas']}}</td>
          </tr>
          <tr>
               <td>Jurusan</td>
               <td>:</td>
               <td>{{ $detail['jurusan']}}</td>
          </tr>
          <tr>
               <td>Esktrakurikuler</td>
               <td>:</td>
               <td>{{ $detail['eskul']}}</td>
          </tr>
          <tr>
               <td>Sebagai</td>
               <td>:</td>
               <td>{{ $detail['role']}}</td>
          </tr>
          <tr>
               <td>website</td>
               <td>:</td>
               <td>{{ $detail['website']}}</td>
          </tr>
          <tr>
               <td>tanggak Daftar</td>
               <td>:</td>
               <td>{{ $detail['datetime']}}</td>
          </tr>
          <br>
          <br>
          <br>
          <center>

               <h3>Klik di bawah ini Untuk Verifikasi aku anda : </h3>
               <a href="{{$detail['url']}}" style="text-decoration: none;color: rgbb(255,255,255); background-color:blue; font:bold; border-radius: 20%;">Verifikasi</a>
               <br>
               <br>
               <br>
               <p>Copy Rigth @ OSIS Prionechi</p>
          
     </center>
     
</body>
</html>