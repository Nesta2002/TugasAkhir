<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  </head>
  <style media="screen">
  body {
    background-image:url(putih.jpg);
    background-size:cover;
    background-attachment: fixed;
  }
  /* Main navigation block element */
  #cssmenu{
  height:37px;
  display:block;
  padding:0;
  margin:20px auto;
  border:1px solid;
  border-radius:5px;
  }

  #cssmenu > ul {list-style:inside none; padding:0; margin:0;}
  #cssmenu > ul > li {list-style:inside none; padding:0; margin:0; float:left; display:block; position:relative;}

  /* Styling navigation links */
  #cssmenu > ul > li > a{
  outline:none;
  display:block;
  position:relative;
  padding:12px 20px;
  font:bold 13px/100% Arial, Helvetica, sans-serif;
  color: black;
  text-align:center;
  text-decoration:none;
  text-shadow:1px 1px 0 rgba(0,0,0, 0.4);
  }

  #cssmenu > ul > li:first-child > a{border-radius:5px 0 0 5px;}


  /* Extra border for navigation links */
  #cssmenu > ul > li > a:after{
  content:'';
  position:absolute;
  border-right:1px solid;
  top:-1px; bottom:-1px; right:-2px;
  z-index:99;
  }
  #cssmenu ul li.has-sub:hover > a:after{top:0; bottom:0;}

  /* Bullet for dropdowns */
  #cssmenu > ul > li.has-sub > a:before{
  content:'';
  position:absolute; top:18px; right:6px;
  border:5px solid transparent;
  border-top:5px solid #fff;
  }
  #cssmenu > ul > li.has-sub:hover > a:before{top:19px;}

  /* Hover state styles for drop menu link */
  #cssmenu ul li.has-sub:hover > a{
  background:#3f3f3f;
  border-color:#3f3f3f;
  padding-bottom:13px; padding-top:13px;
  top:-1px;
  z-index:999;
  }

  /* Show dropdown when hover */
  #cssmenu ul li.has-sub:hover > ul, #cssmenu ul li.has-sub:hover > div{display:block;}
  #cssmenu ul li.has-sub > a:hover{background:#3f3f3f; border-color:#3f3f3f;}

  /* Dropdown styles */
  #cssmenu ul li > ul, #cssmenu ul li > div{
  display:none; width:auto;
  position:absolute; top:38px;
  padding:10px 0;
  background:#3f3f3f;
  border-radius:0 0 5px 5px;
  z-index:999;
  }

  /* Dropdown list style */
  #cssmenu ul li > ul{width:200px;}
  #cssmenu ul li > ul li{display:block; list-style:inside none; padding:0; margin:0; position:relative;}
  #cssmenu ul li > ul li a{
  outline:none; display:block;
  position:relative;
  margin:0; padding:8px 20px;
  font:10pt Arial, Helvetica, sans-serif; color:#fff;
  text-decoration:none;
  text-shadow:1px 1px 0 rgba(0,0,0, 0.5);
  }

  /* Dropdown box styles */
  #cssmenu ul li > div{width:auto; padding:20px;}
  #cssmenu ul li > div p{
  font:9pt/150% Arial, Helvetica, sans-serif; color:#fff;
  text-align:justify;
  text-shadow:1px 1px 0 rgba(0,0,0,0.5);
  margin:0;
  }

  #cssmenu ul li > div h1{
  position:relative;
  margin:0 0 12px 0;
  padding-bottom:10px;
  border-bottom:1px solid #222;
  font:bold 13pt Arial, Helvetica, sans-serif; color:black;
  text-shadow:1px 1px 0 rgba(0,0,0,0.5);
  }
  #cssmenu ul li > div h1:after{
  content:'';
  height:0; padding:0;
  position:absolute; bottom:-2px; left:0; right:0;
  border-bottom:1px solid #555;
  }

  /* ---------------- Styles ----------------- */


  /* Gray */
  #cssmenu,
  #cssmenu > ul > li > ul > li a:hover{
  background:#d5d5d5;
  background:-moz-linear-gradient(top, #d5d5d5 0%, #c5c5c5 100%);
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#d5d5d5), color-stop(100%,#c5c5c5));
  background:-webkit-linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
  background:-o-linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
  background:-ms-linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
  background:linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d5d5d5', endColorstr='#c5c5c5',GradientType=0);
  }
  #cssmenu {border-color:#888;}
  #cssmenu > ul > li > a{border-right:1px solid #888; color:black;}
  #cssmenu > ul > li > a:after{border-color:#e5e5e5;}
  #cssmenu > ul > li > a:hover{background:#bbb;}

  div.header{
    width: 100%;
    height: 500px;
    background-image: url("eduwood2.jpg");
    background-repeat: no-repeat;
    /* ini biar gambarnya tidak berulang  */
    background-size:cover;
    /* ini untuk mengatur ukuran background */
    /* cover digunakan untuk me - fill- kan gambar */
    background-position: center;
    float: left;
    position: relative;
  }

  div.bayangan{
    width: 100%;
    height: 500px;
    background:#000;
    opacity:0.7;
    float: left;
    position: absolute;
  }

  div.header h1{
    position: absolute;
    text-align: center;
    color:#fff;
    top: 1%; /*  mengatur jarak dari atas */
    left: 25%; /* mengatur jarak dari sebelah kiri */
    font-weight: bolder;
    font-family: "space age";
    font-size: 80px;
  }
  div.tentang{
    width: 100%;
    height: 400px;
    padding: 0;
    float: left;
    margin-top: 20px;
  }

  div.tentang .left{
    width: 50%;
    height: 100%;
    float: left;
  }

  div.tentang .left h1{
    text-align:right;
    text-transform: uppercase; /* huruf kapital */
    font-size: 50px;
    font-family: Algerian;
    font-weight: 20;
    border-right: 10px solid grey;
    padding-right: 10px;
    color: black;
  }

  div.tentang .left p{
    text-align:right;
    font-size: 24px;
    font-family: sans-serif;
    color: darkslategrey;
  }

  div.tentang .right{
    width: 40%;
    height: 100%;
    float: left;
  }

  div.tentang .right img{
    width: 400px;
    height: auto;
    margin-top: 70px;
    margin-left: 40px;
    border: 7px solid #000;
    border-radius: 20px; /* border melengkung */
  }

  div.tentangkanan{
    width: 100%;
    height: 400px;
    padding: 0;
    float: left;
    margin-top: 20px;
  }

  div.tentangkanan .right{
    width: 50%;
    height: 100%;
    float: left;
  }

  div.tentangkanan .right h1{
    text-align:right;
    text-transform: uppercase; /* huruf kapital */
    font-size: 50px;
    font-family: Algerian;
    font-weight: 20;
    border-right: 10px solid grey;
    padding-right: 10px;
    color: black;
  }

  div.tentangkanan .right p{
    text-align:right;
    font-size: 24px;
    font-family: sans-serif;
    color: darkslategrey;
  }

  div.tentangkanan .left{
    width: 40%;
    height: 100%;
    float: left;
  }

  div.tentangkanan .left img{
    width: 400px;
    height: auto;
    margin-top: 70px;
    margin-left: 40px;
    border: 7px solid #000;
    border-radius: 20px; /* border melengkung */
  }
