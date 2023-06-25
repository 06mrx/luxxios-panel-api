<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Surat Rekomendasi Mutasi Sekolah {{$detail->name}}</title>
  <link rel="shortcut icon" href="/images/logo.png" />
  <!-- Styles -->
  <style>
  footer {
    position: fixed;
    bottom: 0px;
  }

  .center {
    text-align: center;
  }
  .right {
    width: 0px;
    height: 50px;
    margin-left: 500px;
  }
  .sign-box {
    width: 50px;
    height: 150px;
    margin-left: 500px;
  }
  .is-lined {
    border: 1px solid black;
  }
  .table{
    border: 1px solid black;
    width: 100%;
    border-collapse: collapse;
    page-break-inside: avoid;
  }
  </style>
</head>
<body>
  <table>
    <tr class="font-12">
      <th style="margin-top:-18px">
        <td style="width: 120px;"><p><img style="width:75px;" src="https://api-siyanlik.death-code.site/images/logo.png" alt=""></p></td>
        <td>
          <p class="center" style="margin-top:-18px">PEMERINTAH KABUPATEN MALINAU</p>
          <p class="center" style="margin-top:-18px">DINAS PENDIDIKAN</p>
          <p class="center" style="margin-top:-18px; font-weight: normal;">Jl. M Yamin Gedung Museum Desa Kuala Lapang Kec Malinau Barat</p>
          <p class="center" style="margin-top:-18px; font-weight: normal;">M A L I N A U</p>
        </td>
      </th>
    </tr>
  </table>
  <hr style="margin-top:-18px">
  <h2 style="text-align: center; margin-top: -5px">Surat Keterangan Pengganti Ijazah / STTB</h2>
  <p style="text-align: center; margin-top: -18px;">Nomor : 822.2/{{$decree_head}}/SIYANLIK/{{$get_decree_number->month}}/{{$get_decree_number->year}}</p>
  <p>
    Yang bertanda tangan di bawah ini, Kepala Dinas Pendidikan Pemerintah Provinsi Blackwater, Berdasarkan Surat Tanda Penerimaan Laporan Kehilangan Barang dari
    {{$detail->lost_letter_issuer}} dengan Nomor Surat {{$detail->lost_letter_number}} dengan ini menerangkan bahwa
    :
  </p>
  <table>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Nama</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->name}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Tempat, Tanggal Lahir</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->birth_place}}, {{$detail->birth_date}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Nama Orang Tua</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->parent_name}}</p>
      </td>
    </tr>
  </table>

  <p style="margin-top: -5px;">
    Telah kehilangan Ijazah / STTB {{$detail->school}} pada tahun pelajaran {{$detail->study_year}} dengan Nomor Seri Ijazah / STTB {{$detail->diploma_number}} dan Nomor Induk {{$detail->diploma_parent_number}}. Yang bersangkutan
    berasal dari {{$detail->school}} di Kabupaten Blacwater Provinsi Blackwater
  </p>
  <p style="margin-top: -5px;">
    Demikian Surat Keterangan ini sebagai pengganti Ijazah / STTB asli yang {{$detail->lost_letter_reason}}
  </p>
  <p style="margin-left: 480px;">Blackwater, {{$get_decree_number->created_at}}</p>
  <p style="margin-left: 480px; margin-top: -18px;">{{$headoffice->personalData->referencePosition->name}}</p>
  <p style="margin-left: 480px;">
    <img src="data:image/png;base64, {!! $headofficesign !!}">
  </p>
  <p style="margin-left: 480px;"><u>({{$headoffice->personalData->name}})</u></p>
  <p style="margin-left: 480px; margin-top: -18px;">NIP. {{$headoffice->personalData->registration_number}}</p>
  <p style="margin-top: -10px;"><b>Catatan:</b></p>
    <p style="margin-top: -18px;">1. UU ITE No.11 Tahun 2008 Pasal 5 Ayat 1 "Informasi Elektronik dan/atau Dokumen Elektronik dan/atau Hasil Cetakannya Merupakan Alat Bukti Hukum Yang Sah"</p>
    <p style="margin-top: -18px;">2. Dokumen Ini Telah Ditandatangani Secara Elektronik Pada Sistem <b>SIDIK</b></p>
    <p style="margin-top: -10px;">Untuk Mengecek Keaslian Dokumen Silahkan Scan QR Code Berikut:</p>
    <p style="margin-top: -10px;"><img src="data:image/png;base64, {!! $checkqr !!}"> </p>
  <br>
  <h2 style="text-align: center; margin-top: 300px">DAFTAR NILAI</h2>
  <h2 style="text-align: center; margin-top: -10px">HASIL EVALUASI BELAJAR TAHAP AKHIR {{$detail->school}}</h2>
  <h2 style="text-align: center; margin-top: -10px">TAHUN AJARAN {{$detail->study_year}}</h2>
  <table>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Nama Siswa</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->name}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Nomor Induk</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->student_registration_number}}</p>
      </td>
    </tr>
  </table>
  <p style="margin-top: -5px;">Daftar Nilai Mata Pelajaran:</p>
  <table class="table">
    <tr>
      <td class="is-lined center">Nomor Urut</td>
      <td class="is-lined center">Mata Pelajaran</td>
      <td class="is-lined center">Nilai</td>
    </tr>
    @foreach($scores as $score)
    <tr>
      <td class="is-lined center">{{$loop->iteration}}</td>
      <td class="is-lined center">{{$score->referenceSubject->name}}</td>
      <td class="is-lined center">{{$score->score_number}} ({{$score->score_letter}})</td>
    </tr>
    @endforeach
  </table>
  <p style="margin-left: 480px;">Blackwater, {{$get_decree_number->created_at}}</p>
  <p style="margin-left: 480px; margin-top: -18px;">{{$headoffice->personalData->referencePosition->name}}</p>
  <p style="margin-left: 480px;">
    <img src="data:image/png;base64, {!! $headofficesign !!}">
  </p>
  <p style="margin-left: 480px;"><u>({{$headoffice->personalData->name}})</u></p>
  <p style="margin-left: 480px; margin-top: -18px;">NIP. {{$headoffice->personalData->registration_number}}</p>
  <p style="margin-top: -10px;"><b>Catatan:</b></p>
    <p style="margin-top: -18px;">1. UU ITE No.11 Tahun 2008 Pasal 5 Ayat 1 "Informasi Elektronik dan/atau Dokumen Elektronik dan/atau Hasil Cetakannya Merupakan Alat Bukti Hukum Yang Sah"</p>
    <p style="margin-top: -18px;">2. Dokumen Ini Telah Ditandatangani Secara Elektronik Pada Sistem <b>SIDIK</b></p>
    <p style="margin-top: -10px;">Untuk Mengecek Keaslian Dokumen Silahkan Scan QR Code Berikut:</p>
    <p style="margin-top: -10px;"><img src="data:image/png;base64, {!! $checkqr !!}"> </p>
  </body>
  </html>
