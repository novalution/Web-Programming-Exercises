<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a class="nav-link active" aria-current="page" href="index.php">Simpan File</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="read.php">Baca File</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <main>
    <div class="container mt-3">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Simpan data pada file TXT</h2>
          <hr>
          <form action="simpan.php" method="post">

            <div class="mb-3">
              <label for="namafile" class="form-label">Nama File</label>
              <input type="text" name="nama" class="form-control" id="namafile">
            </div>
            <div class="mb-3">
              <label for="isifile" class="form-label">Isi File</label>
              <textarea class="form-control" name="isi" id="isifile" rows="3"></textarea>
            </div>
            <button type="submit" class="btn">Buat File</button>
          </form>
        </div>
      </div>
    </div>
  </main>

  </body>
</html>