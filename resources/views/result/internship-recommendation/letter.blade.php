<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Surat Rekomendasi Penelitian / Magang {{$detail->id}}</title>
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
  <h2 style="text-align: center; margin-top: -5px">Surat Rekomendasi Penelitian / Magang</h2>
  <p style="text-align: center; margin-top: -18px;">Nomor : 822.2/{{$decree_head}}/SIYANLIK/{{$get_decree_number->month}}/{{$get_decree_number->year}}</p>
  <p>
    Yang bertanda tangan di bawah ini, Kepala Dinas Pendidikan Pemerintah Provinsi Blackwater, dengan ini memberikan Rekomendasi Penelitian / Magang kepada
    (terlampir) yang berasal dari {{$detail->applican_institution}} pada instansi / unit kerja berikut:
  </p>
  <table>
    <tr class="font-12">
      <td>
        <p style="margin-top: -5px;">Nama Instansi / Unit Kerja</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->referenceWorkUnit->name}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Dari Tanggal - Hingga Tanggal</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->start_date}}, {{$detail->end_date}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Nama PIC</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->pic_name}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Jabatan PIC</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->pic_position}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Nomor HP PIC</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->pic_phone_number}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Tujuan Penelitian / Magang</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->reason}}</p>
      </td>
    </tr>
  </table>

  <p style="margin-top: -5px;">
    Demikian Surat Rekomendasi Penelitian / Magang ini dibuat sebagaimana mestinya.
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
  <h2 style="text-align: center; margin-top: 300px">DAFTAR PESERTA PENELITAN / MAGANG</h2>
  <h2 style="text-align: center; margin-top: -10px">{{$detail->referenceWorkUnit->name}}</h2>
  <table class="table">
    <tr>
      <td class="is-lined center">No</td>
      <td class="is-lined center">Nama Peserta</td>
      <td class="is-lined center">Nomor HP Peserta</td>
    </tr>
    @foreach($participants as $participant)
    <tr>
      <td class="is-lined center">{{$loop->iteration}}</td>
      <td class="is-lined center">{{$participant->name}}</td>
      <td class="is-lined center">{{$participant->phone_number}}</td>
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
