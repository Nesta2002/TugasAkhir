<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Bimbel</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id='cssmenu'>
    <ul>
       <li class='active '><a href="http://localhost/TA/index.php"><span>Home</span></a></li>
       <li class='has-sub '><a href='#'><span>Tentang</span></a>
          <ul>
             <li><a href="http://localhost/TA/testimoni.php"><span>Testimoni</span></a></li>
             <li><a href="http://localhost/TA/galeri.php"><span>Galeri</span></a></li>
          </ul>
       </li>
       <li><a href="http://localhost/TA/kontak.php"><span>Kontak</span></a></li>
       <li><a href="http://localhost/TA/login.php"><span>Masuk</span></a></li>
    </ul>
    </div>

<div id='cssheader'>
  <div class="header">
    <div class="bayangan">
    </div>
    <h1>
      <br>
      EDUCATION
    </h1>
    <form action="http://localhost/TA/daftar.php" method="post">
      <button type="submit">Daftar</button>
    </form>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="tentang">
  <div class="left">
    <h1>
      Mengapa
      <br>
      Harus
      <br>
      Education?
    </h1>
    <p>
      Selain memiliki lebih dari 500 cabang di seluruh Indonesia, Education juga memiki beberapa
keunggulan dalam memberikan pengajaran kepada para siswa.
    </p>
  </div>
  <div class="right">
    <img src="ed.jpg" />
  </div>
</div>

<div class="studi">
  <div class="bunder">
    <span class="fa fa-building"></span>
  </div>
  <h1>Fasilitas</h1>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="about">
        <p>Education satu-satunya bimbingan belajar yang mempunyai sistem pelayanan pendidikan termodern dan terunggul.</p>
    </div>

    <div class="studi">
      <div class="bunder">
        <span class="fa fa-book"></span>
      </div>
      <h1>Buku Penunjang</h1>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="about1">
            <p>Smart Book disusun sesuai dengan kurikulum pemerintah dengan sajian yang mudah dipahami oleh para siswa.</p>
        </div>

        <div class="studi">
          <div class="bunder">
            <span class="fa fa-brain"></span>
          </div>
          <h1>Tutor Kompeten</h1>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <div class="about2">
                <p>Education mempunyai Instruktur Smart yang handal, menguasai materi pelajaran dan mampu menyampaikan materi dengan gaya yang menyenangkan.</p>
            </div>

            <br>

    <div class="container">
              <div class="carousel slide" data-ride="carousel" id="slide">
                <!-- indikator slide -->
                <ul class="carousel-indicators">
                  <li data-target="#slide" data-slide-to="0" class="active"></li>
                  <!-- class active berarti elemen tersebut yang pertama kali ditampilkan saat Load halaman -->
                  <li data-target="#slide" data-slide-to="1"></li>
                  <li data-target="#slide" data-slide-to="2"></li>
                </ul>

                <!-- gambar slide -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="bel1.jpg" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="bel2.jpg" width="100%" height="500" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="bel3.jpg" width="100%" height="500" alt="">
                  </div>
                </div>

                <!-- navigasi slide -->
                <a href="#slide" data-slide="prev" class="carousel-control-prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#slide" data-slide="next" class="carousel-control-next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>

            <div class="layanan">
              <div class="box">
                <div class="bunder bg-navy">
                  <span class="fa fa-flag"></span>
                </div>
                <h3 class="text-navy">Bahasa Indonesia</h3>
                <div class="deskripsi">
                  Lengkap dengan buku KBBI revisi terbaru dan dibantu dengan tutor professional.
                </div>
              </div>
              <div class="box">
                <div class="bunder bg-grey">
                  <span class="fa fa-calculator"></span>
                </div>
                <h3 class="text-grey">Matematika</h3>
                <div class="deskripsi">
                  Dapatkan rumus cepat tanpa harus menghitung lama-lama.
                </div>
              </div>
              <div class="box">
                <div class="bunder bg-green">
                  <span class="fa fa-globe"></span>
                </div>
                <h3 class="text-green">Bahasa Inggris</h3>
                <div class="deskripsi">
                  Dilengkapi dengan kamus-kamus dengan translator yang handal dan tutor yang berpengalaman.
                </div>
              </div>
              <div class="box">
                <div class="bunder bg-blue">
                  <span class="fa fa-flask"></span>
                </div>
                <h3 class="text-blue">Ilmu Pengetahuan Alam</h3>
                <div class="deskripsi">
                  Mendapatkan rumus-rumus cepat fisika, dibantu dengan mind map biologi yang mudah dipahami.
                </div>
              </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            <marquee bgcolor="darkgoldenrod" behavior="scroll" direction="right" scrollamount="8"> <font face="Times New Rowman"
            color="white" >Username dan Password akan kami kirim melalui e-mail anda setelah anda terdaftar</font>
            </marquee>
            <div class="footer">
              <img src="ed.png" width="300" height="80" align="left" alt="Spanega">
              <img src="ed.png" width="300" height="80" align="right" alt="Spanega">
                <p>
                  <h2>
                    FOLLOW US
                    <br>
                    <a href="#">
                      <img src="ins.png" width="70" height="70" alt="">
                    </a>
                    <a href="#">
                      <img src="fa.png" width="70" height="70" alt="">
                    </a>
                    <a href="#">
                      <img src="yut.png" width="70" height="70" alt="">
                    </a>
                  </h2>
                </p>
            </div>
            <marquee bgcolor="darkgoldenrod" behavior="scroll" direction="left" scrollamount="8"> <font face="Times New Rowman"
            color="white" > &copy; Danza Sasta Vanesta Alsyaluna - 10 - Rekayasa Perangkat Lunak - SMK Telkom Malang</font>
            </marquee>
  </body>
</html>
