<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Peserta Didik Baru SMKN 2 Pekalongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <style>
      * {
        margin: 0;
        padding: 0;
      }

      .hero {
        background-image: url('SMEA.png');
        overflow: hidden;
        -webkit-mask-image: linear-gradient(
          rgb(255, 255, 255) 50%,
          rgba(255, 255, 255, 0)
        );
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        opacity: 0.8;
        width: 100%;
        height: 500px;
        z-index: 5;
        margin-bottom: 150px;
      }

      .main {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
        height: 50px;
        margin-top: 150px;
      }
  </style>

<div style="background-image: url('SMEA.png');background-repeat: no-repeat;background-size:cover;background-position:center;">
      <div class="hero d-flex align-items-center justify-content-center text-light">
        <div class="row p-4 text-center position-absolute text-dark">
        </div>
      </div>
</div>

    <div class="container">
        <center>
        <section class="header mt-4 mb-5">
            <h3 class=" fw-bold">PENDAFTARAN PESERTA DIDIK BARU SMKN 2 PEKALONGAN</h3>
              <h3 class=" fw-bold"><span style="color: blue">Selamat Datang di Website Pendaftaran Peserta Didik Baru SMKN 2 Pekalongan</span></h3>
            <p class="fw-semibold"><span style="color: brown">Tahun Pelajaran </span> | 2024/2025</p>
       <p class="menu">
            <h5 class="mb-4">Silahkan Pilih Menu :</h5> 
              <a href="form-daftar.php"><button type="button" class="btn btn-danger">Pendaftaran</button></a>
            <a href="list-siswa.php"><button type="button" class="btn btn-danger">Calon Peserta</button></a>
          </p>
        </section>

        <section class="main bg-secondary text-light">
      <h4>Lokasi SMK Negeri 2 Pekalongan</h4>
    </section>

    <footer class="bg-dark p-4 d-flex justify-content-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6661.621606387468!2d109.66119266326403!3d-6.887739813440989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70269e1405d2d3%3A0xea567952c127150d!2sSMK%20Negeri%201%20Pekalongan!5e0!3m2!1sid!2sid!4v1718171958773!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
        
    </footer>


  <?php if(isset($_GET['status'])): ?>
  <p>
    <?php
    if($_GET['status'] == 'sukses' ) {
      echo "Pendaftaran Peserta Didik Baru SMKN 2 Pekalongan Berhasil";
    } else {
      echo "Pendaftaran Gagal";
    }
    ?>
  </p>
<?php endif; ?>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>