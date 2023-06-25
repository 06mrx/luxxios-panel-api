<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sertifikat Nomor Induk Kesenian {{$detail->name}}</title>
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
  <h2 style="text-align: center; margin-top: -5px">SERTIFIKAT NOMOR INDUK KESENIAN (NIK)</h2>
  <h2 style="text-align: center; margin-top: -18px;">{{$detail->art_id_number}}</h2>
  <p>
    Sertifikat NIK ini merupakan identitas Grup / Paguyuban / Kelompok / Organisasi / Sanggar Seni yang dinyatakan aktif secara kelembagaan dan kegiatan.
  </p>
  <table>
    <tr class="font-12">
      <td>
        <p style="margin-top: -5px;">Nama</p>
      </td>
      <td>
        <p style="margin-top: -5px;">:</p>
      </td>
      <td>
        <p style="margin-top: -5px;">{{$detail->name}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Alamat</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->address}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Kelurahan / Desa</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->village}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Kecamatan</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->district}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Kelompok Seni</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->referenceArtCategory->name}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Berlaku Hingga</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->valid_date}}</p>
      </td>
    </tr>
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
