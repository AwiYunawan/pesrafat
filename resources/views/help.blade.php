@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero hero-bantuan">
        <div class="hero__inner container">
          <div class="hero-description m-auto p-5">
              <h2>PETUNJUK PENGGUNAKAN PERSRAFAT</h2>
          </div>
        </div>
      </div>
      <!-- End Hero -->
      <!-- Start How To Use PERSAFRAT -->
      <div class="how-use-simanuk my-4 container">
          <h2>TAHAPAN PEMINJAMAN RUANGAN</h2>
          <div class="list-tahapan p-5">
              <ul>
                  <li>Untuk melakukan peminjaman, Anda diharuskan melakukan login terlebih dahulu sesuai dengan username yang telah disediakan oleh admin pada saat sosialisasi PESRAFAT.</li>
                  <li>Jika ingin mengetahui alat/ruangan yang tersedia, silakan menuju ke menu Daftar Ruangan. Secara default, tampilan akan langsung ke menu Daftar Ruangan.</li>
                  <li>Jika ingin meminjam alat/ruangan, silakan menuju ke menu Daftar Ruangan. Cek ketersediaan alat/ruangan dan daftar peminjam pada sub-menu Daftar Ruangan dan Daftar Peminjam. Jika ruangan tersedia, silakan klik tombol Pinjam dan isi form peminjaman. </li>
                  <li>Pastikan data yang Anda masukkan sudah sesuai. Jika sudah sesuai, klik Kirim.</li>
                  <li>Proses pengajuan peminjaman sedang diproses, silakan tunggu pemberitahuan lebih lanjut.</li>
                  <li>Untuk mengecek status peminjaman apakah diterima atau ditolak, silakan menuju sub-menu Daftar Peminjaman.</li>
              </ul>
          </div>
      </div>
      <!-- End How to use -->
@endsection