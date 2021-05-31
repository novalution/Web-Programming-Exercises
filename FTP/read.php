<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Naufal Musk</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Simpan File</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="read.php">Baca File</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <main>
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar File</h5>
              <hr>
              <p class="card-text">
                <ul>
                  <?php
                    $folder = "file/";
                    $file = array_diff(scandir($folder), array('.', '..'));
                    foreach ($file as $namafile) {
                    echo "<li> <a href='read.php?file=$namafile'>$namafile</a></li><br>";
                  }
                  ?>
                </ul>
              </p>
            </div>
          </div>
        </div>
          <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">
                Isi File
                </h5>
              <hr>
              <p class="card-text" style="padding: 5%">
                <?php
                  if(isset($_GET['file'])){
                    $cursor = fopen("./file/{$_GET['file']}", "r");
                    while(!feof($cursor)){
                      echo(fgets($cursor)."<br>");
                    }
                  }
                ?>
                <br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  </body>
</html>