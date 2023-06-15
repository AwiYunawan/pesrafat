@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero">
      <div class="hero__inner container">
        <div class="hero-description">
            <h2>Pinjam Alat/Ruangan? PERSRAFATin aja!!!</h2>
            <p>Sistem Peminjaman Sarana dan Prasarana Fakultas Teknik</p>
        </div>
      </div>
    </div>
    <!-- End Hero -->
    <!-- Start Daftar Ruangan -->
    <div class="daftar-ruangan my-5 container">
        <h3 class="title-daftar-ruangan text-center">
            Daftar Ruangan
        </h3>
        <div class="list-ruangan d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/ruang-kelas.jpg" style="height: 250px" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                  <h5 class="card-title text-center">Aula Gedung F</h5>
                  <p class="card-text">Aula Gedung F ini memiliki kapasitas 100 peserta yang biasanya dipakai untuk kuliah umum dan acara-acara besar dari jurusan maupun fakultas </p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <img src="img/speaker.jpg" style="height: 250px" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                  <h5 class="card-title text-center">Speaker</h5>
                  <p class="card-text">Alat ini digunakan untuk acara-acara besar, indoor maupun outdoor</p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <img src="img/kamera.jpg" style="height: 250px" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                  <h5 class="card-title text-center">Kamera</h5>
                  <p class="card-text">Alat ini digunakan untuk mengabadikan momen-momen tertentu</p>
                </div>
              </div>
        </div>
    </div>
    <!-- End Daftar Ruangan -->
