<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <!--my css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/ujikom_karina/public/asset/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-black fixed-top"  style="background-color:rgba(0, 128, 53, 0.445);">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin/index.php"><i class="bi bi-gear"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>  <!-- akhir navbar-->
  <!-- jumbotron -->
  <?php foreach($data['profile'] as $pro) : ?>
  <section class="jumbotron text-center" data-aos="zoom-in-right">
    <img src="http://localhost/ujikom_karina/public/asset/img/<?= $pro['Image']; ?>" alt="" width="300" class="rounded-circle"/>
   <h1 class="display-4"> <?= $pro['Nama']; ?></h1>
    <p class="lead"><?= $pro['Jabatan']; ?> \ smkn4 tasikmalaya</p>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(136, 105, 5, 0.753)" fill-opacity="1" d="M0,224L48,186.7C96,149,192,75,288,74.7C384,75,480,149,576,192C672,235,768,245,864,218.7C960,192,1056,128,1152,133.3C1248,139,1344,213,1392,250.7L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <?php endforeach ?>
  <!-- akhir jumbotron-->
  <?php foreach($data['about'] as $ab) : ?>
  <section id="about">
    <div class="row text-center" data-aos="zoom-in-up">
      <h2>about</h2>
    </div>
    <div class="row justify-content-center fs-5">
      <div class="col-sm-4" data-aos="flip-left" data-aos-duration="3000">
      <p><?= $ab['Column1']; ?></p>
      </div>
      <div class="col-sm-4" data-aos="flip-right"data-aos-duration="3000">
      <p><?= $ab['Coulmn2']; ?></p>

      </div>
    </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(136, 105, 5, 0.753)" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,272C384,299,480,277,576,245.3C672,213,768,171,864,165.3C960,160,1056,192,1152,224C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  <?php endforeach ?>
  <!--Project-->
  
  <section id="project">
    <div class="container">
    <div class="row text-center"data-aos="zoom-in">
      <h2>Project</h2>
    </div>
     <div class="row justify-content-evenly fs-5">
     <?php foreach($data['project'] as $prj) : ?>
       <div class="col-sm-4"data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"data-aos-delay="50">
        <div class="card" style="width: 18rem;">
          <img src="http://localhost/ujikom_karina/public/asset/img/rin.jpg" class="card-img-top" alt="..."/>
          <div class="card-body">
            <h3><?$prj['Nama_p']; ?></h3>
          <p class="card-text"><?= $prj['Ket']; ?></p>        
          </div>
        </div>
       </div>
       <?php endforeach ?>
     </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(136, 105, 5, 0.753)" fill-opacity="1" d="M0,224L48,186.7C96,149,192,75,288,74.7C384,75,480,149,576,192C672,235,768,245,864,218.7C960,192,1056,128,1152,133.3C1248,139,1344,213,1392,250.7L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <!--akhir project-->
  <!--contact-->
  <section id="Contact">
    <div class="container tp-5">
    <div class="row text-center">
      <h2>contact</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-6" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom"data-aos-duration="5000">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="Email" class="form-label">Email address</label>
          <input type="email" name="Email" class="form-control" id="email" aria-describedby="emailHelp"required>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="Nama_k" id="nama"/>
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Pesan</label>
          <textarea class="form-control" placeholder="Isi pesan ada disini" name="Pesan" id="pesan " style="height : 100px"></textarea></div>
          <button type="submit" name="submit" class="btn btn-primary mt-4">Kirim</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  </section>  <footer class="row text-center">
    <p>created with <i class="bi bi-instagram"></i></i></i></i>Karina</p>
    <!--akhir contact-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({once: false,});
  </script>
</body>
</html>