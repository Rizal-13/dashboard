<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Myapp</title>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" />
    <link rel="shortcut icon" href="img/jatim.png" type="image/jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>
  <style>
    body {
      font-family: "Inconsolata";
      background-image: url("img/labkes.png");
      background-repeat: no-repeat;
      background-position: 50% 60%;
      background-attachment: fixed;
    }

    .header {
      background-color: #b6613f;
    }

    #about {
      background-color: #b6613f;
      color: aliceblue;
      margin-top: 1rem;
      padding-bottom: 2rem;
      font-size: 1.5rem;
      border-radius: 30px;
    }

    #home a {
      text-decoration: none;
      color: black;
    }

    #home{
      margin-top: 5rem;
      margin-bottom: 1rem;
    }

    footer {
      margin-top: 2rem;
      text-align: center;
      font-weight: bold;
    }

    footer p{
      margin-bottom: -1px;
    }

    footer a {
      color: black;
    }

    #home p{
      font-weight: bold;
    }

    #home a:hover{
      color: white;
    }

    .header a{
      text-decoration: none;
      color: white;
    }

    th, td {  
  border: 1px solid black;
  text-align: left;
  padding: 8px;
  
}
  
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 1rem;
  margin-top: 1rem;
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #E5E1DA;
  display: flex;
  
}

.skp{
  width: 75%;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

tr:nth-child(even)
    {
      background-color: #b6613f;
      color: white;
    }

      /* The side navigation menu */
  .sidebar {
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
    opacity: 0.8;
  }

  /* Sidebar links */
  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }

  /* Active/current link */
  .sidebar a.active {
    background-color: #b6613f;
    color: white;
  }

  /* Links on mouse-over */
  .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
  }

  /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }

  /* On screens that are less than 700px wide, make the sidebar into a topbar */
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {
      float: left;
    }
    div.content {
      margin-left: 0;
    }
  }

  /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }

  </style>
  <body>
    <section class="header">
      <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand"> <?php echo date("l,j F Y H:i"); ?> </a>
          <!-- <form action="dashboard.php" method= "POST"><button type="submit" class="btn btn-secondary" name= "logout">Logout</button>
        </form> -->
          
        </div>
      </nav>
    </section>

    <div class="sidebar">
    <a href="page/kalibrasi/index.php">AKAL SEHAT</a>
    <a href="arsip/index.php" target="_blank">E-Arsip</a>
    <!-- <a href="page/kalibrasi/index.php">Kalibrasi</a> -->
    <a href="page/note/index.php">Note</a>
    <a href="register.php">Register</a>
    <a href="page/skp/skp.php">SKP</a>
    <a href="page/util/utilities.php">Utilities</a>  
  
  <form action="dashboard.php" method= "POST">
  <button type="submit" class="btn btn-secondary" name= "logout">Logout</button>
  </form>

</div>

    <section id="home">
      <div class="jumbotron text-center">
        <a target="_blank" href="img/labkesda_full.jpg"><img src="img/labkesda.jpg" alt="Insun" width="200" class="rounded-circle img-thumbnail" /></a>
        <h1 class="display-5 fw-bold">UPT LABORATORIUM KESEHATAN DAERAH</h1>
        <h2 class="fw-bold">DINAS KESEHATAN PROVINSI JAWA TIMUR</h2>
        <!-- <p class="lead fs-4"><a href="page/util/utilities.php">Utilities</a> | <a href="arsip/index.php" target="_blank">E-Arsip</a> | <a href="page/skp/skp.php">SKP</a> | <a href="register.php">Register</a> | <a href="page/note/index.php">Note</a> | <a href="page/kalibrasi/index.php">Kalibrasi</a> </p> -->
      </div>
    </section>

    <div class="skp">
    <table style="overflow-x:auto;">
    <tr>
        <td style="text-align: center; width: 50px; background-color: #FBF9F1;">No</td>
        <td style="text-align: center; background-color: #FBF9F1;">Uraian Tugas</td>
        <td style="text-align: center; background-color: #FBF9F1;">Satuan</td>
        <td style="text-align: center; background-color: #FBF9F1;">Target /tahun</td>
        <td style="text-align: center; background-color: #FBF9F1;">Target /bulan</td>
    </tr>
    <tr>
      <td style="text-align: center;">1</td>
      <td>Kegiatan mengidentifikasi dan memeriksa fisik arsip microfilm/microfische dan arsip peta/kearsitekturan dalam segala bentuk jenis media yang terindikasi dan mengalami kerusakan baik dalam keadaan normal ataupun karena darurat bencana untuk dilakukan perbaikan/perawatan (restorasi) statis yang akan dan telah di preservasi.</td>
      <td style="text-align: center;">Daftar Arsip/per nomor arsip</td>
      <td style="text-align: center;">12</td>
      <td style="text-align: center;"><?= 12/12; ?></td>
    </tr>
    <tr>
      <td style="text-align: center;">2</td>
      <td>Kegiatan mengidentifikasi, menyeleksi, dan verifikasi berkas arsip yang akan diusulkan musnah oleh pencipta arsip</td>
      <td style="text-align: center;">Laporan</td>
      <td style="text-align: center;">12</td>
      <td style="text-align: center;"><?= 12/12; ?></td>
    </tr>
    <tr>
      <td style="text-align: center;">3</td>
      <td>Kegiatan persiapan penyusunan sarana bantu penemuan kembali arsip statis (Guide Arsip ) dengan cara penelusuran sumber ke pencipta arsip dan lembaga kearsipan.</td>
      <td style="text-align: center;">Laporan</td>
      <td style="text-align: center;">24</td>
      <td style="text-align: center;"><?= 24/12; ?></td>
    </tr>
    <tr>
      <td style="text-align: center;">4</td>
      <td>Kegiatan pengaturan fisik arsip inaktif di dalam ruang simpang arsip sesuai prinsip penataan aturan asli dan atau asal usul sehingga arsip inaktif di unit kearsipan dapat terkelola dengan baik efektif dan efesien </td>
      <td style="text-align: center;">Laporan</td>
      <td style="text-align: center;">48</td>
      <td style="text-align: center;"><?= 48/12; ?></td>
    </tr>
    <tr>
      <td style="text-align: center;">5</td>
      <td>Melaksanakan tugas-tugas lain yang diberikan oleh Atasan langsung secara Lisan maupun Tertulis</td>
      <td style="text-align: center;">Kegiatan</td>
      <td style="text-align: center;">72</td>
      <td style="text-align: center;"><?= 72/12; ?></td>
    </tr>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  <footer>
    <p>Created by Rizaldy</p>
    <p>2024 Version</p>    
  </footer>
  <br>
</html>
