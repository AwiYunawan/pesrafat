@extends('layouts.main')

@section('container')

<div class="hero hero-about">
    <div class="hero__inner container">
      <div class="hero-description text-center">
          <h2>TENTANG PERSRAFAT</h2>
          <p>
          Sistem ini dibuat untuk mempermudah peminjaman sarana dan prasarana yang dimiliki oleh fakultas tekniknya sendiri sehingga dapat dipinjamkan kepada mahasiswa yang ada di Fakultas Teknik
          </p>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- Start Description About -->
  <div class="description-about container">
      <div class="upper-content d-flex flex-wrap my-4">
          <div class="section section-1 mx-3" style="width: 30vw;">
              <h1 class="title-section text-center">LATAR BELAKANG</h1>
              <div class="section-description">
                Salah satu sarana dan prasarana di lingkungan kampus adalah ruangan kelas. 
                Akan tetapi, terkadang ruangan kelas yang tersedia belum dapat digunakan secara efektif dan umumnya hanya digunakan untuk keperluan jadwal kuliah. 
                Untuk mengefektifkan penjadwalan ruangan dan bisa digunakan untuk berbagai kegiatan, 
                maka dibuatlah aplikasi web berupa peminjaman ruangan di lingkungan kampus.
              </div>
          </div>
          <div class="section mx-3" style="width: 40vw;">
              <h1 class="title-section text-center">TUJUAN</h1>
              <div class="section-description">
                Aplikasi sistem peminjaman ruangan ini bertujuan untuk mengetahui ruangan apa saja yang sedang dan akan digunakan pada jadwal yang disediakan pada hari tersebut. 
                Selain itu, aplikasi ini juga membantu para mahasiswa baru ataupun tamu dari luar kampus yang kurang bahkan tidak mengetahui letak dari suatu ruangan dalam gedung. 
                Informasi seperti penanggung jawab peminjam ruangan, ruangan yang dipakai, tujuan pemakaian ruangan, jadwal asli pemakaian ruangan, dan lama waktu ruangan dipinjam juga dapat dilihat melalui aplikasi. 
                Tentu hal ini mempermudah para pengakses gedung agar tidak perlu mengecek ruangan satu persatu.
              </div>
          </div>
      </div>
      
  </div>
  <!-- End Description About -->
  <!-- Start Our Team -->
  <div class="bg-light">
    <h1 class="text-center p-4">TIM KITA</h1>
    <div class="row px-5 pb-5">
      
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <h5 class="text-center mt-2">Awi Yunawan Putra</h5>
            <p class="text-center">H1D021066</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <h5 class="text-center mt-2">Afist Rayyan Urfa</h5>
            <p class="text-center">H1D021073</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <h5 class="text-center mt-2">Syifa Rahmadina</h5>
            <p class="text-center">H1D021094</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Our Team -->
    
@endsection