.bgcolor{ background-color: grey; }
  </style>
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

    <div class="header">
      <div class="bayangan">
      </div>
    </div>

    <div class="bgcolor" align="center">
      <h3 align="center">Mulai dari SD, SMP, & SMA</h3>
    </div>
    <div align="center">
      <img src="gambar1.jpg" width="350" height="250" align="center" alt="osis">
    </div>

    <div class="bgcolor" align="center">
      <h3 align="center">Fasilitas lengkap</h3>
    </div>
    <div align="center">
      <img src="gambar2.jpg" width="350" height="250" align="center" alt="dega">
    </div>

    <div class="bgcolor" align="center">
      <h3 align="center">Tutor menyenangkan</h3>
    </div>
    <div align="center">
      <img src="gambar3.jpg" width="350" height="250" align="center" alt="pmr">
    </div>

    <div class="bgcolor" align="center">
      <h3 align="center">Bisa privat</h3>
    </div>
    <div align="center">
      <img src="gambar4.jpg" width="350" height="250" align="center" alt="pks">
    </div>

    <div class="bgcolor" align="center">
      <h3 align="center">Teman baru dari sekolah lain</h3>
    </div>
    <div align="center">
      <img src="gambar5.jpg" width="350" height="250" align="center" alt="nos">
    </div>
  </body>
</html>
