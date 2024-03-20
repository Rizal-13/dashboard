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
        
    <?php 

include 'halaman/sidebar.php';

if(isset($_GET['hal'])){
  if(@!include ("halaman/". $_GET['hal'] .".php"))
  include "halaman/dashboard.php";
 }
 else{
  include "halaman/dashboard.php";
 }

?>

    </div>
</div>  
  

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>
