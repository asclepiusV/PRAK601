<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" id="picostrap-styles-css" href="https://cdn.livecanvas.com/media/css/library/bundle.css" media="all">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" media="all" type="image/jpg">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        &nbsp;
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Profil">Profil</a>
            </li>
          </ul>
        </div>
      </nav>
    <section class="py-4 border-bottom" lc-helper="background">
        <div class="container">
            <div class="row py-6">
                <div class="col-md-12 text-center">
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <h1 class="display-3 fw-bold text-black exclude">Selamat Datang</h1>
                        </div>
                    </div><!-- /lc-block -->
                    <div class="lc-block">
                        <div editable="rich">
                            <p class="text-black lead stroke exclude"><?=$nama?><br><?=$nim?><br>
                            </p>
                        </div>
                    </div><!-- /lc-block -->
                </div><!-- /col -->
            </div>
        </div>
    </section>
    


    <p class="py-5 small text-center text-muted"><a href="https://github.com/asclepiusV/PRAK601.git"> Repository Github Praktikum Web II Modul 6</a> </p>


    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>