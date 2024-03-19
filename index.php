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
      background-image: radial-gradient(circle at 1% 52%, rgba(139, 139, 139,0.05) 0%, rgba(139, 139, 139,0.05) 50%,rgba(21, 21, 21,0.05) 50%, rgba(21, 21, 21,0.05) 100%),radial-gradient(circle at 41% 28%, rgba(81, 81, 81,0.05) 0%, rgba(81, 81, 81,0.05) 50%,rgba(7, 7, 7,0.05) 50%, rgba(7, 7, 7,0.05) 100%),radial-gradient(circle at 48% 1%, rgba(93, 93, 93,0.05) 0%, rgba(93, 93, 93,0.05) 50%,rgba(7, 7, 7,0.05) 50%, rgba(7, 7, 7,0.05) 100%),linear-gradient(255deg, rgb(156, 41, 132),rgb(47, 14, 122));
      background-repeat: no-repeat;
      background-position: 50% 60%;
      background-attachment: fixed;
      color: white;
    }

    #home{
      margin-top: 1rem;
    }



  </style>
  <body>
    <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="kalibrasi.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">AKAL SEHAT</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white">E-Arsip</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white">Register</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white">SKP</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white">Utilities</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="labkesda.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Myapp</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <section id="home">
      <div class="jumbotron text-center">
        <a target="_blank" href="labkesda_full.jpg"><img src="labkesda.jpg" alt="Insun" width="200" class="rounded-circle img-thumbnail" /></a>
        <h1 class="display-5 fw-bold">UPT LABORATORIUM KESEHATAN DAERAH</h1>
        <h2 class="fw-bold">DINAS KESEHATAN PROVINSI JAWA TIMUR</h2>
      </div>
    </section>
            </ul>
        </div>
    </div>
</div>  
  

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>
