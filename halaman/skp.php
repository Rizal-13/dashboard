
  <style>
    body {
      font-family: "Inconsolata";
      background-image: url("../../img/lab.jpg");
      
    }

    .header {
      background-color: #b6613f;
      color: white;
    }
    
    .header a:hover{
      color: black;
    }

    .skp{
      margin-left: 1rem;
      margin-right: 1rem;
      margin-top: 1rem;
    }


th, td {  
  border: 1px solid black;
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even)
    {
      background-color: #b6613f;
      color: white;
    }
  
.input table {
  border-collapse: collapse;
  width: 90%;
  margin-bottom: 1rem;
  margin-left: auto;
  margin-right: auto;
  margin-top: 1rem;
  display: flex;
  
}

.skp a{
  text-decoration: none;
  color: black;
}

.input a{
  color: #F1E4C3;
}

  </style>

<div class="col py-3">
    <section class="header">
      <nav class="navbar navbar-expand-lg navbar-dark fs-5">
        <div class="container">
          <a class="navbar-brand" href="../../dashboard.php">back</a>
          <a class="navbar-brand"> <?php echo date("l,j F Y H:i"); ?> </a>
          </div>
        </div>
      </nav>

    <div class="skp">
      <h3>SKP Bulanan 2024 </h3>
      <h4>Nama :Mochammad Rizaldy Hartono S.T</h4>
      <h4>Jabatan :Arsiparis</h4>
      <button><a href="input.php">Input SKP</a></button>
</div>

<div class="input">

    <table style="overflow-x:auto;">
    <tr>
        <td style="background-color: #3E3232; color: white; text-align: center;">Tanggal</td>
        <td style="background-color: #3E3232; color: white; text-align: center;">Jenis Kegitan</td>
        <td style="background-color: #3E3232; color: white; text-align: center;">Uraian Kegiatan</td>
        <td style="background-color: #3E3232; color: white; text-align: center; width: 75px;">Aksi</td>
    </tr>
</table>
<br>
</div>
  </body>
</html>
