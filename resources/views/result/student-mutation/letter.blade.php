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
  <h2 style="text-align: center; margin-top: -5px">Surat Rekomendasi {{$detail->referenceStudentMutationType->name}}</h2>
  <p style="text-align: center; margin-top: -18px;">Nomor : 822.2/{{$decree_head}}/SIYANLIK/{{$get_decree_number->month}}/{{$get_decree_number->year}}</p>
  <p>
    Berdasarkan Surat Keputusan Menteri Pendidikan Nasional Republik Indonesia Nomor: 051/U/2022 tanggal 10 April 2022 tentang Penerimaan Taman Kanak-Kanak dan Sekolah.
    Kepala Dinas Pendidikan Kabupaten / Kota memberikan rekomendasi {{$detail->referenceStudentMutationType->name}} kepada siswa dengan data sebagai berikut:
  </p>
  <table>
    <tr class="font-12">
      <td>
        <p style="margin-top: -4px;">DATA SISWA</p>
      </td>
    </tr>
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
        <p style="margin-top: -18px;">NIS / NISN</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->student_registration_number}}, {{$detail->national_student_registration_number}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Tingkat</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->rank}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Nama Sekolah Asal</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->school_origin}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Jenis Kelamin</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->gender}}</p>
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
        <p style="margin-top: -18px;">{{$detail->user->personalData->name}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Alamat Orang Tua</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->user->personalData->address}}</p>
      </td>
    </tr>
  </table>

  <table>
    <tr class="font-12">
      <td>
        <p style="margin-top: -4px;">DATA MUTASI SISWA</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Nama Sekolah Tujuan</p>
      </td>
      <td>
        <p style="margin-top: -18px;">:</p>
      </td>
      <td>
        <p style="margin-top: -18px;">{{$detail->school_target}}</p>
      </td>
    </tr>
    <tr class="font-12">
      <td>
        <p style="margin-top: -18px;">Nama Sekolah Tujuan</p>
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
    Dengan dikeluarkannya surat rekomendasi ini, maka siswa yang bersangkutan telah disetujui untuk melakukan mutasi
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
  </body>
  </html>
