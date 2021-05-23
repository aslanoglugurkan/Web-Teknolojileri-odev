<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iletişim Bilgisi</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/styles.css" />
  
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <i class="fas fa-blog"></i>&nbsp; RİZE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./index.html">Hakkımda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./city.html">Şehrim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./team.html">Mirasımız</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./iletişim.html">İletişim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cv.html">Özgeçmiş</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./login.html">Giriş</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ilgialanlarım.html">İlgialanlarım</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--CONTENT-->


  <


    <div class="container">
      <div class="">
        
      <h1 class="title">Bilgileriniz İçin Teşekkürler</h1>
        <h2 class="title">
            <hr>
        <p>Ad Soyad :
        <?php
            if(isset($_POST["adsoyad"]))
            echo $_POST["adsoyad"];

         ?>
      </p>
      <p>Eposta Adresi :
        <?php
            if(isset($_POST["email"]))
            echo $_POST["email"];

         ?>
      </p>
      <p>Telefon numarası :
        <?php
            if(isset($_POST["tel"]))
            echo $_POST["tel"];

         ?>
      </p>
      <p>Cinsiyet :
        <?php
            if(isset($_POST["cinsiyet"]))
            echo $_POST["cinsiyet"];

         ?>
      </p>
      <p>Bulunduğu il :
        <?php
            if(isset($_POST["il"]))
            echo $_POST["il"];

         ?>
      </p>
      <p>İletişim konusu :
        <?php
            if(isset($_POST["konu"]))
            echo $_POST["konu"];

         ?>
      </p>
      <p>Mesaj :
        <?php
            if(isset($_POST["mesaj"]))
            echo $_POST["mesaj"];

         ?>
      </p>
    </div>

    </h2>

<br><br><br><br><br><br>
     

      
      
    </div>

  

  <footer>
    <div class="container"> © Day Theme. All Rights Reserved.</div>
  </footer>
  <script src="https://kit.fontawesome.com/191a3bb9ee.js" crossorigin="anonymous"></script>
</body>

</html>